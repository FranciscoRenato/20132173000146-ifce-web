<?php 

  	include ("conexao.php");

  	 $id = $conexao->escape_string($_REQUEST['id']);

    // Comando SQL para excluir os dados em uma tabela  
    $sql = "DELETE FROM horarios_das_disciplinas WHERE id = '$id'";
    
    // Executa o comando SQL
    $result = mysqli_query($conexao, $sql);

    // Verifica se o comando foi executado com sucesso
    if(!$result)
    	die("Falha ao executar o comando: " . mysqli_error($conexao));
    else
    	header('Location: ../Tela_principal.php');
 ?>
