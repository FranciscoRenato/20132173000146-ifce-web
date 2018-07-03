<?php   // Abre o PHP
include("PHP/conexao.php");  // Inclui a cnexão com o banco de dados

$erro = array();   //Variavel global de erro
global $msg;	//Variavel global de mensagem

    if(isset($_POST['email']) && strlen($_POST['email']) > 0){  //Verificação dos dados existentes no campos E-mail.

        if (!isset($_SESSION))			//Verifica se existe uma sessão
            session_start();			//Criação de uma sessão para armazenar o login do usuário

        $_SESSION['matricula'] = $conexao->escape_string($_POST['matricula']);  //Armazena o dado Matricula com um tratamendo contra ataque em uma variavel de sessão
        $_SESSION['email'] = $conexao->escape_string($_POST['email']);			//Armazena o dado E-mail com um tratamento contra ataque em uma variavel de sessão
        $_SESSION['senha'] = md5(md5($_POST['senha']));							//Armazena o dado Senha com uma criptografia contra ataque em uma variavel de sessão

        //Criptografar com base64_encode, e decode;

        $sql_code = "SELECT id, senha_md5 FROM login WHERE email = '$_SESSION[email]' AND matricula = '$_SESSION[matricula]'";  //Seleciona os dados da tabela login
        $sql_query = $conexao->query($sql_code) or die($conexao->error); 					    //Faz uma conexao com o banco de dados e verifica se há erro
        $dado = $sql_query->fetch_assoc();														//Armazena num array de dados, os dados do base64_decode		
        $total = $sql_query->num_rows;															//Verifica se houve retorno do banco de dados e faz uma contagem

        if($total == 0){  //Se a contagem for zero, erro pois não há dados no banco

            $erro[] = "Usuário não exixtênte!";
            echo "<script> alert('$erro[0]'); location.href='index.php'</script>"; //Direciona para a tela principal
            //echo $dado['id'];
            //echo "$_SESSION[matricula];";
            //echo "$dado[email];";
            //echo "$_SESSION[senha];";
        } else {
            //echo "$dado[id];";
            //echo "$_SESSION[matricula];";
            //echo "$_SESSION[email];";
            //echo "$_SESSION[senha];";
            if($dado['senha_md5'] == $_SESSION['senha']){  //verifica se a senha digitada pelo usuário é igual a senha do banco de dados
              //  echo "$dado[id];";
               // echo "$dado[matricula];";
               // echo "$_SESSION[email];";
                //echo "$_SESSION[senha];";
                $_SESSION['login'] = $dado['id'];  //Armazena o ID do usuário na sessão 

            } else {
                $erro[] = "Senha incorreta.";  //Erro de digitação
                echo "<script> alert('$erro[0]'); location.href='index.php'</script>"; //Direciona para a tela principal
            }
        }

        if(count($erro) == 0 || !isset($erro)){  //Verifica a variavel erro e se ela é um número válido
            echo "<script> alert('Login fetuado com sucesso!'); location.href='Tela_principal.php'</script>"; //Direciona para a tela principal
        }
    }

?><html>    <!-- Início do html -->
<head lang="en">      <!-- Início do head -->
    <meta charset="UTF-8">                           <!-- Identificação dos caracteres portugueses -->
    <title> Login </title>                                  <!-- Titulo -->
    <link rel="stylesheet" href="CSS/estilo_horario.css">       <!-- Chamada e incusão da folha de estilo do CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script type="text/javascript"> // Abertura do script JS
        function validaLogin() { //Função JS valida formulário

            //Validação do campo matrícula
            if(document.login.matricula.value==""){ //Verifica se existe dado no campo matrícula
                alert("Por favor digite a sua matrícula.");
                document.login.matricula.focus();       //Foco no campus matrícula
                return false;
            }

            //Validaçõ do campo E-mail
            //Verifica se exixte dado no campo E-mail, se contém no mímino um @ e se contém no mímino um ponto.
            if (document.login.Email.value=="" || document.login.Email.value.indexOf('@')==-1 || document.login.Email.value.indexOf('.')==-1){
                alert("Por favor digite um E-mail válido.");
                document.login.Email.focus();           //Foco no campus E-mail
                return false;
            }
            // Validação do campo Senha
            if(document.login.senha.value.length < 8){ //Verifica se a senha é de no mínimo 8 caracteres
                alert("Por favor digite uma senha de no mínimo 8 caracteres.");
                document.login.senha.focus();           //Foco no campus Senha
                return false;
            }
        } // Fim da função JS
    </script> <!-- Fim do script JS -->


</head>  <!-- Fim do head -->
<body>  <!-- Início do bady -->

<!--<?php // Início do PHP-->
//if($erro > 0)
 //foreach ($erro as $msg){ // Para cada erro mostra as mensagens
   //echo "<p>$msg</p>";    // Mensagens
// }
//<!--?>-->   <!-- Fim do PHP -->

<div id="div_login"> <!-- DIV da tela de login -->

    <!-- Início do formulário login -->
    <form class="form_login" name="login" method="POST" action="" onsubmit="return validaLogin();">

        <!-- Link da logo da tela de login -->
        <img id="logo_login" src="Imagens/logo-ifce-taua-transparente.png" alt="IFCE Tauá">

        <legend id="legenda_login"> Login </legend>  <!-- Legenda da tela de login -->
        <br><br><br>

        <!-- Campo matrícula com identificador para auxiliar na tela celula/tablet -->
        <p> <label for="lMatricula"> Matrícula: </label> <input type="number" name="matricula" id="lMatricula" size="20" maxlength="15" placeholder="Matrícula" value="<?php echo $_SESSION['matricula'];?>"></p>

        <!-- Campo E-mail com identificador para auxiliar na tela celula/tablet -->
        <p> <label for="lEmail"> E-mail: </label> <input type="email" name="email" id="lEmail" size="23" placeholder="E-mail" ></p>

        <!-- Campo Senha com identificador para auxiliar na tela celula/tablet -->
        <p> <label for="lSenha"> Senha: </label> <input type="password" name="senha" id="lSenha" size="16" maxlength="16" placeholder="Minímo 8"></p>

        <!-- Botão de enviar com identificador para auxiliar na tela celula/tablet -->
        <input type="submit" name="submit" value="Enviar">
        
        <!-- Campo matrícula com identificador para auxiliar na tela celula/tablet -->
        <a href="esqueci_senha.php"><input type="button" name="botao_sequeci-senha" value="Esqueci a senha"></a>

        <!-- Link para cadastrar novo usuário -->
        <a href="cadastro_usuario.php"><p id="lCheck"><label for="lCheck">Ainda não é cadastrado?</label></p></a>

        <!-- Observação sobre aluno -->
        <p id="obs">OBS: Aluno não é permitido cadastrar-se.</p>

    </form> <!-- Fim do formulário login -->
    <!--<a href="PHP/conexao_login.php"> verificar a conexão </a>-->
</div> <!-- Fim da DIV fomulário -->

</body>  <!-- Fim do bady -->
</html>  <!-- Fim do html -->