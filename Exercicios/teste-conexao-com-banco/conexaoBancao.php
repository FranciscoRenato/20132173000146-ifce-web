<?php
/**
 * Created by IntelliJ IDEA.
 * User: Renato Sousa
 * Date: 31/05/2018
 * Time: 13:18
 */
// Create connection
	$conn = new mysqli("localhost","root", "Renato123", "test");
	// Check connection
	if ($conn->connect_error) {
        echo ("Connection failed: " . $conn->connect_error);
    }else{
        echo "Ok";
        $sql = "SELECT nome, sobrenome FROM teste";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<br>Name: ".
                    $row["nome"]. " " .
                    $row["sobrenome"] . "<br>";
            }
        }else {
            echo "0 results";
        }
    }
?>