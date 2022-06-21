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
      $id=$_GET['id'];
      
  
      $sql = mysqli_query($conecta,"select * from produto where id_prod = '$id'");
      $linha = mysqli_fetch_array($sql);
   if ($linha){
       echo"<form action='editarP.php' method='post'>
       <table>
       <tr>

       <td><input type='hidden' name='id_prod'value='".$linha["id_prod"]."'></td>
       </tr>
       <tr>

       <td><label>Nome</label></td>
       <td><input type='text'name='nome_prod' value='".$linha["nome_prod"]."'></td>
      
       <tr><td><label>Valor</label></td>
       <td><input type='text'name='quantidade' value='".$linha["quantidade"]."'></td></tr>


       <tr><td><label>Marca</label></td>
       <td><input type='text'name='marca' value='".$linha["marca"]."'></td></tr>
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