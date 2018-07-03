<?php

    include("PHP/conexao.php");
    include("PHP/protecao.php");
    protecao();

?>

<!DOCTYPE html>  <!-- Início do documento -->
<html lang="en">       <!-- Início do html -->
<head>                  <!-- Início do head -->

    <meta charset="UTF-8">          <!-- Identificação dos caracteres portugueses -->
    <title> Horários </title>          <!-- Titulo -->
    <link rel="stylesheet" href="CSS/estilo_horario.css">   <!-- Chamada e incusão da folha de estilo do CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <script type="text/javascript" src="JS/FunctionsJS.js"></script>

</head>     <!-- Fim do head -->
<body>      <!-- Início do bdy -->

<div id="div_logo_principal">   <!-- Início da DIV da logo -->

    <!-- Link da logo da tela de principal logo -->
    <img id="logo_principal" src="Imagens/IFCE-Taua-logo.png" alt="IFCE Tauá">

</div>  <!-- Início da DIV principal da tabela de horários -->

    <h1 id="titulo"> Horário das Disciplinas dos Professores </h1>

    <nav class="menu">
        <h1> Menu </h1>
        <ul>
            <li><a href="cadastro_disciplina.php"> Cadastrar </a></li>
            <li><a href="PHP/sair.php"> Sair </a></li>
        </ul>
    </nav>

    <div>

        <?php

      //  include ("PHP/conexao.php");

        echo "<table class=tabela_horario>";
            //<!-- Topo da tabela -->
       echo "<tr>                                       <!-- Linha 1 da tabela -->
                <th> <p> Curso </p> </th>                       <!-- Coluna 1 da tabela -->
                <th> <p> Professor </p> </th>                   <!-- Coluna 2 da tabela -->
                <th> <p> Disciplina </p> </th>                  <!-- Coluna 3 da tabela -->
                <th> <p> Dia da semana </p> </th>               <!-- Coluna 4 da tabela -->
                <th> <p> Horário inicio </p> </th>                     <!-- Coluna 5 da tabela -->
                <th> <p> Horário fim </p> </th>
                <th> <p> Sala </p> </th>
                <th> <p> Editar </p> </th>
                <th> <p> Excluir </p> </th>
       </tr>";
            //<!-- Início da tabela -->
            //<!-- Linha 1 da tabela -->
            //$conexao = mysqli_connect("localhost","root","Renato123", "sistema_horario");

          //  mysqli_set_charset($conexao, 'ut-8');

            mysqli_select_db($conexao, 'sistema_horario');
            $sql = mysqli_query($conexao, "SELECT * FROM horarios_das_disciplinas");

            while ($dados = mysqli_fetch_array($sql)){

                 echo "<tr> 
                            <td>" . $dados['curso'] . "</td>
                            <td>" . $dados['professor'] . "</td>
                            <td>" . $dados['disciplina'] . "</td>
                            <td>" . $dados['diaSemana'] . "</td>
                            <td>" . $dados['horaInicio'] . "</td>
                            <td>" . $dados['horaFim'] . "</td>
                            <td>" . $dados['sala'] . "</td>

                            ".
                            // Cria um formulário para enviar os dados para a página de edição 
                            // Colocamos os dados dentro input hidden
                            "<td>

                                <form action=PHP/editar.php method=post>
                                    <input name='id' type=hidden value=".$dados['id']." >
                                    <input name=curso type=hidden value=" .$dados['curso']. ">
                                    <input name=professor type=hidden value=" .$dados['professor']. ">
                                    <input name=disciplina type=hidden value=".$dados['disciplina']." >
                                    <input name=diaSemana type=hidden value=" .$dados['diaSemana']. ">
                                    <input name=horaInicio type=hidden value=" .$dados['horaInicio']. ">
                                    <input name=horaFim type=hidden value=".$dados['horaFim']." >
                                    <input name=sala type=hidden value=" .$dados['sala']. ">
                                  <button>Editar</button>
                                </form>
                            </td>
                            <td>
                                <form action=PHP/excluir.php method=post>
                                    <input name=id type=hidden value=".$dados['id']." >
                                  <button>Excluir</button>
                                </form>
                            </td>
                        
                      </tr>";

            }

       echo "</table>";                                // <!-- Fim da tabela -->
  // <button type=button onclick=excluir(this)> Excluir </button> 
//                      <th> <p id=botao_tabela_opcao> 
                   //             <a href='editar.php' value="$dados['id']"> Editar </a> 
                     //           <a href='excluir.php'> Excluir </a>
                      //       </p> </th>      <button type=button onclick=editar(this)> Editar </button>     
                           
        ?>

    </div> <!-- Fim da DIV princial da tabela de horarios -->

</body>   <!-- Fim do bary -->
</html>   <!-- Fim do html -->