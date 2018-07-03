<!DOCTYPE html>   <!-- Início do documetno -->
<html>               <!-- Início do html -->
<head lang="en">      <!-- Início do head -->

    <meta charset="UTF-8">                           <!-- Identificação dos caracteres portugueses -->
    <title> Login </title>                                  <!-- Titulo -->
    <link rel="stylesheet" href="CSS/estilo_horario.css">       <!-- Chamada e incusão da folha de estilo do CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script>
		
	</script>
	
	
</head>     <!-- Fim do head -->
<body>      <!-- Início do bdy -->

<div id="esqueci_senha">     <!-- Início da DIV recuperar senha -->
    <form class="esqueci_senha" action="PHP/recuperar_senha.php" method="POST">

        <img id="esqueci_senha_logo" src="Imagens/logo-ifce-taua-transparente.png" alt="IFCE Tauá">

        <legend id="esqueci_senha_legenda"> Esqueci a Senha </legend>

        <br><br><br>

        <!-- Campo E-mail com identificador para auxiliar na tela celula/tablet -->
        <p> <label for="r_Email"> Informe seu E-mail: </label> <input type="email" name="es_email" id="r_Email" size="22" placeholder="E-mail" > </p>

        <!-- Campo Matricula com identificador para auxiliar na tela celula/tablet -->
        <p> <label for="r_Matricula"> Informe sua Matrícula: </label> <input type="number" name="es_matricula" id="r_Matricula" placeholder="Matrícula"> </p>

        <!-- botão com identificador para auxiliar na tela celula/tablet -->
        <input type="submit" name="botao" value="Enviar"> 
        &nbsp;
        <!-- botão voltar com identificador para auxiliar na tela celula/tablet -->
        <a href="index.php"><input type="button" name="botao" value="Voltar"></a>

    </form> <!-- Fim do formulário -->
</div>    <!-- Fim da DIV do formulrio -->

</body>   <!-- Fim do bary -->
</html>   <!-- Fim do html -->