<?php 

   include("conexao.php");

 			$id = filter_input(INPUT_POST, 'id');
		    $curso = filter_input(INPUT_POST, 'curso');
		    $professor = filter_input(INPUT_POST, 'professor');
		    $disciplina = filter_input(INPUT_POST, 'disciplina');
		    $diaSemana = filter_input(INPUT_POST, 'diaSemana');
		    $horaInicio = filter_input(INPUT_POST, 'horaInicio');
		    $horaFim = filter_input(INPUT_POST, 'horaFim');
		    $sala = filter_input(INPUT_POST, 'sala');

  	$resultado = mysqli_query($conexao, "UPDATE `horarios_das_disciplinas` SET curso='$curso', professor='$professor', disciplina='$disciplina', diaSemana='$diaSemana', horaInicio='$horaInicio', horaFim='$horaFim', sala='$sala' WHERE id = '$id'");
	
	if($resultado){
		header("Location: ../Tela_principal.php");
	} else {
		die("Error: " . mysqli_error($conexao));
	}

	mysql_close();
?>
