<?php


 session_start();
    // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once('./conectarbd.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

      //  print_r('Email: ' . $email);
      //  print_r('<br>');
      //  print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM tb_funcionario WHERE email = '$email' and senha = '$senha'";

        $result = $conn->query($sql);

//    print_r($sql);
   // print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login_func.php');
        }
        else
        {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: indexmenu.html');
        }
    }
    else
    {
        // Não acessa
        header('Location:  login_func.php');
    }



?>