<?php include_once "../conectarbd.php"; ?>
<html>
    <body>
        <?php
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $data_nasc = $_POST["data_nasc"];
        $cep = $_POST["cep"];
        $endereco = $_POST["endereco"];
        $complemento = $_POST["complemento"];
        $cidade = $_POST["cidade"];
        $bairro = $_POST["bairro"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
        mysqli_select_db($conn, '$dbname');
        $sql = "INSERT INTO tb_usuario(nome, cpf, data_nasc, cep, endereco, complemento, cidade, bairro, email, telefone) VALUES ('$nome', '$cpf', '$data_nasc', '$cep', '$endereco', '$complemento' , '$cidade', '$bairro', '$email', '$telefone')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Seus dados foram salvos !'); window.location = '../index.php';</script>";
        } else {
            echo "Deu erro: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>
        
    </body>
</html>

/