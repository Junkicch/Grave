<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consultar Fornecedor</title>
        <link type="text/css" rel="stylesheet" href="../css/style.css">

    </head>

    <body>
        <h1>Consultar Fornecedores Cadastrados</h1>
        <table
            width="100%"
            border="1" 
            bordercolor="black"
            cellspacing="2" 	
            cellpadding="5"
            >
            <tr>
                <td align="center"> <strong>ID</strong></td>	
                <td align="center"> <strong>Nome</strong></td>	
                <td align="center"> <strong>CNPJ</strong></td>	
                <td align="center"> <strong>Tipo</strong></td>
                <td align="center"> <strong>CEP</strong></td>
                <td align="center"> <strong>Endereço</strong></td>
                <td align="center"> <strong>Cidade</strong></td>
                <td align="center"> <strong>Estado</strong></td>
                <td align="center"> <strong>Bairro</strong></td>
                <td align="center"> <strong>Número</strong></td>
                <td align="center"> <strong>Complemento</strong></td>
                <td align="center"> <strong>Telefone Celular</strong></td>
                <td align="center"> <strong>Email</strong></td>
                <td width="10"> <strong>Editar</strong></td>
                <td width="10"> <strong>Deletar</strong></td>
            </tr>

            <?php
            include("../conectarbd.php");
            $selecionar = mysqli_query($conn, "SELECT * FROM tb_fornecedor");
            while ($campo = mysqli_fetch_array($selecionar)) {
                ?>
                <tr>
                    <td align="center"><?= $campo["id_fornecedor"] ?></td>
                    <td align="center"><?= $campo["tipo"] ?></td>
                    <td align="center"><?= $campo["tamanho"] ?></td>
                    <td align="center"><?= $campo["cor"] ?></td>
                    <td align="center"><?= $campo["colecao"] ?></td>
                    <td align="center"><?= $campo["preco"] ?></td>
                    <td align="center"><?= $campo["preco"] ?></td>
                    <td align="center"><?= $campo["preco"] ?></td>
                    <td align="center"><?= $campo["preco"] ?></td>
                    <td align="center"><?= $campo["preco"] ?></td>
                    <td align="center"><?= $campo["preco"] ?></td>
                    <td align="center"><?= $campo["preco"] ?></td>
                    <td align="center"><?= $campo["preco"] ?></td>

                    <td align="center"><a href="FormEditarFornecedor.php?editarid=<?php echo $campo ['id_produto']; ?>">Editar</a></td>
                    <td align="center"><i><a href="ExcluirFornecedor.php?p=excluir&produto=<?php echo $campo['id_produto']; ?>">Excluir</i></a></td>
                </tr>
            <?php } ?>
        </table><br>
        <a href="../indexmenu.html"><input type="button" class="botoes" value="Cancelar"/></a>
    </body>
</html>
