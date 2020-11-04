
function filtroEmpresa(){
    let filtro = document.getElementById('filtro');
    let topico = document.getElementsByClassName('topico');
    let nome=document.getElementsByClassName('empresaJS')
    for(let i =0;i<topico.length;i++){
        console.log(nome[i].innerHTML);
        if(nome[i].innerHTML!=filtro.value){
            topico[i].setAttribute('hidden',true)
        } else {
            topico[i].removeAttribute('hidden')
        }
    }
}

function showForm(botao){
    let topico=botao.parentElement;
    let form = topico.lastElementChild;
    form.removeAttribute('hidden');

}