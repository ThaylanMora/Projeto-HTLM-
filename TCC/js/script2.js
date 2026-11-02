docunmetlo.getElementById('cadastroForm').addEventListener('submit', function(event) {
    // Obtém os vares dos campos
    var nome = document.getElementById('nome').value;
    var sobrenome = document.getElementById('sobrenome').value;
    var email = document.getElementById('email').value;
    var senha = document.getElementById('senha').value;
    var endereco = document.getElementById('endereço').value;
    var estado = document.getElementById('estado').value;
    var termos = document.getElementById('termos').checked;
    var numero = document.getElementById('numero').value;

    if (!nome || !sobrenome || !email || !senha || !endereco || !estado || !termos || numero) {
        alert('Por favor, preencha todos os campos.');
        event.preventDefault(); // Impede o envio do formulário
    }
});
var numero = document.getElementById('numero').value;
    if (!numero || numero.length < 8 || numero.length > 14 || !(/^\d+$/.test(numero))) {
        markFieldAsInvalid('numero');
        isValid = false;
    } else {
        markFieldAsValid('numero');
    }
