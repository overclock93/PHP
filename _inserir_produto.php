<?php

include 'conexao.php';

$nroproduto = $_POST['nroproduto']; //Recebe o valor do atributo
$nomeproduto = $_POST['nomeproduto'];
$quantidade = $_POST['quantidade'];
$categoria = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO `estoque`(`nroproduto`,`nomeproduto`,`quantidade`,`categoria`,`fornecedor`) VALUES ($nroproduto,'$nomeproduto',$quantidade,'$categoria','$fornecedor')";

$inserir = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container" style="width: 500px;margin-top:20px">
    <center>
    <h4>Produto adicionado com sucesso!!</h4>
    </center>
    <div style="padding-top: 20px">
    <center>
    <a href="index.php" role="button" class="btn btn-primary">Cadastrar novo item</a>
    </center>
</div>