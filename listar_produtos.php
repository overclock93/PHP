<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8786c39b09.js"></script>
    <title>Listagem de Produtos</title>
</head>
<body>

<div class="container" style="margin-top: 40px">
    <br>
    <h3>Lista de Produtos</h3>
    <table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">Número do Produto</th>
        <th scope="col">Nome do Produto</th>
        <th scope="col">Quantidade</th>
        <th scope="col">Categoria</th>
        <th scope="col">Fornecedor</th>
        <th scope="col">Ação</th>
        </tr>
    </thead>

            <?php
                include 'conexao.php';
                $sql = "SELECT * FROM `estoque`";
                $busca = mysqli_query($conexao,$sql);

                while ($array = mysqli_fetch_array($busca)){
                    $id_estoque = $array['id_estoque'];
                    $nroproduto = $array['nroproduto'];
                    $nomeproduto = $array['nomeproduto'];
                    $quantidade = $array['quantidade'];
                    $categoria = $array['categoria'];
                    $fornecedor = $array['fornecedor'];
                
            
            ?>
        
        <tr>
            <td><?php echo $nroproduto ?></td>
            <td><?php echo $nomeproduto ?></td>
            <td><?php echo $quantidade ?></td>
            <td><?php echo $categoria ?></td>
            <td><?php echo $fornecedor ?></td>
            <td><a class="btn btn-warning btn-sm" href="editar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a></td>

        <?php } ?>
        </tr>
    </table>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>