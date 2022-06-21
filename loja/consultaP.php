<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Busca Produto</title>
</head>
<body>
    <?php
    include('conecta.php');

    $sql = mysqli_query($conecta,"select * from produto");
    while($linha = mysqli_fetch_array($sql)){
        $id=$linha['id_prod'];
        $nome=$linha['nome_prod'];
        $qtd=$linha['quantidade'];
        $marca=$linha['marca'];

    echo"ID Produto: $id";
    echo"<br>Nome do Produto: $nome";
    echo"<br>Quantidade de Produto: $qtd";
    echo"<br>Marca do Produto: $marca<br>";
        echo"<br>Deseja Editar o produto? <a href='editar.php?id=".$linha['id_prod']."'>Editar</a>";
        echo"<br>Deseja Deletar o produto? <a href='deletadoP.php?id=".$linha['id_prod']."'>Deletar</a>";

    echo"<hr>";

    }
    ?>
    
</body>
</html>