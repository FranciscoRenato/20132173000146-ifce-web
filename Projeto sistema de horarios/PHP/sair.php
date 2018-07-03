<?php
/**
 * Created by IntelliJ IDEA.
 * User: Renato Sousa
 * Date: 18/06/2018
 * Time: 20:03
 */

    @session_start();                        //Abre a sessão e pega os dados contidos nela
    session_destroy();                       //Destrói a sessão atual
    unset($_SESSION);                        //Destrói o conteúdo da variavél sessão
    header('Location: ../index.php');  //Move o usuário para a pagina de login
    exit();                                  //Garante que ele saiu da página atual
?>