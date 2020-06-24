<?php
session_start();
include ('conexao.php');

if(empty($_POST['username'])|| empty($_POST['pass'])){
    header("location: index.php");
    exit();
}



$usuario = mysqli_real_escape_string($conexao,$_POST['username']);
$senha = mysqli_real_escape_string($conexao,md5($_POST['pass']));

$query = "SELECT *  from usuario where usuario = '{$usuario}' and senha_user = '{$senha}'";

$result = mysqli_query($conexao,$query);

$row = mysqli_num_rows($result);

if($usuario === 'usuario' && $senha === 'senha_user'){
    header('Location: painel.php');
    exit();
}else{
    header("Location: index.php");
    
    exit();
}


?>
