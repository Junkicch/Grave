<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consultar Vendas</title>
        <link type="text/css" rel="stylesheet" href="../css/stylee.css">

    </head>

    <body class="consulta">
   <header class="header">
            <a href="../indexmenu.html"><img src="../img/Grave Store Logo HD.png" alt="Imagem" title="logo" width="80" height="70"/></a>
            <nav class="menu">

                <ul>

                    <li><a href="#">Usuários</a>
                        <ul>
                            <li><a href="../Usuario2/Consultarusuario.php">Consultar</a>
                        </ul>
                    </li>
                    <li><a href="#">Produtos</a>
                        <ul>
                            <li><a href="../Produto/FormProduto.php">Cadastrar</a></li>
                            <li><a href="../Produto/Consultarproduto.php">Consultar</a>
                        </ul>
                    </li>

                    <li><a href="#">Fornecedores</a>
                        <ul>
                            <li><a href="../Fornecedor/FormFornecedor.php">Cadastrar</a></li>
                            <li><a href="../Fornecedor/Consultarfornecedor.php">Consultar</a>
                        </ul>
                    </li>

                    <li><a href="#">Vendas</a>
                        <ul>
                            <li><a href="../Venda/FormVenda.php">Cadastrar</a></li>
                            <li><a href="../Venda/Consultarvenda.php">Consultar</a>
                        </ul>
                    </li>
                    <li><a href="#">Funcionários</a>
                        <ul>
                            <li><a href="../Funcionario/FormFuncionario.php">Cadastrar</a></li>
                            <li><a href="../Funcionario/ConsultarFuncionario.php">Consultar</a>
                        </ul>
                    
                    <li><a href="#">Almoxarifado</a>
                        <ul>
                            <li><a href="../Estoque/Compras.php">Cadastrar Nova Compra</a></li>
                            <li><a href="../Estoque/ConsultarEstoque.php">Consultar Estoque</a>
                        </ul>

                        </nav>
                        </header>
        <main>
        <h1>Consultar Vendaes Cadastrados</h1>
        <table>
            <tr class="id">
                <td align="center"> <strong>ID</strong></td>
                <td align="center"> <strong>Quantidade</strong></td>
                <td align="center"> <strong>Valor Total</strong></td>
                <td align="center"> <strong>Forma de Pagamento</strong></td>
                <td align="center"> <strong>Entrega</strong></td>
                <td align="center"> <strong>Vendedor</strong></td>
                	
                <td width="10"> <strong>Editar</strong></td>
                <td width="10"> <strong>Deletar</strong></td>
            </tr>

            <?php
            include("../conectarbd.php");
            $selecionar = mysqli_query($conn, "SELECT * FROM tb_venda");
            while ($campo = mysqli_fetch_array($selecionar)) {
                ?>
            <tr class="usuarios">
                    <td align="center"><?= $campo["id_venda"] ?></td>	
                <td align="center"><?= $campo["quantidade"] ?></td>
                <td align="center"><?= $campo["valor_total"] ?></td>
                <td align="center"><?= $campo["forma_pagamento"] ?></td>
                <td align="center"><?= $campo["entrega"] ?></td>
                <td align="center"><?= $campo["vendedor"] ?></td>

                	

                <td align="center"><a href="FormEditarVenda.php?editarid=<?php echo $campo ['id_venda']; ?>" class="editar">Editar</a></td>
                    <td align="center"><a href="ExcluirVenda.php?p=excluir&venda=<?php echo $campo['id_venda']; ?>" class="editar">Excluir</a></td>
                </tr>
            <?php } ?>
        </table><br>
        <a href="../indexmenu.html"><input type="button" class="cancelar" value="Cancelar"/></a>
        </main>
    </body>
</html>
