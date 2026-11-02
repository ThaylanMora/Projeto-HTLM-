"use strict";

const WHATSAPP_NUMBER = "5561981723197";
const cart = [];
const menuCards = [...document.querySelectorAll(".menu .box-container .box")];
const cartItems = document.getElementById("cart-items");
const cartCount = document.getElementById("cart-count");
const cartTotal = document.getElementById("cart-total");
const cartDrawer = document.getElementById("cart-drawer");
const cartOverlay = document.getElementById("cart-overlay");
const cartStatus = document.getElementById("cart-status");
const searchControl = document.querySelector(".search-control");
const searchForm = document.getElementById("search-form");
const searchInput = document.getElementById("search-input");
const noResults = document.getElementById("no-results");
const pickupCodeResult = document.getElementById("pickup-code-result");
const pickupCodeElement = document.getElementById("pickup-code");
let pickupCode = null;
function normalizeText(value) {
    return value.normalize("NFD").replace(/[\u0300-\u036f]/g, "").toLocaleLowerCase("pt-BR");
}

function parsePrice(priceText) {
    const match = priceText.match(/R\$\s*([\d.]+,\d{2})/);
    if (!match) {
        throw new Error(`Preço inválido no produto: ${priceText}`);
    }

    return Number(match[1].replace(/\./g, "").replace(",", "."));
}

function formatCurrency(value) {
    return value.toLocaleString("pt-BR", {
        style: "currency",
        currency: "BRL"
    });
}

function announce(message) {
    cartStatus.textContent = "";
    window.setTimeout(() => {
        cartStatus.textContent = message;
    }, 20);
}

function setSearchOpen(isOpen) {
    searchForm.hidden = !isOpen;
    document.getElementById("btn-search").setAttribute("aria-expanded", String(isOpen));

    if (isOpen) {
        searchInput.focus();
    } else {
        document.getElementById("btn-search").focus();
    }
}

function invalidatePickupCode() {
    pickupCode = null;
    pickupCodeResult.hidden = true;
    pickupCodeElement.textContent = "";
}

function createPickupCode() {
    const randomValues = new Uint32Array(1);
    window.crypto.getRandomValues(randomValues);
    const code = String(randomValues[0] % 100000000).padStart(8, "0");
    return `IMP-${code}`;
}

function renderCart() {
    cartItems.replaceChildren();

    if (cart.length === 0) {
        const emptyMessage = document.createElement("p");
        emptyMessage.className = "cart-empty";
        emptyMessage.textContent = "Seu carrinho está vazio.";
        cartItems.append(emptyMessage);
    }

    let itemCount = 0;
    let total = 0;

    cart.forEach((item, index) => {
        itemCount += item.quantity;
        total += item.price * item.quantity;

        const row = document.createElement("article");
        row.className = "cart-item";

        const details = document.createElement("div");
        const name = document.createElement("h3");
        name.textContent = item.name;
        const sugar = document.createElement("p");
        sugar.textContent = `Açúcar: ${item.sugar}`;
        const actions = document.createElement("div");
        actions.className = "cart-item-actions";

        const decrease = document.createElement("button");
        decrease.type = "button";
        decrease.dataset.action = "decrease";
        decrease.dataset.index = String(index);
        decrease.setAttribute("aria-label", `Diminuir quantidade de ${item.name}`);
        decrease.textContent = "−";

        const quantity = document.createElement("span");
        quantity.textContent = String(item.quantity);
        quantity.setAttribute("aria-label", "Quantidade");

        const increase = document.createElement("button");
        increase.type = "button";
        increase.dataset.action = "increase";
        increase.dataset.index = String(index);
        increase.setAttribute("aria-label", `Aumentar quantidade de ${item.name}`);
        increase.textContent = "+";

        const remove = document.createElement("button");
        remove.type = "button";
        remove.className = "remove-item";
        remove.dataset.action = "remove";
        remove.dataset.index = String(index);
        remove.textContent = "Remover";

        actions.append(decrease, quantity, increase, remove);
        details.append(name, sugar, actions);

        const price = document.createElement("span");
        price.className = "cart-item-price";
        price.textContent = formatCurrency(item.price * item.quantity);

        row.append(details, price);
        cartItems.append(row);
    });

    cartCount.textContent = String(itemCount);
    cartTotal.textContent = formatCurrency(total);
    document.getElementById("cart-checkout").disabled = cart.length === 0;
}

function addToCart(card) {
    const name = card.querySelector("h3").textContent.trim();
    const price = parsePrice(card.querySelector(".price").textContent);
    const sugar = card.querySelector(".sugar-select").value;
    const existingItem = cart.find(item =>
        item.name === name && item.sugar === sugar && item.price === price
    );

    if (existingItem) {
        existingItem.quantity += 1;
    } else {
        cart.push({ name, price, sugar, quantity: 1 });
    }

    invalidatePickupCode();
    renderCart();
    announce(`${name} adicionado ao carrinho. Açúcar: ${sugar}.`);
}

function setCartOpen(isOpen) {
    document.body.classList.toggle("cart-open", isOpen);
    cartDrawer.setAttribute("aria-hidden", String(!isOpen));
    cartDrawer.inert = !isOpen;
    cartOverlay.setAttribute("aria-hidden", String(!isOpen));
    document.getElementById("btn-cart").setAttribute("aria-expanded", String(isOpen));

    if (isOpen) {
        document.getElementById("cart-close").focus();
    } else {
        document.getElementById("btn-cart").focus();
    }
}

function filterMenu(query) {
    const normalizedQuery = normalizeText(query.trim());
    let visibleCount = 0;

    menuCards.forEach(card => {
        const productName = card.querySelector("h3").textContent;
        const matches = normalizeText(productName).includes(normalizedQuery);
        card.hidden = !matches;
        if (matches) {
            visibleCount += 1;
        }
    });

    noResults.hidden = normalizedQuery.length === 0 || visibleCount > 0;
}

menuCards.forEach(card => {
    card.querySelector(".add-to-cart").addEventListener("click", () => addToCart(card));
});

document.getElementById("btn-cart").addEventListener("click", () => setCartOpen(true));
document.getElementById("cart-close").addEventListener("click", () => setCartOpen(false));
cartOverlay.addEventListener("click", () => setCartOpen(false));
document.getElementById("btn-search").addEventListener("click", () => {
    setSearchOpen(searchForm.hidden);
});

cartItems.addEventListener("click", event => {
    const button = event.target.closest("button[data-action]");
    if (!button) {
        return;
    }

    const index = Number(button.dataset.index);
    const item = cart[index];
    if (!item) {
        return;
    }

    if (button.dataset.action === "increase") {
        item.quantity += 1;
    } else if (button.dataset.action === "decrease") {
        item.quantity -= 1;
        if (item.quantity <= 0) {
            cart.splice(index, 1);
        }
    } else if (button.dataset.action === "remove") {
        cart.splice(index, 1);
    }

    invalidatePickupCode();
    renderCart();
});

searchInput.addEventListener("input", () => filterMenu(searchInput.value));
searchForm.addEventListener("submit", event => {
    event.preventDefault();
    filterMenu(searchInput.value);
    document.getElementById("menu").scrollIntoView({ behavior: "smooth", block: "start" });
});

document.addEventListener("click", event => {
    if (!searchForm.hidden && !searchControl.contains(event.target)) {
        setSearchOpen(false);
    }
});

document.addEventListener("keydown", event => {
    if (document.body.classList.contains("cart-open")) {
        if (event.key === "Escape") {
            event.preventDefault();
            setCartOpen(false);
            return;
        }

        if (event.key === "Tab") {
            const focusableElements = [...cartDrawer.querySelectorAll(
                'a[href], button:not(:disabled), input:not(:disabled), select:not(:disabled), textarea:not(:disabled), [tabindex]:not([tabindex="-1"])'
            )].filter(element => !element.hidden);
            const firstElement = focusableElements[0];
            const lastElement = focusableElements[focusableElements.length - 1];

            if (event.shiftKey && document.activeElement === firstElement) {
                event.preventDefault();
                lastElement.focus();
            } else if (!event.shiftKey && document.activeElement === lastElement) {
                event.preventDefault();
                firstElement.focus();
            }
        }

        return;
    }

    if (event.key === "Escape" && !searchForm.hidden) {
        setSearchOpen(false);
    }
});

document.getElementById("cart-checkout").addEventListener("click", () => {
    if (cart.length === 0) {
        announce("Adicione um produto antes de finalizar o pedido.");
        return;
    }

    const customerName = document.getElementById("customer-name");
    if (!customerName.checkValidity()) {
        customerName.reportValidity();
        return;
    }

    if (!pickupCode) {
        pickupCode = createPickupCode();
    }

    pickupCodeElement.textContent = pickupCode;
    pickupCodeResult.hidden = false;

    const note = document.getElementById("customer-note").value.trim();
    const lines = cart.map(item =>
        `${item.quantity}x ${item.name} - ${item.sugar} - ${formatCurrency(item.price * item.quantity)}`
    );
    const total = cart.reduce((sum, item) => sum + item.price * item.quantity, 0);
    const message = [
        "Olá! Gostaria de fazer este pedido:",
        "",
        ...lines,
        "",
        `Código para retirada: ${pickupCode}`,
        `Total: ${formatCurrency(total)}`,
        `Nome: ${customerName.value.trim()}`,
        ...(note ? [`Observações: ${note}`] : [])
    ].join("\n");
    const whatsappUrl = `https://wa.me/${WHATSAPP_NUMBER}?text=${encodeURIComponent(message)}`;
    window.open(whatsappUrl, "_blank", "noopener,noreferrer");
});

renderCart();
