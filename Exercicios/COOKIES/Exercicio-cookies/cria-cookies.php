<?php
/**
 * Created by IntelliJ IDEA.
 * User: Renato Sousa
 * Date: 15/05/2018
 * Time: 14:11
 */

$nome = $_COOKIE['nome'];
$cidade = $_GET['cidade'];

setcookie($nome,$cidade, time() + 60);

echo $_COOKIE["cidade"];

echo "Para finalizar clique em finalizar.";
?>


