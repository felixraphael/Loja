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

    $sql = mysqli_query($conecta,"select * from funcionario");
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
        echo"<br>Deseja Editar o Funcionário? <a href='editarF.php?cpf=".$linha['cpf']."'>Editar</a><br>";
        echo"Deseja deletar o Funcionário? <a href='deletadoF.php?cpf=".$linha['cpf']."'>Deletar</a>";
    echo"<hr>";
    }
    
    echo"<br><a href='menu.php'>Voltar</a>";

    ?>
    
</body>
</html>