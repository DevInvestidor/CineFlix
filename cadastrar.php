<?php
//iniciando seção
session_start();
include("conexao.php");
//buscando dados do html
$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['username']));
$senha = mysqli_real_escape_string($conexao, trim (md5($_POST['senha'])));
$email = mysqli_real_escape_string($conexao, trim ($_POST['inEmail']));

//fazer a busca se o usuário já esta cadastrado ou não
$sql = "SELECT COUNT(*)  as total from usuario where usuario = '$usuario' ";
$result = mysqli_query($conexao,$sql);

$row = mysqli_fetch_assoc($result);
//echo"Passou aqui";
if($row['total'] == 1){
    $_SESSION['usuario_existe'] = true;
    header('Location:cadastrocliente.php');
    exit();
}
//echo"passou aqui";
$sql = "INSERT INTO usuario (senha_user,Email, nome,usuario,data_cadastro) VALUES ('$senha','$email','$nome','$usuario',NOW())";

if($conexao->query($sql) === TRUE){
    $_SESSION['status_cadastro'] = true;
}

$conexao -> close();

header('Location:login.html');
exit();
?>