<?php include_once "../conectarbd.php"; ?>
<html>
    <body>
        <?php
        $login= $_POST["login"];
        $senha = $_POST["senha"];
        $confirmar_senha = $_POST["confirmar_senha"];
        

        $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
        mysqli_select_db($conn, 'db_petiscaburguer');
        $sql = "INSERT INTO tb_login(login, senha, confirmar_senha) VALUES ( '$login',"
                . " '$senha',"
                . " '$confirmar_senha'";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Seus dados foram salvos !'); window.location = 'index.php';</script>";
        } else {
            echo "Deu erro: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>
    </body>
</html>

/