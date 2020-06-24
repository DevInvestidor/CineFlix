
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Filmes</title>
    <link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <style>
     .usuario_area{
        width: 21%;
        border-right: 1px solid black;
        float:left;
        height:auto;
   }
   .avatar_image{
       margin:0px;
       background-image: url(image/back.jpg);
       height:250px;
       width:100%;
       padding:10px;
   }
   .circulo{
       margin:50px;
       height: 150px;
       width:60%;
       border: 1px solid rgb(80, 255, 197);
       border-radius:80px;
       background-color: rgb(80, 255, 197);
   }
   
   .login{
       background-color: black;
       height:600px;
   }
   .login li{
        list-style-type:none;
       padding: 5px;
       font-size:20px;
   }
   .login a{
       text-decoration: none;
       color:white;
   }
   .login li:hover {
       background-color:gray;
   }
   .rodape{
       position:relative;
       border:1px solid black;
       background-color: black;
       bottom:0px;
   }
   .rodape p {
       color:white;
       text-align:center;
   }
    </style>
</head>
<body>
   <!-- NavBar !-->
   <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">CineFlix</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="index.php">Home</a></li>
      <li><a href="filmes.php">Filmes</a></li>
      <li><a href="sobre.php">About Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
    </ul>
  </div>
</nav>

   <!--Area do Usuario-->
   <div class ="usuario_area">
        <div class="avatar_image">
           <a href="painel.php"> <div class="circulo">
            </div></a>
        </div>
        <div class= "login">
            <li class="active"><a href="cadastroFilmes.php">Cadastrar Filme</a></li>
            <li><a href="informacoesP.php">Informações Pessoais</a></li>
            <li><a href="#">Filmes Cadastrados</a></li>
        </div>
    </div>

    <!--Formulario cadastro Filme-->
    <form action="cadastrarF.php" method="post" class="cadFilme" enctype="multipart/form-data">
         <div class="form-group">
            <i class="fas fa-film"></i> <label for="filname">Film Name:</label>
            <input type="text" class="form-control " id="fname" placeholder="Enter name" name="nomeFilme" required>  
         </div>
        <div class="form-group">
             <i class="fas fa-clock"></i> <label for="duracao">Duration:</label>
            <input type="text" class="form-control " id="dur" placeholder="Enter Film duration" name="DurFilme" required>  
         </div>
         <div class="form-group">
             <i class="far fa-comment"></i> <label for="comentario">Coment:</label>
            <input type="text" class="form-control " id="comenta" placeholder="Enter your comentary" name="coment" required>  
         </div>
         <div class="form-group">
             <i class="	fa fa-image"></i> <label for="img">Imagem:</label>
            <input type="file" class="form-control " id="img" name="imagem" required>  
         </div>
         <div class="form-group">
             <i class="	fa fa-image"></i> <label for="img">descrição:</label>
            <input type="text" class="form-control " id="dsfc" placeholder="Enter your description" name="desc" required>  
         </div>
         <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>
         <div class="btn">
            <button type="submit" class="btn1" name="SendCadImg"> Cadastrar</button>
            <button type="reset" class="btn2"> Limpar</button>
        </div>
    </form>

</body>
</html>