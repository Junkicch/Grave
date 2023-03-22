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
                    <li><a href="#">Compras</a>
                        <ul>
                            <li><a href="../Compras/Compras.php">Compras</a></li>
                        </ul>
                        </nav>
                        </header>
                        <main>
                            <h1>Consultar Produtos Cadastrados</h1>
                            <table>
                                <tr class="id">
                                    <td align="center"> <strong>ID</strong></td>
                                    <td align="center"> <strong>Nome</strong></td>
                                    <td align="center"> <strong>Tipo</strong></td>	
                                    <td align="center"> <strong>Tamanho</strong></td>	
                                    <td align="center"> <strong>Cor</strong></td>
                                    <td align="center"> <strong>Coleção</strong></td>
                                    <td align="center"> <strong>Preço</strong></td>
                                    <td align="center"> <strong>Quantidade</strong></td>
                                    <td width="10"> <strong>Editar</strong></td>
                                    <td width="10"> <strong>Deletar</strong></td>
                                </tr>

                                <?php
                                include("../conectarbd.php");
                                $selecionar = mysqli_query($conn, "SELECT * FROM tb_produto");
                                while ($campo = mysqli_fetch_array($selecionar)) {
                                    ?>
                                    <tr class="usuarios">
                                        <td align="center"><?= $campo["id_produto"] ?></td>
                                        <td align="center"><?= $campo["nome"] ?></td>
                                        <td align="center"><?= $campo["tipo"] ?></td>
                                        <td align="center"><?= $campo["tamanho"] ?></td>
                                        <td align="center"><?= $campo["cor"] ?></td>
                                        <td align="center"><?= $campo["colecao"] ?></td>
                                        <td align="center"><?= $campo["preco"] ?></td>
                                        <td align="center"><?= $campo["quantidade"] ?></td>
                                        <td align="center"><a href="FormEditarProduto.php?editarid=<?php echo $campo ['id_produto']; ?>" class="editar">Editar</a></td>
                                        <td align="center"><a href="ExcluirProduto.php?p=excluir&produto=<?php echo $campo['id_produto']; ?>" class="editar">Excluir</a></td>
                                    </tr>
                                <?php } ?>
                            </table><br>
                            <a href="../indexmenu.html"><input type="button" class="hvr-fade" value="Cancelar"/></a>
                        </main>
                        </body>
                        </html>
