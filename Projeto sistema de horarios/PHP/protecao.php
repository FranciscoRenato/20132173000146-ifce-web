<?php
/**
 * Created by IntelliJ IDEA.
 * User: Renato Sousa
 * Date: 13/06/2018
 * Time: 15:21
 */

include("conexao.php");           //Inclui o arquivo de conexão do Banco de dados

    if(!function_exists("protecao")){      //Se não existir a função de proteção

        function protecao(){                           //Cria a função de proteção

            if(!isset($_SESSION))                      //Se não existir uma sessão
                session_start();                       //Cria uma sessão

            if(!isset($_SESSION['login']) || !is_numeric($_SESSION['login'])){  //Se não existir uma sessão e se ela não for numérica
               header('Location: ../index.php');       //Redireciona para a tela de login
            }
        }
    }
?>