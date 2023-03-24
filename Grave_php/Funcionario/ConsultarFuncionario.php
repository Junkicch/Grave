<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consultar Fornecedor</title>
        <link type="text/css" rel="stylesheet" href="../css/style.css">

    </head>

    <body>


        <header class="header">
            <a href="../indexmenu.html"><img src="../img/Grave Store Logo HD.png" alt="Imagem" title="logo" width="80" height="70"/></a>
            <nav class="menu">

                <ul>

                    <li><a href="#">Usuários</a>
                        <ul>
                            <li><a href="../Usuario/Consultarusuario.php">Consultar</a>
                        </ul>
                    </li>
                    </li>
                    <li><a href="#">Produtos</a>
                        <ul>
                            <li><a href="../Produto/FormProduto.php">Cadastrar</a></li>
                            <li><a href="../Produto/Consultarproduto.php">Consultar</a>
                        </ul>
                    </li>

                    <li><a href="#">Fornecedores</a>
                        <ul>
                            <li><a href="FormFornecedor.php">Cadastrar</a></li>
                            <li><a href="Consultarfornecedor.php">Consultar</a>
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


                        <h1>Consultar Funcionarios Cadastrados</h1>
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
                                <td align="center"> <strong>RG</strong></td>	
                                <td align="center"> <strong>Orgão Emissor</strong></td>
                                <td align="center"> <strong>UF</strong></td>
                                <td align="center"> <strong>Data de expedição</strong></td>
                                <td align="center"> <strong>Data Nascimento</strong></td>
                                <td align="center"> <strong>Sexo</strong></td>
                                <td align="center"> <strong>Etinia</strong></td>
                                <td align="center"> <strong>CTPS</strong></td>
                                <td align="center"> <strong>CNH</strong></td>
                                <td align="center"> <strong>Pis/Pasep</strong></td>
                                <td align="center"> <strong>Cep</strong></td>
                                <td align="center"> <strong>Endereço</strong></td>	
                                <td align="center"> <strong>Complemento</strong></td>	
                                <td align="center"> <strong>Numero</strong></td>	
                                <td align="center"> <strong>Cidade</strong></td>
                                <td align="center"> <strong>Bairro</strong></td>
                                <td align="center"> <strong>Estado</strong></td>
                                <td align="center"> <strong>Telefone</strong></td>
                                <td align="center"> <strong>E-mail</strong></td>
                                <td align="center"> <strong>Função</strong></td>
                                <td align="center"> <strong>Salario</strong></td>
                                <td align="center"> <strong>Horario</strong></td>
                                <td align="center"> <strong>Banco</strong></td>
                                <td align="center"> <strong>Conta</strong></td>
                                <td align="center"> <strong>Agencia</strong></td>
                                <td align="center"> <strong>Tipo Conta</strong></td>
                                <td align="center"> <strong>Pix</strong></td>

                                <td width="10"> <strong>Editar</strong></td>
                                <td width="10"> <strong>Deletar</strong></td>
                            </tr>

                            <?php
                            include("../conectarbd.php");
                            $selecionar = mysqli_query($conn, "SELECT * FROM tb_funcionario");
                            while ($campo = mysqli_fetch_array($selecionar)) {
                                ?>
                                <tr>
                                    <td align="center"><?= $campo["id_funcionario"] ?></td>
                                    <td align="center"><?= $campo["nome"] ?></td>
                                    <td align="center"><?= $campo["cpf"] ?></td>
                                    <td align="center"><?= $campo["rg"] ?></td>
                                    <td align="center"><?= $campo["orgao_emissor"] ?></td>
                                    <td align="center"><?= $campo["uf"] ?></td>
                                    <td align="center"><?= $campo["data_expedicao"] ?></td>
                                    <td align="center"><?= $campo["data_nasc"] ?></td>
                                    <td align="center"><?= $campo["sexo"] ?></td>
                                    <td align="center"><?= $campo["etnia"] ?></td>
                                    <td align="center"><?= $campo["ctps"] ?></td>
                                    <td align="center"><?= $campo["cnh"] ?></td>
                                    <td align="center"><?= $campo["pis_pasep"] ?></td>
                                    <td align="center"><?= $campo["cep"] ?></td>
                                    <td align="center"><?= $campo["endereco"] ?></td>
                                    <td align="center"><?= $campo["complemento"] ?></td>
                                    <td align="center"><?= $campo["numero"] ?></td>
                                    <td align="center"><?= $campo["cidade"] ?></td>
                                    <td align="center"><?= $campo["bairro"] ?></td>
                                    <td align="center"><?= $campo["estado"] ?></td>
                                    <td align="center"><?= $campo["telefone"] ?></td>
                                    <td align="center"><?= $campo["email"] ?></td>
                                    <td align="center"><?= $campo["funcao"] ?></td>
                                    <td align="center"><?= $campo["salario"] ?></td>
                                    <td align="center"><?= $campo["horario"] ?></td>
                                    <td align="center"><?= $campo["banco"] ?></td>
                                    <td align="center"><?= $campo["conta"] ?></td>
                                    <td align="center"><?= $campo["agencia"] ?></td>
                                    <td align="center"><?= $campo["tipo_conta"] ?></td>
                                    <td align="center"><?= $campo["pix"] ?></td>
                                   
                                    <td align="center"><a href="FormEditarFuncionario.php?editarid=<?php echo $campo ['id_funcionario']; ?>">Editar</a></td>
                                    <td align="center"><i><a href="ExcluirFuncionario.php?p=excluir&produto=<?php echo $campo['id_funcionario']; ?>">Excluir</i></a></td>
                                </tr>
                            <?php } ?>
                        </table><br>
                        <a href="../indexmenu.html"><input type="button" class="botoes" value="Cancelar"/></a>
                        </body>
                        </html>
