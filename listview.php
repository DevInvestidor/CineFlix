<?php
    require_once "conexao.php";
	if(isset($_GET['filme_id'])){
        $sql = "SELECT Imagem from filmes where filme_id =  ".  $_GET['filme_id'];
        $result = myqli_query($conexao, $sql);
        $row = mysqli_fetch_array($result);
        header("Content-type: " . $row["imageType"]);
        echo $row["Imagem"];
    }
