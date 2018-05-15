<?php
/**
 * Created by IntelliJ IDEA.
 * User: Renato Sousa
 * Date: 13/05/2018
 * Time: 14:43
 */

if(file_exists("arquivo.txt")){
    echo "Arquivo exixtente. <br>";
    echo "Conteúdo do arquivo:<br>";

    $myfile = file("arquivo.txt");
    echo "$myfile[0]<br>";
    echo "$myfile[1]<br>";
    echo "$myfile[2]<br>";

} else {
    echo "O arquivo não existe.";
}


?>