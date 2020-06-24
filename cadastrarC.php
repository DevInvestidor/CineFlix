<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro-CineFlix</title>
    <link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
     <link rel="stylesheet" href="css/style.css">

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
      <li class="active"><a href="cadastrarC.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>


<!-- Formulario de Cadastro  !-->
<form action="cadastrar.php" method="post">
    <div class="form-group">
    <i class="fas fa-user-circle"></i> <label for="name">Name:</label>
        <input type="text" class="form-control " id="uname" placeholder="Enter name" name="nome" required>  
    </div>
    <div class="form-group">
    <i class="fas fa-user-circle"></i> <label for="uname">Username:</label>
        <input type="text" class="form-control " id="uname" placeholder="Enter username" name="username" required>  
    </div>
    <div class="form-group">
    <i class="fa fa-fas fa-at"></i> <label for="Emai">Email:</label>
        <input type="text" class="form-control" id="email" placeholder="Enter your Email" name="inEmail" required>
    </div>
    <div class="form-group">
     <i class="fas fa-lock  "></i>
    <label for="Password">Password:</label>
        <input type="text" class="form-control" id="pwd" placeholder="Enter your Password" name="senha" required>
    </div>
    <div class="btn">
        <button type="submit" class="btn1"> Cadastrar</button>
        <button type="reset" class="btn2"> Limpar</button>
    </div>
    </form>
  
<footer>

</footer>
</body>
</html>