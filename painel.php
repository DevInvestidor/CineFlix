<?php
session_start();
include("conexao.php");
$consult = "SELECT * from usuario";
$sql = "SELECT * FROM filmes";
$result = mysqli_query($conexao,$sql);
$resultado = mysqli_query($conexao,$consult);
$arResultado = mysqli_fetch_Assoc($result);
$resultado_usuario= mysqli_fetch_Assoc($resultado);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina do Usuário</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/painel.css">
    <link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
      .tabela_books td{

      text-align:center;
        padding:10px;
        background-color: rgb(204, 204, 204);
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
    <div class ="usuario_area">
        <div class="avatar_image">
            <a href="perfil.php"><div class="circulo">
            </div></a>
            <p style="color:white;font-size:18px;margin-top:-30px; text-align:center;"><?php echo $resultado_usuario['nome']?></p>
        </div>
        <div class= "login">
            <li><a href="cadastroFilmes.php">Cadastrar Filme</a></li>
            <li><a href="informacoesP.php">Informações Pessoais</a></li>
            <li><a href="#">Filmes Cadastrados</a></li>
        </div>
    </div>

    <div class="conteudo">
      <header>
          <p>Filmes cadastrados</p>
      </header>
      <table class="tabela_books">
        <tr>
            <th>Id do Filme</th>
            <th>Nome do filme</th>
            <th>descricao</th>
            <th>Duração</th>
            <th></th>
            <th></th>
        </tr>
        <?php
        do{
        ?>
        <tr>
            <td><?php echo $arResultado['filme_Id']?></td>
            <td><?php echo $arResultado['nome_filme']?></td>
            <td><?php echo $arResultado['descricao']?></td>
            <td><?php echo $arResultado['duracao']?></td>
            <td><a href="editar.php?id=<?php echo $arResultado['filme_Id'];?>"><button class="btn3"><b>Editar</b></button></a></td>
            <td><a href="excluir.php?id=<?php echo $arResultado['filme_Id'];?>"><button class="btn4"><b>Excluir</b></button></a></td>

        </tr>
        <?php
            }while($arResultado = mysqli_fetch_assoc($result));
        ?>
    </table>
    </div>
    <footer class="rodape">
            <p>&copy;Developer Gustavo > Jovem_Progr4amador</p>
    </footer>
</body>
</html>
