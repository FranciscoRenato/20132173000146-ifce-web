<?php
    $nivel = ", sua Classificação é ";
    $altura = $_POST(altura);
    $peso = $_POST(peso);

    $IMC = $peso/($altura*$altura);

    if($IMC < 16){
        echo "Seu IMC é " . $IMC . $nivel . "magreza grave.";
    }elseif ($IMC > 16 && $IMC < 17){
        echo "Seu IMC é " . $IMC . $nivel . "magreza moderada.";
    }elseif ($IMC > 17 && $IMC < 18.5){
        echo "Seu IMC é " . $IMC . $nivel . "magreza leve.";
    }elseif ($IMC > 18.5 && $IMC < 25){
        echo "Seu IMC é " . $IMC . $nivel . "saudável.";
    }elseif ($IMC > 25 && $IMC < 30){
        echo "Seu IMC é " . $IMC . $nivel . "sobrepeso.";
    }else{
        echo "Seu IMC é " . $IMC . $nivel . "obesidade.";
    }
?>