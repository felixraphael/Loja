<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adicionando</title>
</head>
<body>
<?php
include('conecta.php');
$id=$_POST['id'];
$nome=$_POST['nome'];
$qtd=$_POST['qtd'];
$marca=$_POST['marca'];
echo
"ID Produto: ".$id.
"<br>Nome do Produto: ".$nome.
"<br>Quantidade de Produto: ".$qtd.
"<br>Marca do Produto: ".$marca."<br><br>";

$adc="INSERT INTO produto(id_prod, nome_prod, quantidade, marca) VALUES('".$id."', '".$nome."','".$qtd."','".$marca."')";

$inserir = mysqli_query($conecta,$adc);
if($inserir){
    echo"produto adicionado!";
}
else{
    echo"erro!<br><a href='cadastro_prod.php'>Tentar Novamente</a>";
}
?>
<a href='menu.php'>Voltar</a>
    
</body>
</html>