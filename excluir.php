<?php
include("conexao.php");

if(isset($_GET['id'])){
    $filme = $_GET ['id'];

}else{
    $msg = "selecione um resgitro.";
    header("Location: painel.php?m=$msg");
    exit();
}

$sql = "SELECT * from filmes where filme_Id = $filme";

$resultado = mysqli_query($conexao,$sql);

if(!$resultado){
    echo "<p>Falha ao executar</p>";
}

$arResult = mysqli_fetch_assoc($resultado);
?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclui Filme</title>
    <link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/edit.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
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
<form action="excluirf.php" method="post" class="form-edit">
        <div class="form-area">
            <label for="idbook">Filme Id: </label><br>
            <input type="hidden" name="film" value="<?php echo $arResult['filme_Id'];?>">
        </div>
        <div class="form-area">
            <label for="titbook">Nome do Filme : </label> <br>
            <?php  echo $arResult['nome_filme'];?>
        </div>
        <div class="form-area">
            <label for="titdesc">Descrição: </label><br><br>
            <?php  echo $arResult['descricao'];?>
        </div>
        <p>
            <h4>Confirmar a exclusão deste livro?</h4>
        
        </p>
        <p>
            <input type="submit" value="SIM" class="sucess">
            <a href="listar.php"></a>
            <input type="button" value="NAO" class="warning">
        </p>
    </form>
</body>
</html>