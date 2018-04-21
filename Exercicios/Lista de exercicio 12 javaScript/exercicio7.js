/* função que identifica os valores */

function calculo7(){
    var valor = document.getElementById("texto7").value;

    if(valor >= 0 && valor < 10){
        alert("Insuficiente!");
    }
    if(valor >= 10 && valor < 14){
        alert("Bom!");
    }
    if (valor >= 14){
        alert("Muito Bom!");
    }
    return false;
}