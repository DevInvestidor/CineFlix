<?php
session_start();
include('conexao.php');

$sql = "SELECT * FROM usuario";
$result = mysqli_query($conexao,$sql);
$arResultado = mysqli_fetch_Assoc($result);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineFlix</title>
    <link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
     <link rel="stylesheet" href="css/style.css">
    <style>
    .usuario_area{
    width: 21%;
    border-right: 1px solid black;
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
       height:700px;
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
    .Informacoes{
        padding: 10px;
        position:relative;
        float:right;
        width:60%;
        margin-top:-900px;
        margin-right:30px;
        border:none;
        height:auto;
        box-shadow: 1px  1px 3px rgb(146, 146, 146);
        border-radius: 5px;
    }
    .Informacoes header{
        background-color: rgb(221, 221, 221);
        height:40px;
        padding: 5px;
        border-radius: 5px;
    }
    .Informacoes header p{
        color:Black;
        Font-size:20px;
    }
    .InformacoesEditar{
        padding: 10px;
        position:relative;
        float:right;
        width:60%;
        margin-top:-700px;
        margin-right:30px;
        border:1px solid gray;
        height:auto;
        box-shadow: 1px  1px 3px rgb(146, 146, 146);
        border-radius: 5px;
    }
    .InformacoesEditar header{
        background-color: rgb(221, 221, 221);
        height:40px;
        padding: 5px;
        border-radius: 5px;
    }
    .InformacoesEditar header p{
        color:Black;
        Font-size:20px;
    }
    .editarbtn{
        float:right;
        padding:10px;
        border: 1px solid orange;
        background-color: orange;
        margin-top: -70px;
        border-radius:10px;
        color:black;
    }
    .editarbtn:hover{
        color:white;
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
      <li class="active"><a href="index.php">Home</a></li>
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
            <div class="circulo">
            </div>
        </div>
        <div class= "login">
            <li><a href="cadastroFilmes.php">Cadastrar Filme</a></li>
            <li><a href="informacoesP.php">Informações Pessoais</a></li>
            <li><a href="#">Filmes Cadastrados</a></li>
        </div>
    </div>
    <div class="Informacoes">
       <header>
            <p>Dados Pessoais</p>
       </header>
        <tr>
            <th>Nome:</th>
            <td><?php echo $arResultado['nome']; ?></td>
        </tr>
        <br>
        <tr>
            <th>Email:</th>
            <td><?php echo $arResultado['Email']?></td>
        </tr>
        <br>
        <tr>
            <th>Usuário:</th>
            <td><?php echo $arResultado['usuario']?></td>
        </tr>

    </div>

    <div class="InformacoesEditar">
       <header>
            <p>Dados Pessoais</p>
           <a href="editar.php"> <button class="editarbtn">Editar</button></a>
       </header>
        <tr>
            <th>Nome:</th>
            <td><?php echo $arResultado['nome']; ?></td>
        </tr>
        <br>
        <tr>
            <th>Email:</th>
            <td><?php echo $arResultado['Email']?></td>
        </tr>
        <br>
        <tr>
            <th>Usuário:</th>
            <td><?php echo $arResultado['usuario']?></td>
        </tr>

    </div>
    <footer class="rodape">
            <p>&copy;Developer Gustavo > Jovem_Progr4amador</p>
    </footer>

</body>
</html>