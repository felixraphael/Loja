<?php
include('conecta.php');
$id = $_POST['id_prod'];
$nome=$_POST['nome_prod'];
$qtd=$_POST['quantidade'];
$marca=$_POST['marca'];
$sql = mysqli_query($conecta, "UPDATE produto SET nome_prod = '$nome' where id_prod = $id");
$sql = mysqli_query($conecta, "UPDATE produto SET qtd = '$qtd' where id_prod = $id");
$sql = mysqli_query($conecta, "UPDATE produto SET marca = '$marca' where id_prod = $id");
if($sql){
    echo"Editado!";
}else{
    echo"erro#*!!!";
}
?>