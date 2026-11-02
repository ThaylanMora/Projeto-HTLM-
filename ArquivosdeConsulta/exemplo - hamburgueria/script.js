const filterButtons = document.querySelectorAll(".filter-button");
const menuCards = document.querySelectorAll(".menu-card");
const cartCount = document.querySelector("#cart-count");
const toast = document.querySelector("#toast");
const menuToggle = document.querySelector(".menu-toggle");
const navigation = document.querySelector("#primary-nav");

let itemCount = 0;
let toastTimeout;

filterButtons.forEach((button) => {
  button.addEventListener("click", () => {
    const category = button.dataset.filter;

    filterButtons.forEach((filter) => {
      const isActive = filter === button;
      filter.classList.toggle("is-active", isActive);
      filter.setAttribute("aria-pressed", String(isActive));
    });

    menuCards.forEach((card) => {
      card.hidden = category !== "all" && card.dataset.category !== category;
    });
  });
});

document.querySelectorAll(".add-button").forEach((button) => {
  button.addEventListener("click", () => {
    itemCount += 1;
    cartCount.textContent = String(itemCount);
    const itemName = button.getAttribute("aria-label")
      .replace(/^Adicionar /, "")
      .replace(/ à sacola$/, "");
    showToast(`${itemName} adicionado à sua sacola`);
  });
});

menuToggle.addEventListener("click", () => {
  const isExpanded = menuToggle.getAttribute("aria-expanded") === "true";
  menuToggle.setAttribute("aria-expanded", String(!isExpanded));
  menuToggle.setAttribute("aria-label", isExpanded ? "Abrir navegação" : "Fechar navegação");
  navigation.classList.toggle("is-open", !isExpanded);
});

navigation.querySelectorAll("a").forEach((link) => {
  link.addEventListener("click", () => {
    menuToggle.setAttribute("aria-expanded", "false");
    menuToggle.setAttribute("aria-label", "Abrir navegação");
    navigation.classList.remove("is-open");
  });
});

function showToast(message) {
  toast.textContent = message;
  toast.classList.add("is-visible");
  window.clearTimeout(toastTimeout);
  toastTimeout = window.setTimeout(() => {
    toast.classList.remove("is-visible");
  }, 2400);
}
