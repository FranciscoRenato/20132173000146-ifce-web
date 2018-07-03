<?php
     include("PHP/protecao.php");
     protecao();
?>

<!DOCTYPE html>   <!-- Início do documento -->
<html lang="en" xmlns="http://www.w3.org/1999/html">   <!-- Início do html -->
<head>        <!-- Início do head -->

    <meta charset="UTF-8">                      <!-- Identificação dos caracteres portugueses -->
    <title> Cadastrar Disciplina </title>                   <!-- Titulo -->
    <link rel="stylesheet" href="CSS/estilo_horario.css">               <!-- Chamada e incusão da folha de estilo do CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script type="text/javascript">
        function cadastrar_disciplina() {

            if (document.cadastrar_disciplina.curso.value==""){
                alert("Por favor digite o nome do curso.");
                document.cadastrar_disciplina.curso.focus();       //Foco no campus curso
                return false;
            }

            if (document.cadastrar_disciplina.professor.value==""){
                alert("Por favor digite o nome do professor.");
                document.cadastrar_disciplina.professor.focus();       //Foco no campus professor
                return false;
            }

            if (document.cadastrar_disciplina.disciplina.value==""){
                alert("Por favor digite o nome da disciplina.");
                document.cadastrar_disciplina.disciplina.focus();       //Foco no campus disciplina
                return false;
            }

            if(document.cadastrar_disciplina.horaInicio.value==""){
                alert("Por favor informe o horário de início da aula.");
                document.cadastrar_disciplina.horaInicio.focus();
                return false;
            }

            if (document.cadastrar_disciplina.horaFim.value==""){
                alert("Por favor informe a horário de término da aula.");
                document.cadastrar_disciplina.horaFim.focus();
                return false;
            }
        }
    </script>

</head>     <!-- Fim do head -->
<body>      <!-- Início do bdy -->


<div id="div_cadastro_disciplina">   <!-- Início da DIV do formlário -->

    <form class="form_cadastro_disciplina" name="cadastrar_disciplina" method="post" onsubmit="return cadastrar_disciplina();" action="PHP/cadastrar_disciplina.php" >   <!-- Início do formlário cadastro -->

        <!-- Link da logo  da tela de cadastro -->
        <img id="logo_cadastro_disciplina" src="Imagens/logo-ifce-taua-transparente.png" alt="IFCE Tauá">

        <legend id="legenda_cadatro_discilina"> Cadastrar Disciplina </legend> <!-- Legenda da tela de cadastro -->
        <br><br><br>

        <!-- Campo curso com identificador para auxiliar na tela celula/tablet -->
        <p> <label for="cCurso"> Curso: </label> <input type="text" name="curso" id="cCurso" size="30" placeholder="Curso"></p>

        <!-- Campo professor com identificador para auxiliar na tela celula/tablet -->
        <p> <label for="cProfessor"> Professor: </label> <input  type="text" name="professor" id="cProfessor" size="27" placeholder="Professor"></p>

        <!-- Campo disciplina com identificador para auxiliar na tela celula/tablet -->
        <p> <label for="cDisciplina"> Disciplina: </label> <input type="text" name="disciplina" id="cDisciplina" size="26" placeholder="Disciplina"></p>

        <!-- Campo dia da semana com identificador para auxiliar na tela celula/tablet -->
        <p id="cDia"> <label for="cSemana"> Dia da semana: </label>
            <select name="diaSemana" id="cSemana">
                <option value=""> Selecione </option>
                <option value="Segunda"> Segunda </option>
                <option value="Terça"> Terça </option>
                <option value="Quarta"> Quarta </option>
                <option value="Quinta"> Quinta </option>
                <option value="Sexta"> Sexta </option>
            </select>
        </p>

        <!-- Campo hora inicio com identificador para auxiliar na tela celula/tablet -->
        <p id="cHora"><label for="timeInicio"> Horário Início: </label><input type="time" name="horaInicio" id="timeInicio" placeholder="Horário"></p>

        <!-- Campo hora fim com identificador para auxiliar na tela celula/tablet -->
        <p id="cHorafim"><label for="timeFim"> Horário Fim: </label><input type="time" name="horaFim" id="timeFim" placeholder="Horário"></p>

        <!-- Campo hora fim com identificador para auxiliar na tela celula/tablet -->
        <p id="cSala"><label for="id_sala"> Sala: </label><input type="number" name="sala" id="id_sala" placeholder="Sala"></p>

        <!-- botão para cadastrar disciplina com identificador para auxiliar na tela celula/tablet -->
        <input type="submit" name="button" value="Cadastrar Disciplina">
        &nbsp;
        <!-- botão voltar com identificador para auxiliar na tela celula/tablet -->
        <a href="Tela_principal.php"><input type="button" name="botao" value="Voltar"></a>

    </form> <!-- Fim do formulário -->
</div>    <!-- Fim da DIV do formulrio -->

</body>   <!-- Fim do bary -->
</html>   <!-- Fim do html -->