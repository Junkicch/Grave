<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consultar Usuários</title>
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
                            <li><a href="Consultarusuario.php">Consultar</a>
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
                            <li><a href="venda/FormVenda.php">Cadastrar</a></li>
                            <li><a href="venda/Consultarvenda.php">Consultar</a>
                        </ul>
                    </li>

                    <li><a href="#">Funcionários</a>
                        <ul>
                            <li><a href="../funcionario/FormFuncionario.php">Cadastrar</a></li>
                            <li><a href="../funcionario/Consultarfuncionario.php">Consultar</a>
                        </ul>
                    </li>
                    <li><a href="#">Compras</a>
                        <ul>
                            <li><a href="../Compras/Compras.php">Compras</a></li>
                        </ul>
            </nav>
        </header>

        <main>
            <h1>Consultar Usuarios Cadastrados</h1>
            <table>
                <tr class="id">
                    <td align="center"> <strong>ID</strong></td>	
                    <td align="center"> <strong>Nome</strong></td>	
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
                $selecionar = mysqli_query($conn, "SELECT * FROM tb_usuario");
                while ($campo = mysqli_fetch_array($selecionar)) {
                    ?>
                    <tr class="usuarios">
                        <td align="center"><?= $campo["id_usuario"] ?></td>
                        <td align="center"><?= $campo["nome_usu"] ?></td>
                        <td align="center"><?= $campo["cep_usu"] ?></td>
                        <td align="center"><?= $campo["endereco_usu"] ?></td>
                        <td align="center"><?= $campo["numero_usu"] ?></td>
                        <td align="center"><?= $campo["complemento_usu"] ?></td>
                        <td align="center"><?= $campo["bairro_usu"] ?></td>
                        <td align="center"><?= $campo["cidade_usu"] ?></td>
                        <td align="center"><?= $campo["estado_usu"] ?></td>
                        <td align="center"><?= $campo["tel_cel_usu"] ?></td>
                        <td align="center"><?= $campo["email_usu"] ?></td>
                        <td align="center"><a href="FormEditarUsuario.php?editarid=<?php echo $campo ['id_usuario']; ?>" class="editar">Editar</a></td>
                        <td align="center"><a href="ExcluirUsuario.php?p=excluir&usuario=<?php echo $campo['id_usuario']; ?>" class="editar">Excluir</a></td>
                    </tr>
                <?php } ?>
            </table><br>
            <a href="../indexmenu.html"><input type="button" class="cancelar" value="Cancelar"/></a>
        </main>
    </body>
</html>
