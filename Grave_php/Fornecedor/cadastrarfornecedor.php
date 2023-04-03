<?php include_once "../conectarbd.php"; ?>
<html>
    <body>
        <?php
        $nome = $_POST["nome"];
        $cnpj = $_POST["cnpj"];
        $tipo = $_POST["tipo"];
        $cep = $_POST["cep"];
        $endereco = $_POST["endereco"];
        $n = $_POST["numero"];
        $complemento = $_POST["complemento"];
        $bairro = $_POST["bairro"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $cel = $_POST["tel_cel"];
        $email = $_POST["email"];
        $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
        mysqli_select_db($conn, '$dbname');
        $sql = "INSERT INTO tb_fornecedor(nome, cnpj, tipo, cep, endereco, numero, complemento, bairro, cidade, estado, tel_cel, email) VALUES ('$nome', '$cnpj', '$tipo', '$cep', '$endereco', '$n', '$complemento', '$bairro', '$cidade', '$estado', '$cel', '$email')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Seus dados foram salvos !'); window.location = '../indexmenu.html';</script>";
        } else {
            echo "Deu erro: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>
    </body>
</html>

/