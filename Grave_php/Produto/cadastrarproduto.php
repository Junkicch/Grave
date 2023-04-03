<?php include_once "../conectarbd.php"; ?>
<html>
    <body>
        <?php
        $nome = $_POST["nome"];
        $tipo = $_POST["tipo"];
        $tamanho = $_POST["tamanho"];
        $cor = $_POST["cor"];
        $colecao = $_POST["colecao"];
        $preco = $_POST["preco"];
        $qntd = $_POST["quantidade"];
        $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
        mysqli_select_db($conn, '$db_grave');
        $sql = "INSERT INTO tb_produto(nome,tipo, tamanho, cor, colecao, preco, quantidade) VALUES ('$nome','$tipo', '$tamanho', '$cor', '$colecao', '$preco', '$qntd')";
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