<?php include_once "../conectarbd.php"; ?>
<html>
    <body>
        <?php
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $rg = $_POST["rg"];
        $orgao = $_POST["orgao_emissor"];
        $uf = $_POST["uf"];
        $dataexp = $_POST["data_expedicao"];
        $datanasc = $_POST["data_nasc"];
        $sexo = $_POST["sexo"];
        $etnia = $_POST["etnia"];
        $ctps = $_POST["ctps"];
        $cnh = $_POST["cnh"];
        $pispasep = $_POST["pis_pasep"];
        $cep = $_POST["cep"];
        $endereco = $_POST["endereco"];
        $complemento = $_POST["complemento"];
        $n = $_POST["numero"];
        $cidade = $_POST["cidade"];
        $bairro = $_POST["bairro"];
        $estado = $_POST["estado"];
        $telefone = $_POST["telefone"];
        $email = $_POST["email"];
        $funcao = $_POST["funcao"];
        $salario = $_POST["salario"];
        $horario = $_POST["horario"];
        $banco = $_POST["banco"];
        $conta = $_POST["conta"];
        $agencia = $_POST["agencia"];
        $tipoconta = $_POST["tipo_conta"];
        $pix = $_POST["pix"];

        $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
        mysqli_select_db($conn, '$db_grave');
        $sql = "INSERT INTO tb_funcionario(id_funcionario, nome, cpf, rg, orgao_emissor, uf, data_expedicao, data_nasc, sexo, etnia, ctps, cnh, pis_pasep, cep, endereco, complemento, numero, cidade, bairro, estado, telefone, email, funcao, salario, horario, banco, conta, agencia, tipo_conta, pix) VALUES ('$nome', '$cpf', '$rg', '$orgao', '$uf', '$dataexp', '$datanasc', '$sexo', '$etnia', '$ctps', '$cnh', '$pispasep', '$cep', '$endereco', '$complemento', '$n', $cidade', '$bairro', '$estado', '$telefone', '$email', '$funcao', '$salario', '$horario', '$banco' '$conta', '$agencia', '$tipoconta', '$pix')";
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