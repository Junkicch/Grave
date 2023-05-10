<?php

session_start();
if (isset($_POST['btnEnviar']) && !empty($_POST['login']) && !empty($_POST['senha']) && !empty($_POST['funcao_func'])) {
    // Acessa
    include_once('../conectarbd.php');
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $funcao_func = $_POST['funcao_func'];
    //  $funcao_func = $_POST['funcao_func'];

    $sql = "SELECT * FROM tb_funcionario WHERE cpf_func = '$login' and cpf_func = '$senha' and funcao_func = '$funcao_func'";

    $result = $conn->query($sql);

    if ($funcao_func === 'selecione') {
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        unset($_SESSION['funcao_func']);
        //echo 'Usuário não encontrado!';
        echo "<script>alert('Selecione seu cargo!');</script>";
        echo "<script>window.location='formLogin.php';</script>";
    } else if (mysqli_num_rows($result) < 1) {
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        unset($_SESSION['funcao_func']);
        //echo 'Usuário não encontrado!';
        echo "<script>alert('Usuário não encontrado!');</script>";
        echo "<script>window.location='formLogin.php';</script>";
    } else if (mysqli_num_rows($result) === 1) {
        if ($funcao_func === 'gerente') {
            $cargo = $funcao_func;
            $sql_t = "SELECT * FROM tb_funcionario WHERE cpf_func = '$login' and funcao_func = '$cargo'";
            $result_t = $conn->query($sql_t);
            if (mysqli_num_rows($result_t) === 1) {
                $_SESSION['login'] = $login;
                $_SESSION['senha'] = $senha;
                $_SESSION['funcao_func'] = $funcao_func;
                header('Location: ../index.php');
            }
        }else if($funcao_func === 'funcionario'){
            $cargo = $funcao_func;
            $sql_t = "SELECT * FROM tb_funcionario WHERE cpf_func = '$login' and funcao_func = '$cargo'";
            $result_t = $conn->query($sql_t);
            if (mysqli_num_rows($result_t) === 1) {
                $_SESSION['login'] = $login;
                $_SESSION['senha'] = $senha;
                $_SESSION['funcao_func'] = $funcao_func;
                header('Location: ../indexFuncionario.php');
            }
        }
    }
}
