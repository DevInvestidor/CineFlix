<?php
include("conexao.php");

$filme_id = $_POST['filme_Id'];
$nome_filme = $_POST['nome_filme'];
$descricao_filme = $_POST['desc'];



if(empty($filme_id) OR empty($nome_filme ) OR empty($descricao_filme)){
    $msg = "Os dados obrigatorios nao preenchidos";
    header("Location: editar.php?m=$msg");
    exit();
}


$sql = "UPDATE  filmes set filme_Id = '$filme_id', descricao = '$descricao_filme' where filme_Id = '$filme_id' ";

$resultado =   mysqli_query($conexao,$sql);


if($resultado == true){
    $msg = "Registro atualizado com sucesso!";
    header("Location:painel.php?m=$msg");
    exit();
}else{
    $msg = "ERROR ao atualizar dados!";
    $msg = mysqli_error($conexao);
    header("Location:painel.php?m=$msg");
    exit();
}
mysqli_close($conexao);
?>