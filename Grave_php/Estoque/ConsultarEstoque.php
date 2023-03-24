<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consultar Produto</title>
        <link type="text/css" rel="stylesheet" href="../css/style.css">
        <link rel="icon" type="imagem/png" href="../img/Marca D'água Grave Preto.png" />

    </head>

    <body class="consulta">
        <header class="header">
            <a href="../indexmenu.html"><img src="../img/Grave Store Logo HD.png" alt="Imagem" title="logo" width="80" height="70"/></a>
            <nav class="menu">

                <ul>

                    <li><a href="#">Usuários</a>
                        <ul>
                            <li><a href="../Usuario/Consultarusuario.php">Consultar</a>
                        </ul>
                    </li>
                    <li><a href="#">Produtos</a>
                        <ul>
                            <li><a href="FormProduto.php">Cadastrar</a></li>
                            <li><a href="Consultarproduto.php">Consultar</a>
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
                            <li><a href="venda/FormVenda.php">Cadastrar</a></li>
                            <li><a href="venda/Consultarvenda.php">Consultar</a>
                        </ul>
                    </li>

                    <li><a href="#">Funcionários</a>
                        <ul>
                            <li><a href="../funcionario/FormFuncionario.php">Cadastrar</a></li>
                            <li><a href="../funcionario/Consultarfuncionario.php">Consultar</a>
                        </ul>
                    <li><a href="#">Almoxarifado</a>
                        <ul>
                            <li><a href="Estoque/Compras.php">Cadastrar Nova Compra</a></li>
                            <li><a href="Estoque/ConsultarEstoque.php">Consultar Estoque</a>
                        </ul>

                        </nav>
                        </header>
                        <main>
                            <h1>Consultar Estoque</h1>
                            <table>
                                <tr class="id">
                                    <td align="center"> <strong>ID Compra</strong></td>
                                    <td align="center"> <strong>Quantidade</strong></td>
                                    <td align="center"> <strong>Modelo</strong></td>	
                                    <td align="center"> <strong>Cor</strong></td>	
                                    <td align="center"> <strong>Marca</strong></td>
                                    <td align="center"> <strong>Valor Total</strong></td>
                                    <td align="center"> <strong>Data da compra</strong></td>
                                   
                                    <td width="10"> <strong>Editar</strong></td>
                                    <td width="10"> <strong>Deletar</strong></td>
                                </tr>

                                <?php
                                include("../conectarbd.php");
                                $selecionar = mysqli_query($conn, "SELECT * FROM tb_estoque");
                                while ($campo = mysqli_fetch_array($selecionar)) {
                                    ?>
                                    <tr class="usuarios">
                                        <td align="center"><?= $campo["id_compra"] ?></td>
                                        <td align="center"><?= $campo["quantidade"] ?></td>
                                        <td align="center"><?= $campo["modelo"] ?></td>
                                        <td align="center"><?= $campo["cor"] ?></td>
                                        <td align="center"><?= $campo["marca"] ?></td>
                                        <td align="center"><?= $campo["valor_total"] ?></td>
                                        <td align="center"><?= $campo["data_compra"] ?></td>
                                       
                                        <td align="center"><a href="FormEditarProduto.php?editarid=<?php echo $campo ['id_produto']; ?>" class="editar">Editar</a></td>
                                        <td align="center"><a href="ExcluirCompras.php?p=excluir&produto=<?php echo $campo['id_compra']; ?>" class="editar">Excluir</a></td>
                                    </tr>
                                <?php } ?>
                            </table><br>
                            <a href="../indexmenu.html"><input type="button" class="hvr-fade" value="Cancelar"/></a>
                        </main>
                        </body>
                        </html>
