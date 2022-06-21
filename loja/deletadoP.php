<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deletado</title>
</head>
<body>
    <?php
    include('conecta.php');
    $id= $_GET['id'];
    echo"Deletado o produto de código=><b>".$id."<br><br>";
    $query = "DELETE FROM produto WHERE id_prod = $id";
    $result = $conecta->query($query);
    if($result) {
        echo"Produto deletado com sucesso!<br>";
    }else{
        echo"Erro<br><a href='##'>Voltar</a>";
    }
    echo"<br><a href='menu.php'>Voltar</a>";

    ?>
</body>
</html>