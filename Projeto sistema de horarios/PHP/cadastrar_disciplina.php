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

    $error = array();

    $curso = $conexao->escape_string($_REQUEST['curso']);
    $professor = $conexao->escape_string($_REQUEST['professor']);
    $disciplina = $conexao->escape_string($_REQUEST['disciplina']);
    $diaSemana = $conexao->escape_string($_REQUEST['diaSemana']);
    $horaInicio = $conexao->escape_string($_REQUEST['horaInicio']);
    $horaFim = $conexao->escape_string($_REQUEST['horaFim']);
    $sala = $conexao->escape_string($_REQUEST['sala']);

    $verifica = mysqli_query($conexao, "SELECT * FROM horario_das_disciplinas WHERE sala = '$sala' AND horaFim = '$horaFim' AND horaInicio = '$horaInicio' AND diaSemana = '$diaSemana'");

    if (mysqli_num_rows($verifica) > 0) {

        echo "A sala já está reservada nesse dia e horário, Por favor escolha outro dia e horário, ou outra sala.";
                header('Location: ../cadastro_disciplina.php');

    } else {

        $sql = "INSERT INTO horarios_das_disciplinas (id, curso, professor, disciplina, diaSemana, horaInicio, horaFim, sala)
                VALUES ('' ,'$curso', '$professor', '$disciplina', '$diaSemana', '$horaInicio', '$horaFim', '$sala')";

        $insert = mysqli_query($conexao, $sql);

        if($insert){
            header('Location: ../Tela_principal.php');
        } else {
            $error[]="Erro ao cadastrar!";
            echo "<script> alert('$error[0]'); //location.href='Location: ../cadastro_disciplina.php' </script>";
            header('Location: ../cadastro_disciplina.php');
        }

    }

    mysqli_close($conexao);
?>
