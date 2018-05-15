<?php
/**
 * Created by IntelliJ IDEA.
 * User: Renato Sousa
 * Date: 12/05/2018
 * Time: 11:46
 */

$salario = $_POST["salario"];
$valorVendas = $_POST["valor-vendas"];

$salarioTotal = $salario + (0.04 * $valorVendas);

echo "O salário do vendedor é: R$ " . $salario . ".<br>";
echo "O valor das vendas é: R$ " . $valorVendas . ".<br>";
echo "O salário total do vendedor é: R$ " . $salarioTotal . " reais.";
?>