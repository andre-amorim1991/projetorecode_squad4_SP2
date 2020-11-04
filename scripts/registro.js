function enviar() {
    if (termos.checked === false) {
        alert("Você deve aceitar os termos de uso para se registrar.")
    } else if (
        nome.value.length == 0 ||
        cpf.value.length == 0 ||
        telefone.value.length == 0 ||
        email.value.length == 0 ||
        nasc.value.length == 0 ||
        estado.value.length == 0 ||
        cidade.value.length == 0 ||
        senha.value.length == 0
    ) {
        alert("Você deve inserir todos os dados")
    } else if (senha.value != confsenha.value) {
        alert("A senha e a confirmação são diferentes")
    } else {
        //ENVIO DE DADOS BACKEND
    }

}
