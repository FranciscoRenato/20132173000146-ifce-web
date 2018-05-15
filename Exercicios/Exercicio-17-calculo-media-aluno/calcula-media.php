<?php
/**
 * Created by IntelliJ IDEA.
 * User: Renato Sousa
 * Date: 12/05/2018
 * Time: 15:21
 */

$nomeAluno = $_POST["nomeAluno"];
$disciplina = $_POST["disciplina"];
$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$nota3 = $_POST["nota3"];

echo "O nome do aluno é: " . $nomeAluno . ".<br>";
echo "A disciplina é: " . $disciplina . ".<br>";
echo "As notas do aluno é:<br>" . "Nota 1: " . $nota1 . ", nota 2: " . $nota2 . ", e nota 3: " . $nota3;

function calculaMedia($n1, $n2, $n3){
    return $media = ($n1 + $n2 + $n3) / 3;
}

$notafinal = calculaMedia($nota1,$nota2,$nota3);


if ($notafinal >= 7){
    echo "<br>O aluno " . $nomeAluno . " está aprovado com média " . $notafinal;
} else {
    echo "<br>O aluno " . $nomeAluno . " está reprovado com média " . $notafinal;
}

?>