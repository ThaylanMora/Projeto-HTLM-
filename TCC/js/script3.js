
document.getElementById('planoForm').addEventListener('submit', function(event) {
    var isValid = true;

    // Validação do plano
    var plano = document.getElementById('plano').value;
    if (!plano) {
        markFieldAsInvalid('plano');
        isValid = false;
    } else {
        markFieldAsValid('plano');
    }

    // Validação do número do cartão
    var cartao = document.getElementById('cartao').value;
    if (!cartao || cartao.length < 16 || cartao.length > 16 || !(/^\d+$/.test(cartao))) {
        markFieldAsInvalid('cartao');
        isValid = false;
    } else {
        markFieldAsValid('cartao');
    }

    // Validação da validade do cartão
    var validade = document.getElementById('validade').value;
    if (!validade || !/^\d{2}\/\d{4}$/.test(validade)) {
        markFieldAsInvalid('validade');
        isValid = false;
    } else {
        markFieldAsValid('validade');
    }

    // Validação do código de segurança (CVV)
    var cvv = document.getElementById('cvv').value;
    if (!cvv || cvv.length < 3 || !(/^\d+$/.test(cvv))) {
        markFieldAsInvalid('cvv');
        isValid = false;
    } else {
        markFieldAsValid('cvv');
    }

    // Validação do gênero
    var genero = document.getElementById('genero').value;
    if (!genero) {
        markFieldAsInvalid('genero');
        isValid = false;
    } else {
        markFieldAsValid('genero');
    }

    // Validação da unidade
    var unidade = document.getElementById('unidade').value;
    if (!unidade) {
        markFieldAsInvalid('unidade');
        isValid = false;
    } else {
        markFieldAsValid('unidade');
    }

    // Validação do número de celular
    var celular = document.getElementById('celular').value;
    if (!celular || celular.length < 8 || celular.length > 14 || !(/^\d+$/.test(celular))) {
        markFieldAsInvalid('celular');
        isValid = false;
    } else {
        markFieldAsValid('celular');
    }

    if (!isValid) {
        event.preventDefault(); // Impede o envio do formulário se houver campos inválidos
    }
});

function markFieldAsValid(fieldName) {
    var field = document.getElementById(fieldName);
    field.classList.remove('invalid');
    field.classList.add('valid');

    // Remove a mensagem de erro, se houver
    var errorMessage = field.nextElementSibling;
    if (errorMessage && errorMessage.classList.contains('error-message')) {
        errorMessage.remove();
    }
}

function markFieldAsInvalid(fieldName) {
    var field = document.getElementById(fieldName);
    field.classList.remove('valid');
    field.classList.add('invalid');

    // Adiciona a mensagem de erro, se ainda não houver
    var errorMessage = field.nextElementSibling;
    if (!errorMessage || !errorMessage.classList.contains('error-message')) {
        errorMessage = document.createElement('span');
        errorMessage.textContent = 'Campo inválido';
        errorMessage.classList.add('error-message');
        field.parentNode.insertBefore(errorMessage, field.nextSibling);
    }
}
