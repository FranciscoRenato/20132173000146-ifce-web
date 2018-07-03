<?php
/**
 * Created by IntelliJ IDEA.
 * User: Renato Sousa
 * Date: 20/06/2018
 * Time: 19:41
 */

    include ("conexao.php");

    $error = array();

    $matricula = $conexao->escape_string($_REQUEST['matricula']);
    $email = $conexao->escape_string($_REQUEST['email']);
    $senha = $conexao->escape_string($_REQUEST['senha']);
    $senha_md5 = md5(md5($senha));

    $sql = "SELECT * FROM login WHERE matricula = '$matricula' AND email = '$email'";
    $insert = mysqli_query($conexao, $sql);
    $qtd_usuario = $insert->num_rows;

    if($qtd_usuario > 0){
        $error[] = "O usuário já etsá cadastrado.";
         echo "<script> alert('$error[0]'); </script>";
        // echo "<script> location.href=Location: ../cadastro_usuario.php</script>";
        echo '<script> location.href="../cadastro_usuario.php"; </script>';
        //header('Location: ../cadastro_usuario.php');
    }else{
        
        $sql = "INSERT INTO login (id, matricula, email, senha, senha_md5) 
            values('', '$matricula', '$email', '$senha', '$senha_md5')";

        $insert = mysqli_query($conexao, $sql);    

        if($insert){
            $error[] = "Usuário cadastrado com sucesso.";
            echo "<script> alert('$error[0]'); location.href='../index.php'; </script>";
            //header('Location: ../index.php');
        } else {
            $error[]="Erro ao cadastrar!";
            echo "<script> alert('$error[0]'); location.href='../cadastro_usuario.php' </script>";
        }
}
    mysqli_close($conexao);
?>
