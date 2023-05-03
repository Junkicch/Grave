<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Consultar Produto</title>
        <link type="text/css" rel="stylesheet" href="../css/style-usuario.css">
        <link type="text/css" rel="stylesheet" href="../css/styleCard.css">
        <link rel="icon" type="imagem/png" href="../img/Marca D'água Grave Preto.png" />

    </head>

    <body class="consulta">
        <header class="header">
            <a href="../indexmenu.html"><img src="../img/Grave Store Logo HD.png" alt="Imagem" title="logo" width="80" height="70"/></a>
            <nav class="menu" id="navbar">

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

                            <div class="row">
                                <div class="col-md-12">
                                    <table>
                                        <tr>
                                            <?php
                                            include_once '../conectarbd.php';
                                            $sql = "select * from tb_produto";
                                            $query = mysqli_query($conn, $sql)or die(mysqli_error($conn));
                                            $linhas = mysqli_fetch_array($query);
                                            if ($linhas) {
                                                $cont = 0;
                                                do {
                                                    $cont++;
                                                    if ($cont > 4) {
                                                        echo "</tr><tr>";
                                                        $cont = 0;
                                                    }
                                                    ?>
                                                    <td><div id="div--img--card">
                                                            <img id="img--card" src="<?= "../img/" . $linhas["imagem"] ?>"></div>
                                                        <div id="comentarios--img--card">
                                                            <br><?php echo "<strong>Nome: </strong>";
                                            echo $linhas["nome"];
                                                    ?>
                                                            <br><?php echo "<strong>Tipo: </strong>";
                                                    echo $linhas["tipo"];
                                                    ?>
                                                            <br><?php echo "<strong>Tamanho: </strong>";
                                                    echo $linhas["tamanho"];
                                                    ?>
                                                            <br><?php echo "<strong>Cor: </strong>";
                                                    echo $linhas["cor"];
                                                    ?>
                                                            <br><?php echo "<strong>Coleção: </strong>";
                                                    echo $linhas["colecao"];
                                                    ?>
                                                            <br><?php echo "<strong>Preço: </strong>";
                                                    echo $linhas["preco"];
                                                    ?>
                                                            <br><?php echo "<strong>Quantidade: </strong>";
                                                    echo $linhas["quantidade"];
                                                    ?></div>
                                                        <a href="FormEditarProduto.php?editarid=<?php echo $campo ['id_produto']; ?>" class="editar">Editar</a><br />
                                                        <a href="ExcluirProduto.php?p=excluir&produto=<?php echo $campo['id_produto']; ?>" class="editar">Excluir</a><br />

                                                    </td>
        <?php
    } while ($linhas = mysqli_fetch_array($query));
    ?>
    <?php
}
?>
                                        </tr>
                                    </table>

                                    </tr>

                                <!--     <table>
                                        <td class="id">
                                        <tr align="center"> <strong>ID</strong></td> 
                                        <tr align="center"> <strong>Nome</strong>align="center"><?= $campo["nome"] ?></td> </td> <br />
                                        <tr align="center"> <strong>Tipo</strong></td>	</td> <br />
                                        <tr align="center"> <strong>Tamanho</strong></td> </td> <br />
                                        <tr align="center"> <strong>Cor</strong></td> </td> <br />
                                        <tr align="center"> <strong>Coleção</strong></td> </td> <br />
                                        <tr align="center"> <strong>Preço</strong></td> </td> <br />
                                        <tr align="center"> <strong>Quantidade</strong></td> </td> <br />
                                        <tr align="center"> <strong>Imagem</strong></td> <br />

                                        </tr>
                                    --> 

                                    </table><br>
                                    <a href="../indexmenu.html"><input type="button" class="hvr-fade" value="Cancelar"/></a>
                                    </main>
                                    </body>
                                    </html>


  <!--   <td align="center"><?= $campo["id_produto"] ?></td> </td> <br />
        <td align="center"><?= $campo["nome"] ?></td> </td> <br />
        <td align="center"><?= $campo["tipo"] ?></td> </td> <br />
        <td align="center"><?= $campo["tamanho"] ?></td> </td> <br />
        <td align="center"><?= $campo["cor"] ?></td> </td> <br />
        <td align="center"><?= $campo["colecao"] ?></td> </td> <br />
        <td align="center"><?= $campo["preco"] ?></td> </td> <br />
        <td align="center"><?= $campo["quantidade"] ?></td> </td> <br />