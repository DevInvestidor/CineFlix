<?php
session_start();
include("conexao.php");
$consult = "SELECT * from usuario";
$sql = "SELECT * FROM filmes";
$result = mysqli_query($conexao,$sql);
$resultado = mysqli_query($conexao,$consult);
$arResultado = mysqli_fetch_Assoc($result);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descrição Filme</title>
    <link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">CineFlix</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="filmes.php">Filmes</a></li>
      <li><a href="sobre.php">About Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li ><a href="cadastrarC.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
<header class="titulo">
    <h1> <?php echo $arResultado['nome_filme']?></h1>
</header>
</body>
</html>