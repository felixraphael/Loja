<?php
$conecta= new mysqli('localhost','root','','estoquepj');
if(!$conecta) {
   die("não foi possével conectar!!!!!".mysqli_error()."<br>");
}

?>