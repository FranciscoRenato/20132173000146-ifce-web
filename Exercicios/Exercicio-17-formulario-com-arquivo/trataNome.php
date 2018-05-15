<?php
/**
 * Created by IntelliJ IDEA.
 * User: Renato Sousa
 * Date: 13/05/2018
 * Time: 16:05
 */

$Nome1 = $_POST["nome1"];
$Nome2 = $_POST["nome2"];
$Nome3 = $_POST["nome3"];
$Nome4 = $_POST["nome4"];
$Nome5 = $_POST["nome5"];

$arquivo = "arquivo.txt";

if (file_exists($arquivo)){
    echo "O arquivo existe e vai ser gravado os seguintes nomes no arquivo:<br>";
    echo "$Nome1<br>";
    echo "$Nome2<br>";
    echo "$Nome3<br>";
    echo "$Nome4<br>";
    echo "$Nome5<br>";

    $myfile = fopen($arquivo,"w");
    fwrite($myfile,"$Nome1<br>");
    fwrite($myfile,"$Nome2<br>");
    fwrite($myfile,"$Nome3<br>");
    fwrite($myfile,"$Nome4<br>");
    fwrite($myfile,"$Nome5<br>");
    fclose($myfile);
    echo "Pronto! Os nomes foram gravados.<br>";
    echo "-------------------------------------------------------------------------<br>";
} else {
    echo "O arquivo não existe mas vai ser criado e gravado os seguintes nomes no arquivo:<br>";
    echo "$Nome1<br>";
    echo "$Nome2<br>";
    echo "$Nome3<br>";
    echo "$Nome4<br>";
    echo "$Nome5<br>";

    $myfile = fopen($arquivo,"w");
    fwrite($myfile,"$Nome1<br>");
    fwrite($myfile,"$Nome2<br>");
    fwrite($myfile,"$Nome3<br>");
    fwrite($myfile,"$Nome4<br>");
    fwrite($myfile,"$Nome5<br>");
    fclose($myfile);
    echo "Pronto! Os nomes foram gravados.<br>";
    echo "-------------------------------------------------------------------------<br>";
}

/**echo "Os arquivos graavados foram:<br>";
 * echo "$leitura[0]<br>";
echo "$leitura[1]<br>";
echo "$leitura[2]<br>";
echo "$leitura[3]<br>";
echo "$leitura[4]<br>";
fclose($arquivo);*/
echo "Para visualizar o texto do arquivo aperte no botão Visualizar<br>";
?>
<a href="mostra-arquivo.php"><input type="button" value="Visualizar"></a>
