var memoria = ""
var caixaTexto = document.getElementById('container')

function mudarCor (valor) {
    memoria += valor
    console.log(memoria);
    caixaTexto.value = memoria

}