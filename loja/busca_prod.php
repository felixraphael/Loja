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
    $id=$_POST['id'];
    

    $sql = mysqli_query($conecta,"select * from produto where id_prod = '$id'");
    while($linha = mysqli_fetch_array($sql)){
        $nome=$linha['nome_prod'];
        $qtd=$linha['qtd'];
        $marca=$linha['marca'];

    echo"ID Produto: $id";
    echo"<br>Nome do Produto: $nome";
    echo"<br>Quantidade de Produto: $qtd";
    echo"<br>Marca do Produto: $marca<br>";
    }
    ?>
    
</body>
</html>