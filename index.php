<?php
session_start();
require_once ("conexao.php");


$sql = "SELECT filme_Id, Imagem FROM filmes ORDER BY filme_id DESC"; // snake_case
$result = mysqli_query($conexao, $sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineFlix</title>
    <link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    </head>
<body>

<!-- NavBar !-->
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
 <!--Carrosel dentro da div-->
 <div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 80%;float: left;margin-left:105px;">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="image/bloodshot.jpg" alt="bloodshot" style="width: 100%;height:450px;">
          </div>
      
          <div class="item">
            <img src="image/badboys.jpg" alt="badboys"style="width: 100%;height:450px;">
          </div>
      
          <div class="item">
            <img src="image/gemini.jpg" alt="Projeto Gemini"style="width: 100%;height:450px;">
          </div>
        </div>
      
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
<br>
<br>
<div class="galeria">

<h1> Filmes Da Semana</h1>
<?php
	while($row = mysqli_fetch_array($result)) {
	?>
<div class="miniatura">
<?php echo '<img src="./imagens/'.$row["filme_Id"].'/'.$row["Imagem"].'" />';?>

</div>

</div>
<?php		
	}
    mysqli_close($conexao);
?>
</body>
</html>