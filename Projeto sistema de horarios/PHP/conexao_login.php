<?php
/**
 * Created by IntelliJ IDEA.
 * User: Renato Sousa
 * Date: 21/05/2018
 * Time: 14:37
 */

//Criação da conexão do banco de dados
$conn = new mysqli("localhost","root","Renato123", "sistema_horario");

//Verificação da coneção com o banco
if($conn->connect_errno){
    die("Falha na Conexão com o Banco de Dados: " . $conn->connect_errno);
}else {
    echo "Conexão com o Banco de Dados bem sucessdida!";


    $dados = "SELECT id, matricula, email, senha FROM login";
    $tabela = $conn->query($dados);

    if($tabela->num_rows>0){
        while ($row = $tabela->fetch_assoc()){
            echo "<br> id: " . $row["id"] ." - Matricula: " . $row['matricula'] . " - Email: " .
                $row['email'] . " - Senha: " . $row['senha'] . "<br>";
        }
    } else {
        echo "Nenhum resultaado encontrado";
    }

}


/**  mysqli_select_db( "sistema_horario", $conn);

mysqli_query(" INSERT INTO login (matricula, email, senha)
  VALUES ('2837423492', 'sfef@zdfse.com', 'dfvfiuse323425')");
**/
?>
