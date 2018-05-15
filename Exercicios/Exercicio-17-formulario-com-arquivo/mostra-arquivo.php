<?php
/**
 * Created by IntelliJ IDEA.
 * User: Renato Sousa
 * Date: 14/05/2018
 * Time: 13:49
 */



if (file_exists("arquivo.txt")){
    echo "O conteúdo do Arquivo é: <br>";
    fopen("arquivo.txt", "a");
    $leitura = file("arquivo.txt");
    echo file_get_contents("arquivo.txt");
} else {
    echo "Arquivo inexistente!";
}

?>