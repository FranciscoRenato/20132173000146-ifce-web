<?php
/**
 * Created by IntelliJ IDEA.
 * User: Renato Sousa
 * Date: 12/05/2018
 * Time: 17:20
 */

$arquivoWeb = "arquivo.txt";

$text1 = "Primeira fraze do arquivo.";
$text2 = "Segunda fraze do arquivo.";
$text3 = "Terceira fraze do arquivo.";

echo "Verificando se há algum arquivo.<br>";

if (file_exists($arquivoWeb)){
    echo "Existe um arquivo e ele será aberto.<br>";
    fopen($arquivoWeb, "a");
} else {
    echo "Não existe nenhum arquivo.<br>";
    echo "Mas será criado.<br>";
    fopen($arquivoWeb, "w");
    echo "Arquivo criado.<br>";
}

$gravar = fopen($arquivoWeb, "w");

fwrite($gravar, "$text1 \n");
fwrite($gravar, "$text2 \n");
fwrite($gravar, $text3);

fclose($gravar);
echo "Três frazes foram escritas no arquivo.";
?>
<p>Para visualizar o conteudo do arquivo clique em visualizar.</p>
<a href="gravar-no-arquivo.php"><input type="button" value="Visualizar"></a>


<!--
if(file_exists("arquivo.txt")){
echo "Arquivo exixtente. <br>";
echo "Conteúdo do arquivo:<br>";

$myfile = file("arquivo.txt");
echo "$myfile[0]<br>";
echo "$myfile[1]<br>";
echo $myfile[2];

} else {
echo "O arquivo não existe.";
}
*/-->