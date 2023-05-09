<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consultar Funcionarios</title>
        <link type="text/css" rel="stylesheet" href="../css/style-usuario.css">

    </head>

    <body class="consulta">
        <header class="header">
            <a href="index.php"><img src="../img/Grave Store Logo HD.png" alt="Imagem" title="logo" width="80" height="70"/></a>
            <nav class="menu">

                <ul>

                    <li><a href="#">Perfil</a>
                        <ul>
                            <li><a href="../Usuario/FormUsuario.php">Cadastrar</a></li>
                            <li><a href="../Usuario/Consultarusuario.php">Consultar</a>
                        </ul>
                    </li>
                    <li><a href="#">Produtos</a>
                        <ul>
                            <li><a href="Produto/FormProduto.php">Cadastrar</a></li>
                            <li><a href="Produto/Consultarproduto.php">Consultar</a>
                        </ul>
                    </li>

                    <li><a href="#">Fornecedores</a>
                        <ul>
                            <li><a href="../FormFornecedor.php">Cadastrar</a></li>
                            <li><a href="../Consultarfornecedor.php">Consultar</a>
                        </ul>
                    </li>

                    <li><a href="#">Vendas</a>
                        <ul>
                            <li><a href="../Venda/FormVenda.php">Cadastrar</a></li>
                            <li><a href="../Venda/Consultarvenda.php">Consultar</a>
                        </ul>
                    </li>

                    <li><a href="#">Funcionarios</a>
                        <ul>
                            <li><a href="../Funcionario/FormFuncionario.php">Cadastrar</a></li>
                            <li><a href="../Funcionario/ConsultarFuncionario.php">Consultar</a>
                        </ul>
                    </li>
                    <li><a href="../Contato.html">Contato</a></li>
                </ul>
            </nav>
        </header>
        <main>
        <h1>Consultar produtos Cadastrados</h1>
        <table>
            <tr class="id">
                <td align="center"> <strong>ID</strong></td>	
                <td align="center"> <strong>Nome</strong></td>	
                <td align="center"> <strong>Tipo</strong></td>	
                <td align="center"> <strong>Tamanho</strong></td>	
                <td align="center"> <strong>Cor</strong></td>	
                <td align="center"> <strong>Coleção</strong></td>	
                <td align="center"> <strong>Preço</strong></td>	
                <td align="center"> <strong>Qtde</strong></td>
                <td align="center"> <strong>Imagem</strong></td>
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
                <td align="center"><?= $campo["imagem"] ?></td>
                
                	

                <td align="center"><a href="FormEditarProduto.php?editarid=<?php echo $campo ['id_produto']; ?>" class="editar">Editar</a></td>
                <td align="center"><a href="ExcluirProduto.php?p=excluir&produto=<?php echo $campo['id_produto']; ?>" class="editar">Excluir</a></td>
                </tr>
            <?php } ?>
        </table><br>
        <a href="../indexmenu.html"><input type="button" class="cancelar" value="Cancelar"/></a>
        </main>
    </body>
</html>
