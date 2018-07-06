<?php
/**
 * Created by IntelliJ IDEA.
 * User: Renato Sousa
 * Date: 21/05/2018
 * Time: 14:37
 */

    //Criação da conexão do banco de dados
    $conexao = new mysqli("localhost","root","Renato123", "sistema_horario");

    //Verificação da coneção com o banco
    if($conexao->connect_errno){                                                   // Testa se o Objeto conexão está com erro

        die("Falha na Conexão com o Banco de Dados: " . $conexao->connect_errno);  // Exibe o erro

    }

?>
