<?php

//session_start();
//if (isset($_POST['btnEnviar']) && !empty($_POST['email']) && !empty($_POST['senha']) && !empty($_POST['funcao'])) {
//    // Acessa
//    include_once('../conectarbd.php');
//    $login = $_POST['email'];
//    $senha = $_POST['senha'];
//    $funcao = $_POST['funcao'];
//    //  $funcao_func = $_POST['funcao_func'];
//
//    $sql = "SELECT * FROM tb_usuario WHERE email = '$email' and senha = '$senha' and funcao = '$funcao'";
//
//    $result = $conn->query($sql);
//
//    if ($funcao_func === 'selecione') {
//        unset($_SESSION['email']);
//        unset($_SESSION['senha']);
//        unset($_SESSION['funcao']);
//        //echo 'Usuário não encontrado!';
//        echo "<script>alert('Selecione seu cargo!');</script>";
//        echo "<script>window.location='login.php';</script>";
//    } else if (mysqli_num_rows($result) < 1) {
//        unset($_SESSION['email']);
//        unset($_SESSION['senha']);
//        unset($_SESSION['funcao']);
//        //echo 'Usuário não encontrado!';
//        echo "<script>alert('Usuário não encontrado!');</script>";
//        echo "<script>window.location='login.php';</script>";
//    } else if (mysqli_num_rows($result) === 1) {
//        if ($funcao === 'funcionario') {
//            $cargo = $funcao;
//            $sql_t = "SELECT * FROM tb_usuario WHERE email = '$email' and funcao = '$funcao'";
//            $result_t = $conn->query($sql_t);
//            if (mysqli_num_rows($result_t) === 1) {
//                $_SESSION['email'] = $email;
//                $_SESSION['senha'] = $senha;
//                $_SESSION['funcao'] = $funcao;
//                header('Location: index_reserva.php');
//            }
//        }else if($funcao === 'comum'){
//            $cargo = $funcao;
//            $sql_t = "SELECT * FROM tb_usuario WHERE email = '$email' and funcao = '$email'";
//            $result_t = $conn->query($sql_t);
//            if (mysqli_num_rows($result_t) === 1) {
//                $_SESSION['email'] = $email;
//                $_SESSION['senha'] = $senha;
//                $_SESSION['funcao'] = $funcao;
//                header('Location: index.php');
//            }
//        }
//    }
//}




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

        $sql = "SELECT * FROM tb_usuario WHERE email = '$email' and senha = '$senha'";

        $result = $conn->query($sql);

//    print_r($sql);
   // print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
        else
        {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: carrinho.php');
        }
    }
    else
    {
        // Não acessa
        header('Location: login.php');
    }



?>