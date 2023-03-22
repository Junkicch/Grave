<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consultar Usuarios</title>
        <link type="text/css" rel="stylesheet" href="../css/style.css">
    
    </head>

    <body class="consulta">
        <header class="header">
            <a href="indexmenu.html"><img src="../img/Grave Store Logo HD.png" alt="Imagem" title="logo" width="80" height="70"/></a>
        <nav class="menu">
           
            <ul>
                
                <li><a href="#">Usuario</a>
                    <ul>
                        <li><a href="FormUsuario.php">Cadastrar</a></li>
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
                    <li><a href="../Venda/FormVenda.php">Cadastrar</a></li>
                    <li><a href="../Venda/Consultarvenda.php">Consultar</a>
                    </ul>
                </li>
                
                <li><a href="#">Funcionarios</a>
                <ul>
                    <li><a href="../Funcionario/FormFuncionario.php">Cadastrar</a></li>
                    <li><a href="../Funcionario/Consultarfuncionario.php">Consultar</a>
                    </ul>
                </li>
                <li><a href="Contato.html">Contato</a></li>
            </ul>
        </nav>
        </header>
        
        <main>
                <h1>Consultar Usuarios Cadastrados</h1>
                <table>
                    <tr class="id">
                        <td align="center"> <strong>ID</strong></td>	
                        <td align="center"> <strong>Nome</strong></td>
                        <td align="center"> <strong>Cpf</strong></td>
                        <td align="center"> <strong>Data Nascimento</strong></td>
                        <td align="center"> <strong>Cep</strong></td>	
                        <td align="center"> <strong>Endereço</strong></td>
                        <td align="center"> <strong>Complemento</strong></td>
                        <td align="center"> <strong>Bairro</strong></td>
                        <td align="center"> <strong>Usuario</strong></td>	
                        <td align="center"> <strong>Telefone/Celular</strong></td>
                        <td align="center"> <strong>Email</strong></td>
                        <td width="10"> <strong>Editar</strong></td>
                        <td width="10"> <strong>Deletar</strong></td>
                    </tr>

                    <?php
                        include("../conectarbd.php");
                        $selecionar= mysqli_query($conn, "SELECT * FROM tb_usuario");
                        while ($campo= mysqli_fetch_array($selecionar)){?>
                    <tr class="usuarios">
                                <td align="center"><?=$campo["id_usuario"]?></td>
                                <td align="center"><?=$campo["nome"]?></td>
                                <td align="center"><?=$campo["cpf"]?></td>
                                <td align="center"><?=$campo["data_nasc"]?></td>
                                <td align="center"><?=$campo["cep"]?></td>
                                <td align="center"><?=$campo["endereco"]?></td>
                                <td align="center"><?=$campo["complemento"]?></td>
                                <td align="center"><?=$campo["bairro"]?></td>
                                <td align="center"><?=$campo["cidade"]?></td>
                                <td align="center"><?=$campo["telefone"]?></td>
                                <td align="center"><?=$campo["email"]?></td>
                                <td align="center"><a href="FormEditarUsuario.php?editarid=<?php echo $campo ['id_usuario'];?>" class="editar">Editar</a></td>
                                <td align="center"><a href="ExcluirUsuario.php?p=excluir&usuario=<?php echo $campo['id_usuario'];?>" class="editar">Excluir</a></td>
                            </tr>
                    <?php }?>
                </table><br>
                <a href="../indexmenu.html"><input type="button" class="cancelar" value="Cancelar"/></a>
        </main>
    </body>
</html>
