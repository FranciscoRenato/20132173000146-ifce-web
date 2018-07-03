<?php
    /**
     * Created by IntelliJ IDEA.
     * User: Renato Sousa
     * Date: 31/05/2018
     * Time: 14:05
     */

    include ("conexao.php");

    mysqli_set_charset($conexao, 'ut-8');

    header('Content-Type:text/html;charset=utf-8');
    //<form accept-charset="utf-8">

    $error = array();

    //$conexao = mysqli_connect('localhost', 'root', 'Renato123', 'sistema_horario')
    //or die('Erro ao conectar com o Banco!');

    //$sql = "SELECT matricula, email, senha FROM login";
    //$resultado = mysqli_query($conexao,$sql);

    //  while ($dados = mysqli_fetch_array($resultado)){
    //      if(($matricula == $dados['matricula']) && ($email == $dados['email']) && ($senha == $dados['senha'])){
    //++++++++++++++++++++++++++++++++++++++
    //      }

    //}


    $curso = $conexao->escape_string($_REQUEST['curso']);
    $professor = $conexao->escape_string($_REQUEST['professor']);
    $disciplina = $conexao->escape_string($_REQUEST['disciplina']);
    $diaSemana = $conexao->escape_string($_REQUEST['diaSemana']);
    $horaInicio = $conexao->escape_string($_REQUEST['horaInicio']);
    $horaFim = $conexao->escape_string($_REQUEST['horaFim']);
    $sala = $conexao->escape_string($_REQUEST['sala']);

    //  mysqli_select_db("horarios-das-disciplinas", $conexao);

    $verifica = mysqli_query($conexao, "SELECT * FROM horario_das_disciplinas WHERE sala = '$sala' AND horaFim = '$horaFim' AND horaInicio = '$horaInicio' AND diaSemana = '$diaSemana'");
//echo "$verifica";
    if (mysqli_num_rows($verifica) > 0) {
       // mysqli_close($conexao);
        echo "A sala já está reservada nesse dia e horário, Por favor escolha outro dia e horário, ou outra sala.";
                header('Location: ../cadastro_disciplina.php');

    } else {

        $sql = "INSERT INTO horarios_das_disciplinas (id, curso, professor, disciplina, diaSemana, horaInicio, horaFim, sala)
                VALUES ('' ,'$curso', '$professor', '$disciplina', '$diaSemana', '$horaInicio', '$horaFim', '$sala')";

        $insert = mysqli_query($conexao, $sql);

        if($insert){
            //$error[] = "Disciplina cadastrada com sucesso.";
           // echo "<script> alert('$error[0]') //location.href='Location: ../Tela_principal.php'; </script>";
            header('Location: ../Tela_principal.php');
        } else {
            $error[]="Erro ao cadastrar!";
            echo "<script> alert('$error[0]'); //location.href='Location: ../cadastro_disciplina.php' </script>";
            header('Location: ../cadastro_disciplina.php');
        }

    }

    mysqli_close($conexao);
?>
