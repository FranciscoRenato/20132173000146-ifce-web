
<html>
	<head>
		
		<meta charset="utf-8"> 
		<title> Editar Cadastro </title>                   <!-- Titulo -->
    	<link rel="stylesheet" href="../CSS/estilo_horario.css">               <!-- Chamada e incusão da folha de estilo do CSS -->		
				
		<?php 

			//include("conexao.php");

		   //Recebe os dados a serem editados
		    
		    $id = filter_input(INPUT_POST, 'id');
		    $curso = filter_input(INPUT_POST, 'curso');
		    $professor = filter_input(INPUT_POST, 'professor');
		    $disciplina = filter_input(INPUT_POST, 'disciplina');
		    $diaSemana = filter_input(INPUT_POST, 'diaSemana');
		    $horaInicio = filter_input(INPUT_POST, 'horaInicio');
		    $horaFim = filter_input(INPUT_POST, 'horaFim');
		    $sala = filter_input(INPUT_POST, 'sala');

		  //  $sql = "SELECT * FROM horario_das_disciplinas WHERE id = '$id'";

		    //$query = mysqli_query($conexao, $sql);

		//	$dados = mysqli_fetch_array($query)
		    
		    /*while ($dados = mysqli_fetch_array($query)) {
		    	$ID = $dados["id"];
		    	$curso = $dados["curso"];
		    	$professor = $dados["professor"];
		    	$disciplina = $dados["disciplina"];
		    	$diaSemana = $dados["diaSemana"];
		    	$horaInicio = $dados["horaInicio"];
		    	$horaFim = $dados["horaFim"];
		    	$sala = $dados["sala"];

		    }*/

		 ?>

	</head>
	<body>

	<div id="editar_cadastro_disciplina">
 		 		
		<form class="edita_cadastro_disciplina" action='alterar_dados.php' method='post' accept-charset='utf-8'>
	 	
		<!-- Link da logo  da tela de cadastro -->
        <img id="logo_editar_cadastro_disciplina" src="../Imagens/logo-ifce-taua-transparente.png" alt="IFCE Tauá">

        <legend id="legenda_editar_cadatro_discilina"> Editar Cadastro </legend> <!-- Legenda da tela de cadastro -->
        <br><br><br>
 		
 		<p> <label for="eId"></label> <input type="hidden" name="id" id="cId" size="30" value="<?php echo $id ?>"></p>

 		<!-- Campo curso com identificador para auxiliar na tela celula/tablet -->
        <p> <label for="eCurso"> Curso: </label> <input type="text" name="curso" id="cCurso" size="30" value="<?php echo $curso ?>"></p>

        <!-- Campo professor com identificador para auxiliar na tela celula/tablet -->
        <p> <label for="eProfessor"> Professor: </label> <input  type="text" name="professor" id="eProfessor" size="27" value='<?php echo $professor ?>'></p>

        <!-- Campo disciplina com identificador para auxiliar na tela celula/tablet -->
        <p> <label for="eDisciplina"> Disciplina: </label> <input type="text" name="disciplina" id="cDisciplina" size="26"  value='<?php echo $disciplina ?>'></p>

        <!-- Campo dia da semana com identificador para auxiliar na tela celula/tablet -->
        <p id="eDia"> <label for="cSemana"> Dia da semana: </label>
            <select name="diaSemana" id="eSemana">
                <option value=""> Selecione </option>
                <option value="Segunda"> Segunda </option>
                <option value="Terça"> Terça </option>
                <option value="Quarta"> Quarta </option>
                <option value="Quinta"> Quinta </option>
                <option value="Sexta"> Sexta </option>
            </select>
        </p>

        <!-- Campo hora inicio com identificador para auxiliar na tela celula/tablet -->
        <p id="eHora"><label for="timeInicio"> Horário Início: </label><input type="time" name="horaInicio" id="timeInicio" value='<?php echo $horaInicio ?>'></p>

        <!-- Campo hora fim com identificador para auxiliar na tela celula/tablet -->
        <p id="eHorafim"><label for="timeFim"> Horário Fim: </label><input type="time" name="horaFim" id="timeFim" value='<?php echo $horaFim ?>'></p>

        <!-- Campo hora fim com identificador para auxiliar na tela celula/tablet -->
        <p id="eSala"><label for="id_sala"> Sala: </label><input type="number" name="sala" id="id_sala" value='<?php echo $sala ?>'></p>

        <!-- botão para cadastrar disciplina com identificador para auxiliar na tela celula/tablet -->
       <!-- <input type="submit" name="button" value="Cadastrar Disciplina">
        &nbsp;-->
       
	 		<!--<input type='text' name='id' readonly='readonly' value='<?php //echo $ID ?>'>
	 		<input type='text' name='curso' value='<?php //echo $curso ?>'>
	 		<input type='text' name='professor' value='<?php //echo $professor ?>'>
	 		<input type='text' name='disciplina' value='<?php //echo $disciplina ?>'>
			<input type='text' name='diaSemana' value='<?php //echo $diaSemana ?>'>
			<input type='text' name='horaInicio' value='<?php //echo $horaInicio ?>'>
			<input type='text' name='horaFim' value='<?php //echo $horaFim ?>'>
			<input type='text' name='sala' value='<?php //echo $sala ?>'>-->

			<input type='submit' name='editar' value='Salvar Alterações'>
	   	</form>
	</div>	
	</body>
</html>
 	



