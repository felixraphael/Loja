<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section>
    <?php
      include('conecta.php');
      $cpf=$_GET['cpf'];
      
  
      $sql = mysqli_query($conecta,"select * from funcionario where cpf = '$cpf'");
      $linha = mysqli_fetch_array($sql);
   if ($linha){
       echo"<form action='ediF.php' method='post'>
       <table>
       <tr>

       <td><label>Nome</label></td>
       <td><input type='text' name='nome'value='".$linha["nome"]."'></td>
       </tr>
       <tr>

       <td><input type='hidden'name='cpf' value='".$linha["cpf"]."'></td></tr>
      
       <tr><td><label>Ano Nascimento</label></td>
       <td><input type='text'name='anonasc' value='".$linha["anonasc"]."'></td></tr>


       <tr><td><label>Endereco</label></td>
       <td><input type='text'name='endereco' value='".$linha["endereco"]."'></td></tr>

       <tr><td><label>Senha</label></td>
       <td><input type='text'name='senha' value='".$linha["senha"]."'></td></tr>
       </tr>
       <tr>

       <td><button class='padrao'type='submit'>Editar</button></td>
       </tr>
       </table>
       </form>";
   }
   else{
       echo"dados não encontrados";
    }

    ?>
    </section>
</body>
</html>