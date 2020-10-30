function denunciar() {
    if (nome_denuncia.value.length == 0) {
        alert("Você deve preencher o nome da empresa corretamente para realizar a sua denúncia")
    } else if (titulo_denuncia.value.length == 0) {
        alert("Você deve preencher o campo título corretamente para realizar a sua denúncia")
    } else if (escreva_denuncia.value.length == 0) {
        alert("Você deve preencher o campo descritivo do ocorrido corretamente para realizar a sua denúncia")
    } else if (nome_denuncia.value.length == 0 || escreva_denuncia.value.length == 0) {
        alert("Você deve preencher os campos corretamente para realizar a sua denúncia")
    } else {
        alert("Denúncia realizada com sucesso!!!")
    }
}