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
    $cpf=$_POST['cpf'];
    

    $sql = mysqli_query($conecta,"select * from funcionario where cpf = '$cpf'");
    while($linha = mysqli_fetch_array($sql)){
        $nome=$linha['nome'];
        $cpf=$linha['cpf'];
        $ano=$linha['anonasc'];
        $end=$linha['endereco'];
        $senha=$linha['senha'];
        echo"Nome: $nome";
        echo"<br>CPF: $cpf";
        echo"<br>Ano Nascimento: $ano";
        echo"<br>Endereço: $end";
        echo"<br>Senha: $senha";
        echo"<br>";
echo"Deseja deletar o funcionário => $nome<br><br>";
echo"<a href='deletadoF.php?cpf=".$cpf."'>Sim</a>";
    }
    echo"<br><a href='menu.php'>Voltar</a>";

    ?>
    
</body>
</html>