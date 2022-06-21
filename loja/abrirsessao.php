<?php

session_start();

@$cpf = $_POST['cpf'];
@$senha = $_POST['senha'];

    include('conecta.php');

        $sql = mysqli_query($conecta, "SELECT * FROM funcionario WHERE cpf = '$cpf' AND senha = '$senha'");

            if (mysqli_num_rows($sql) > 0) {
                $_SESSION['cpf'] = $cpf;
                $_SESSION['senha'] = $senha;

                header('location: menu.php');

            
            } else {

                unset($_SESSION['cpf']);
                unset($_SESSION['senha']);
    
                echo "
                        <br>
                        <fieldset>
                            <b>Login ou senha inválidos.</b>
                            <br>
                            <a href='login.php'>Tentar novamente</a>
                        </fieldset>
                
                    ";
            }

?>