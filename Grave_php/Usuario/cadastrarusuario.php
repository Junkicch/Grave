<?php include_once "../conectarbd.php"; ?>
<html>
    <body>
        <?php
        $nome = $_POST["nome_usu"];
        $cep = $_POST["cep_usu"];
        $endereco = $_POST["endereco_usu"];
        $n = $_POST["numero_usu"];
        $complemento = $_POST["complemento_usu"];
        $bairro = $_POST["bairro_usu"];
        $cidade = $_POST["cidade_usu"];
        $estado = $_POST["estado_usu"];
        $cel = $_POST["tel_cel_usu"];
        $email = $_POST["email_usu"];
        $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
        mysqli_select_db($conn, '$dbname');
        $sql = "INSERT INTO tb_usuario(nome_usu, cep_usu, endereco_usu, numero_usu, complemento_usu, bairro_usu, cidade_usu, estado_usu, tel_cel_usu, email_usu) VALUES ('$nome', '$cep', '$endereco', '$n', '$complemento', '$bairro', '$cidade', '$estado', '$cel', '$email')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Seus dados foram salvos !'); window.location = 'FormUsuario.php';</script>";
        } else {
            echo "Deu erro: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>
        
    </body>
</html>

/