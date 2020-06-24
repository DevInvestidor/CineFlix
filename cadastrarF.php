<?php
session_start();
include("conexao.php");
//Pegando Dados do Formulário e trazendo pro php
$nome_F = $_POST['nomeFilme'];
$Duracao = $_POST['DurFilme'];
$descricao = $_POST['desc'];
$imagem = $_FILES["imagem"]['name'];
$comentario = $_POST['coment'];

//Verificando se existe no banco

$sql = "SELECT count(*) as total from filmes where nome_filme = '$nome_F' ";

$result = mysqli_query($conexao,$sql);

$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
    $_SESSION['Filme_existe'] = true;
    header('Location:cadastroFilmes.php');
    exit();
}


//Inserir as informações no banco de dados

$sql = "INSERT into filmes (nome_filme,descricao,duracao,comentario,Imagem) values ('$nome_F','$descricao','$Duracao','$comentario','$imagem')";

if($conexao->query($sql) === TRUE){

    $ultimo_id = mysqli_insert_id($conexao);

    $diretorio = 'imagens/'. $ultimo_id .'/';

    mkdir($diretorio,0755);

    move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio . $imagem);



    $_SESSION['msg'] = "<p style='background-color:green;padding:10px;'>Cadastrado Com Sucesso!</p>";
    header('Location:cadastroFilmes.php');
    
}

$conexao -> close();

header('Location:cadastroFilmes.php');
exit();
?>
