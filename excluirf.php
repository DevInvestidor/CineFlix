<?php
include("conexao.php"); 
$filme_id = $_POST['film'];

if(empty($filme_id)){
    $msg = "Campos obrigatórios  não preenchidos";
    header("Location: painel.php?m=$msg");
    exit();
}
$sql = "DELETE FROM filmes WHERE filme_Id = $filme_id";


$result = mysqli_query($conexao,$sql);

if($result == TRUE){
    $msg = "Registro excluido com Sucesso!";
    header("Location:painel.php?m=$msg");
    exit();

}else{
    $msg = "Erro ao excluir livro";
    $msg = mysqli_error($conexao);
    header("Location:painel.php?m=$msg");
    exit();
}
mysqli_close($conexao);

?>