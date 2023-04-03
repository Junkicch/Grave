<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consultar Fornecedor </title>
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
                            <li><a href="../funcionario/FormFuncionario.php">Cadastrar</a></li>
                            <li><a href="../funcionario/Consultarfuncionario.php">Consultar</a>
                        </ul>
                    </li>
                        <li><a href="#">Almoxarifado</a>
                        <ul>
                            <li><a href="../Estoque/Compras.php">Cadastrar Nova Compra</a></li>
                            <li><a href="../Estoque/ConsultarEstoque.php">Consultar Estoque</a>
                        </ul>
                        
                        </nav>
                        </header>
                        <main>
                            <h1>Consultar Fornecedores Cadastrados</h1>
                            <table>
                                <tr class="id">
                                    <td align="center"> <strong>ID</strong></td>	
                                    <td align="center"> <strong>Nome</strong></td>
                                    <td align="center"> <strong>Cnpj</strong></td>	
                                    <td align="center"> <strong>Tipo</strong></td>	
                                    <td align="center"> <strong>Cep</strong></td>	
                                    <td align="center"> <strong>Endereço</strong></td>
                                    <td align="center"> <strong>Número</strong></td>
                                    <td align="center"> <strong>Complemento</strong></td>
                                    <td align="center"> <strong>Bairro</strong></td>
                                    <td align="center"> <strong>Usuario</strong></td>	
                                    <td align="center"> <strong>Estado</strong></td>
                                    <td align="center"> <strong>Telefone/Celular</strong></td>
                                    <td align="center"> <strong>Email</strong></td>
                                    <td width="10"> <strong>Editar</strong></td>
                                    <td width="10"> <strong>Deletar</strong></td>
                                </tr>

                                <?php
                                include("../conectarbd.php");
                                $selecionar = mysqli_query($conn, "SELECT * FROM tb_fornecedor");
                                while ($campo = mysqli_fetch_array($selecionar)) {
                                    ?>
                                    <tr class="usuarios">
                                        <td align="center"><?= $campo["id_fornecedor"] ?></td>
                                        <td align="center"><?= $campo["nome"] ?></td>
                                        <td align="center"><?= $campo["cnpj"] ?></td>
                                        <td align="center"><?= $campo["tipo"] ?></td>
                                        <td align="center"><?= $campo["cep"] ?></td>
                                        <td align="center"><?= $campo["endereco"] ?></td>
                                        <td align="center"><?= $campo["numero"] ?></td>
                                        <td align="center"><?= $campo["complemento"] ?></td>
                                        <td align="center"><?= $campo["bairro"] ?></td>
                                        <td align="center"><?= $campo["cidade"] ?></td>
                                        <td align="center"><?= $campo["estado"] ?></td>
                                        <td align="center"><?= $campo["tel_cel"] ?></td>
                                        <td align="center"><?= $campo["email"] ?></td>
                                        <td align="center"><a href="FormEditarFornecedor.php?editarid=<?php echo $campo ['id_fornecedor']; ?>" class="editar">Editar</a></td>
                                        <td align="center"><a href="ExcluirFornecedor.php?p=excluir&fornecedor=<?php echo $campo['id_fornecedor']; ?>" class="editar">Excluir</a></td>
                                    </tr>
<?php } ?>
                            </table><br>
                            <a href="../indexmenu.html"><input type="button" class="hvr-fade" value="Cancelar"/></a>
                        </main>
                        </body>
                        </html>
