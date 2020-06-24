<?php
include("conexao.php");

if(isset($_GET['id'])){
    $filme = $_GET ['id'];

}else{
    $msg = "selecione um resgitro.";
    header("Location: painel.php?m=$msg");
    exit();
}

$sql = "SELECT * from filmes where filme_id = $filme";

$resultado = mysqli_query($conexao,$sql);

if(!$resultado){
    echo "<p>Falha ao executar</p>";
}

$arResult = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Filme</title>
    <link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/edit.css">
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
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
    </ul>
  </div>
</nav>
<font color="red">
    <?php
        if(isset($_GET['m'])){
            echo $_GET['m'];
        }
    ?>  
    </font>
<header>
    <h1><?php echo $arResult['nome_filme'] ?></h1>
</header>
<!--Formulario editar filme!-->
<form action="editarf.php" method="post" class="form-edit">

        <div class="form-area">
            <label for="livroId">Id do filme:<?php  echo"</br>";  echo $arResult['filme_Id']?></label>
            <input type="hidden" name="livro" value="<?php  echo"</br>";  echo $arResult['filme_Id'];?>" >
        </div>
        <div class="form-area">
            <label for="Tit">Titulo: <?php   echo"</br>";  echo $arResult['nome_filme']?></label>
            <br>
            <input type="hidden" name="title" value="<?php echo"</br>"; echo $arResult['nome_filme'];?>" >
        </div>
        <div class="form-area">
            <label for="description">Descrição: <?php  echo"</br>";  echo $arResult['descricao'] ; echo"</br>"; ?></label>
            <br>
            <input type="text" name="desc" value="<?php  echo $arResult['descricao']?>" >
        </div>

        <p>
            <button type="submit" class="btn3">Editar</button>
        
        </p>
    </form>
    <footer class="rodape">
            <p>&copy;Developer Gustavo > Jovem_Progr4amador</p>
    </footer>
</body>
</html>