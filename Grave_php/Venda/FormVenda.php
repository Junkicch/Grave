<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cadastrar Venda</title>
        <link rel="icon" type="imagem/png" href="../img/Marca D'água Grave Preto.png" />
        <link rel="stylesheet" href="../css/stylee.css"/>
        <!--<link rel="stylesheet" href="../css/formulariotop.css"/>-->
        
    </head>

    <body class="usuario">
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

                        <main class="main">



                            <div class="venda" id="boxmenor">
                                <h2>Cadastrar Venda</h2>
                                <form method="post" action="cadastrarvenda.php" class="formulario">

                                    <table> 
                                        <ul class="form">
                                    <label id="lbnome" class="labelInput">Quantidade:</label>
                                    <input type="text"  name="quantidade" id="nome" class="inputUser" />
                                </ul>

                                <ul class="form">
                                    <label id="lbnome" class="labelInput">Valor Total:</label>
                                    <input type="text"  name="valor_total" id="cpf" class="inputUser" />
                                </ul>

                                <ul class="form">
                                    <label id="lbnome" class="labelInput">Forma de Pagamento:</label>
                                    <input type="text"  name="forma_pagamento" id="rg" class="inputUser" />
                                </ul>

                                <ul class="form">
                                    <label id="lbnome" class="labelInput">Entrega:</label>
                                    <input type="text"  name="entrega" id="orgao_emissor" class="inputUser" />
                                </ul>
                                
                                <ul class="form">
                                    <label id="lbnome" class="labelInput">Vendedor:</label>
                                    <input type="text"  name="vendedor" id="orgao_emissor" class="inputUser" />
                                </ul>

                                        <ul class="form">
                                            <button type="submit" id="Cadastrar" class="hvr-fade ">Cadastrar</button>
                                            <a href="../indexmenu.html"> <input type="button" id="Cancelar" class="hvr-fade " value="Cancelar"/></a>
                                        </ul>               

                                    </table>
                                </form>

                            </div>
                            <img src="../img/Marca D'água Grave Preto.png" alt="Imagem" height="500" width="400" class="fundo">


                        </main>
                        </body>
                        </html>

