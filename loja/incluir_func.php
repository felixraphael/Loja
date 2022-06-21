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
$nome=$_POST['nome'];
$cpf=$_POST['cpf'];
$ano=$_POST['ano'];
$end=$_POST['end'];
$senha=$_POST['senha'];
echo
"Nome: ".$nome.
"<br>CPF: ".$cpf.
"<br>Ano Nascimento: ".$ano.
"<br>Endereço: ".$end.
"<br>Senha: ".$senha.
"<br>";

$adc="INSERT INTO funcionario(nome, cpf, anonasc, endereco, senha) VALUES('".$nome."', '".$cpf."','".$ano."','".$end."','".$senha."')";

$inserir = mysqli_query($conecta,$adc);
if($inserir){
    echo"Funcionário adicionado!";
}
else{
    echo"erro!<br><a href='cadastro_prod.php'>Tentar Novamente</a>";
}
echo"<br><a href='menu.php'>Voltar</a>";

?>
</body>
</html>