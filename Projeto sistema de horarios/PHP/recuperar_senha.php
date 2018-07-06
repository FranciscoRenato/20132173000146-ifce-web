<?php
/**
 * Created by IntelliJ IDEA.
 * User: Renato Sousa
 * Date: 18/06/2018
 * Time: 21:20
 */

    include ("conexao.php");

    $email = $conexao->escape_string($_REQUEST['es_email']);
    $matricula = $conexao->escape_string($_REQUEST['es_matricula']);
    $erro = array();

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

        $erro[] = "E-mail inválido";
        echo "<script> alert('$erro[0]'); location.href='../esqueci_senha.php'; </script>";

    }

    if (count($erro) == 0){

        $sql_code = "SELECT senha FROM login WHERE matricula = '$matricula' AND email = '$email'";
        $sql_query = $conexao->query($sql_code) or die($conexao->error); 			    //Faz uma conexao com o banco de dados e verifica se há erro
        $dado = $sql_query->fetch_assoc();														//Armazena num array de dados, os dados do base64_decode
        $total = $sql_query->num_rows;															//Verifica se houve retorno do banco de dados e faz uma

        if ($total == 0){

            $erro[] = "O e-mail ou a matrícula informado não existe no banco de dados.";
            echo "<script>	alert('$erro[0]');	location.href='../esqueci_senha.php'; </script>";

        } else {

            if (mail($email, "Sua senha", "Sua senha é: " . "$dado[senha]")){

                header('Location: ../index.php');
   
            } else {
   
                echo "Erro ao enviar";
   
            }
        }

    }
?>