/* função que identifica o toque */

var tela = false;
var caixa = false;

function clickTela() {
    if(caixa == false) {
        alert("Você perdeu o foco e não clicou na caixa 1.");
        tela = true;
    }
    caixa = false;
    return false;
}

function texto1(){
    alert("Primira caixa ativada!");
    caixa = true;
    return false;
}
