<?php include_once "../conectarbd.php"; ?>
<html>
    <body>
        <?php
        $nome = $_POST["quantidade"];
        $cpf = $_POST["valor_total"];
        $rg = $_POST["forma_pagamento"];
        $orgao_emissor = $_POST["entrega"];
        $uf = $_POST["vendedor"];
        


        $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
        mysqli_select_db($conn, '$db_grave');
        $sql = "INSERT INTO tb_venda(quantidade, valor_total, forma_pagamento, entrega, vendedor) VALUES ('$nome', '$cpf', '$rg', '$orgao_emissor', '$uf')";
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