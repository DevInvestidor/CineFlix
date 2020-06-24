<?php
require_once ("conexao.php");
$sql = "SELECT filme_Id, Imagem FROM filmes ORDER BY filme_id DESC"; // snake_case
$result = mysqli_query($conexao, $sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes-Cineflix</title>
    <link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/main.css">
    </head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">CineFlix</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="index.php">Home</a></li>
      <li class="active"><a href="filmes.php">Filmes</a></li>
      <li><a href="sobre.php">About Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li ><a href="cadastrarC.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
    <div class="galeria">
        <h1> Filmes Cadastrados</h1>
  

    <?php
	      while($row = mysqli_fetch_array($result)) {
	    ?>
    <div class="miniatura">
        <?php
            echo '<img src="./imagens/'.$row["filme_Id"].'/'.$row["Imagem"].'" />';
        ?>
    </div>

    </div>
    <?php		
    	}
        mysqli_close($conexao);
    ?>

    </div>
    <footer class="rodape">
            <p>&copy;Developer Gustavo > Jovem_Progr4amador</p>
    </footer>
</body>
</html>