<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">

        <title>Editar Produto</title>

        <link rel="stylesheet" href="../css/style-usuario.css"/>
        <link rel="icon" type="imagem/png" href="../img/Marca D'água Grave Preto.png" />
        

    </head>

    <body>

        <?php
        include("../conectarbd.php");

        $recid = filter_input(INPUT_GET, 'editarid');

        $selecionar = mysqli_query($conn, "SELECT * FROM tb_produto WHERE id_produto=$recid");

        $campo = mysqli_fetch_array($selecionar);
        ?>

        <header class="header" >
            <a href="indexmenu.html"><img src="../img/Grave Store Logo HD.png" alt="Imagem" title="logo" width="80" height="70"/></a>
            <nav class="menu">
                <ul>

                    <li><a href="#">Perfil</a>



                        <ul>
                            <li><a href="../Usuario/FormUsuario.php" class="labelInput">Cadastrar</a></li>
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
                            <li><a href="venda/FormVenda.php">Cadastrar</a></li>
                            <li><a href="venda/Consultarvenda.php">Consultar</a>
                        </ul>
                    </li>

                    <li><a href="#">Funcionarios</a>
                        <ul>
                            <li><a href="funcionario/FormFuncionario.php">Cadastrar</a></li>
                            <li><a href="funcionario/Consultarfuncionario.php">Consultar</a>
                        </ul>
                    </li>
                    <li><a href="Contato.html">Contato</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="usuulario">

                <form method="post" action="EditarProduto.php">



                    <!esta linha cria um campo oculto para passar o id_Usuario, pois senão ao clicar em Salvar o código não saberá onde salvar.-->
                    <input type="hidden" name="id" value="<?= $campo["id_produto"] ?>"> 
                    <div class="formulario" id="box">
                        <h2>Alterar Poduto</h2>
                        <form method="post" action="cadastrarproduto.php" class="formulario">

                            <table>
                                <ul class="form">
                                    <label id="lbnome" class="labelInput">Nome:</label>
                                    <input type="text"  name="nome" id="nome" class="inputUser" value="<?= $campo["nome"] ?>"/>
                                </ul>
                                <ul class="form">
                                    <label id="lbnome" class="labelInput">Tipo:</label>
                                    <select id="iptestado" name="tipo" class="inputUser" value="<?= $campo["tipo"] ?>"/>
                                    <option value="Casual">Casual</option>
                                    <option value="Streetwear">Streetwear</option>
                                    </select>
                                </ul>
                                <ul class="form">
                                    <label id="lbnome" class="labelInput">Tamanho:</label>
                                    <select id="iptestado" name="tamanho" class="inputUser" value="<?= $campo["tamanho"] ?>"/>
                                    <option value="Selecione">Selecione</option>
                                    <option value="P">P</option>
                                    <option value="M">M</option>
                                    <option value="G">G</option>
                                    <option value="GG">GG</option>
                                    <option value="EG">EG</option>
                                    <option value="EGG">EGG</option>
                                    </select>
                                </ul>    
                                <ul class="form">
                                    <label id="lbnome" class="labelInput">Cor:</label>
                                    <select id="iptestado" name="cor" class="inputUser" value="<?= $campo["cor"] ?>"/>
                                    <option value="Selecione">Selecione</option>
                                    <option value="Preto">Preto</option>
                                    <option value="Branco">Branco</option>
                                    </select>
                                </ul>

                                <ul class="form">
                                    <label id="lbnome" class="labelInput">Coleção:</label>
                                    <input type="text" name="colecao" placeholder="Nome" value="<?= $campo["colecao"] ?>" class="inputUser">
                                    </select>
                                </ul>

                                <ul class="form">
                                    <label id="lbnome" class="labelInput">Preço:</label>
                                    <input type="text" name="preco" placeholder="Nome" value="<?= $campo["preco"] ?>" class="inputUser">
                                </ul>
                                
                                <ul class="form">
                                    <label id="lbnome" class="labelInput">Quantidade:</label>
                                    <input type="text"  name="quantidade" class="inputUser" value="<?= $campo["quantidade"] ?>"/>
                                </ul>
                                
                                <ul class="form">
                                        <label id="lbnome" class="labelInput">Imagem:</label>
                                    <input type="hidden" name="MAX_FILE_SIZE" value="<?= $campo["imagem"] ?>"/>
                                    <div><input name="imagem" type="file"/></div>
                                </ul>

                                <ul class="form">

                                    <input type="submit" class="hvr-fade " value="Salvar" >
                                    <a href="Consultarproduto.php"><input type="button" class="hvr-fade " value="Cancelar"/></a>
                                </ul>  
                                
                                

                            </table>

                        </form>

                    </div>
                    <img src="../img/Marca D'água Grave Preto.png" alt="Imagem" height="500" width="400" class="fundo">

                    </main>

                    </body>

                    </html>
