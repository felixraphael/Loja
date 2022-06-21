<?php
include('conecta.php');
$cpf = $_POST['cpf'];
$nome=$_POST['nome'];
$ano=$_POST['anonasc'];
$senha=$_POST['senha'];
$end=$_POST['endereco'];
$sql = mysqli_query($conecta, "UPDATE funcionario SET nome = '$nome' where cpf = $cpf");
$sql1 = mysqli_query($conecta, "UPDATE funcionario SET endereco = '$end' where cpf = $cpf");
$sql2 = mysqli_query($conecta, "UPDATE funcionario SET anonasc = '$ano' where cpf = $cpf");
$sql3 = mysqli_query($conecta, "UPDATE funcionario SET senha = '$senha' where cpf = $cpf");
if($sql){
    echo"Editado!";
}else{
    echo"erro#*!!!";
}
?>