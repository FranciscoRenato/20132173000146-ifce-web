<?php
/**
 * Created by IntelliJ IDEA.
 * User: Renato Sousa
 * Date: 21/05/2018
 * Time: 14:37
 */

//Criação da conexão do banco de dados
$conexao = new mysqli("localhost","root","Renato123", "sistema_horario");

//Verificação da coneção com o banco
if($conexao->connect_errno){                                                   // Testa se o Objeto conexão está com erro
    die("Falha na Conexão com o Banco de Dados: " . $conexao->connect_errno);  // Exibe o erro
}
//else {
   // echo "Conexão com o Banco de Dados bem sucessdida!";

/**    $dados = "SELECT id, matricula, email, senha FROM login";    // Informa os dados a serem selecionados
    $tabela = $conexao->query($dados);                           // Retorno da verificação do banco de dados

    if($tabela->num_rows > 0){                                   // Verificação dos dados existentes no Bnaco de Dados
        while ($row = $tabela->fetch_assoc()){
            echo "<br> id: " . $row["id"] ." - Matricula: " . $row['matricula'] . " - Email: " .
                $row['email'] . " - Senha: " . $row['senha'] . "<br>";   // Exibição dos dados na tela
        }
    } else {
        echo "Nenhum resultaado encontrado";    // Aviso de nenhum dado encontrado
    }
 * */
    //mysqli_close($conexao);  // Finalização da conexão
//}


/**  mysqli_select_db( "sistema_horario", $conn);

mysqli_query(" INSERT INTO login (matricula, email, senha)
  VALUES ('2837423492', 'sfef@zdfse.com', 'dfvfiuse323425')");
**/
?>
