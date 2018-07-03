<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">          <!-- Identificação dos caracteres portugueses -->
    <title> Horários </title>          <!-- Titulo -->
    <link rel="stylesheet" href="CSS/estilo_horario.css">   <!-- Chamada e incusão da folha de estilo do CSS -->
  <!--  <meta name="viewport" content="width=device-width, initial-scale=1.0">-->

    <script>
        function validaUsuario() { //Função JS valida formulário

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

    </script>

</head>
<bady>

    <div id="cadastro_usuario">
        <form class="cadastro_usuario" name="cadastro_usuario" method="post" action="PHP/cadastrar_usuario.php" onsubmit="return validaUsuario();">

            <!-- Link da logo da tela de login -->
            <img id="logo_cadastro_usuario" src="Imagens/logo-ifce-taua-transparente.png" alt="IFCE Tauá">

            <legend id="legenda_cadastro_usuario"> Cadastro de usuário </legend>  <!-- Legenda da tela de login -->
            <br><br><br>

            <!-- Campo matrícula com identificador para auxiliar na tela celula/tablet -->
            <p> <label for="lMatricula"> Matrícula: </label> <input type="number" name="matricula" id="lMatricula" size="20" maxlength="15" placeholder="Matrícula"></p>

            <!-- Campo E-mail com identificador para auxiliar na tela celula/tablet -->
            <p> <label for="lEmail"> E-mail: </label> <input type="email" name="email" id="lEmail" size="23" placeholder="E-mail"></p>

            <!-- Campo Senha com identificador para auxiliar na tela celula/tablet -->
            <p> <label for="lSenha"> Senha: </label> <input type="password" name="senha" id="lSenha" size="16" maxlength="16" placeholder="Minímo 8"></p>

            <!-- Botão de enviar com identificador para auxiliar na tela celula/tablet -->
            <input type="submit" name="submit" value="Cadastrar"> &nbsp;

            <!-- botão voltar com identificador para auxiliar na tela celula/tablet -->
            <a href="index.php"><input type="button" name="botao" value="Voltar"></a>

        </form>
    </div>


</bady>
</html>
