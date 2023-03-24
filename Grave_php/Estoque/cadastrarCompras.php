<?php include_once "../conectarbd.php"; ?>
<html>
    <body>
        <?php
        $quantidade = $_POST["quantidade"];
        $modelo = $_POST["modelo"];
        $cor = $_POST["cor"];
        $marca = $_POST["marca"];
        $valor_total = $_POST["valor_total"];
        $data_compra = $_POST["data_compra"];
     
        $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
        mysqli_select_db($conn, '$db_grave');
        $sql = "INSERT INTO tb_estoque (quantidade,modelo, cor, marca, valor_total, data_compra) VALUES ('$quantidade','$modelo', '$cor', '$marca', '$valor_total', '$data_compra')";
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