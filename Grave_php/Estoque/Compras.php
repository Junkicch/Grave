<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Compras</title>
        <link type="text/css" rel="stylesheet" href="../css/stylee.css">
        <link rel="icon" type="imagem/png" href="../img/Marca D'água Grave Preto.png" />
    </head>

    <body>
        <header class="header" >
            <a href="../indexmenu.html"><img src="../img/Grave Store Logo HD.png" alt="Imagem" title="logo" width="80" height="70"/></a>

            <nav class="menu">
                <ul>

                    <li><a href="#">Perfil</a>

                        <ul>
                            <li><a href="../Usuario/FormUsuario.php" class="labelInput">Cadastrar</a></li>
                            <li><a href="../produto/Consultarproduto.php">Consultar</a>
                        </ul>
                    </li>
                    <li><a href="#">Produtos</a>
                        <ul>
                            <li><a href="../produto/FormProduto.php">Cadastrar</a></li>
                            <li><a href="../produto/Consultarproduto.php">Consultar</a>
                        </ul>
                    </li>

                    <li><a href="#">Fornecedores</a>
                        <ul>
                            <li><a href="../Fornecedor/FormFornecedor.php">Cadastrar</a></li>
                            <li><a href="../Fornecedor/ConsultarFornecedor.php">Consultar</a>
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
                            <li><a href="../funcionario/FormFuncionario.php">Cadastrar</a></li>
                            <li><a href="../funcionario/Consultarfuncionario.php">Consultar</a>
                        </ul>
                    </li>
                    <li><a href="#">Almoxarifado</a>
                        <ul>
                            <li><a href="Estoque/Compras.php">Cadastrar Nova Compra</a></li>
                            <li><a href="ConsultarEstoque.php">Consultar Estoque</a>
                        </ul>
                        
                </ul>
            </nav>
        </header>

        <main class="main">



            <div class="compras">
                <h2>Cadastro Compra</h2>
                <form method="post" action="cadastrarCompras.php" class="formulario">

                    <table>
                        <ul class="form">
                            <label id="lbnome" class="labelInput">Quantidade:</label>
                            <input type="text"  name="quantidade" id="quantidade" class="inputUser"/>
                        </ul>
                        <ul class="form">
                            <label id="lbnome" class="labelInput">Modelo:</label>
                            <select id="iptestado" name="modelo" class="inputUser" value="<?= $campo["modelo"] ?>"/>
                            <option value="Selecione">Selecione</option>
                            <option value="Camisas">Camisas</option>
                            <option value="Moletons">Moletons</option>
                            <option value="Tenis">Tenis</option>

                            </select>
                        </ul>
                        <ul class="form">
                            <label id="lbnome" class="labelInput">Cor:</label>
                            <input type="text"  name="cor" id="cor" class="inputUser"/>
                        </ul>

                      

                        <ul class="form">
                            <label id="lbnome" class="labelInput">Marca:</label>
                            <input type="text"  name="marca" id="marca" class="inputUser"/>
                            </select>
                        </ul>

                        <ul class="form">
                            <label id="lbnome" class="labelInput">Valor Total:</label>
                            <input type="text"  name="valo_total" class="inputUser"/>
                        </ul>

                        <ul class="form">
                            <label id="lbnome" class="labelInput">Data compra:</label>
                            <input type="date"  name="data_compra" id="data_compra" class="inputUser"/>
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

        <div><h1>Compras</h1></div>


        <footer class="Fundoa">
            <nav class="footer">


                <!--
                <div class="apresentacao">
    
                    <h4>GRAVE STORE BRAZIL</h4>
    
                    <p> Nascida em uma ideia de um grupo de amigos de Brasília e Bahia,
                        <br>
                        focada e predestinada para ser a "maior marca" de roupas nacional. 
                        <br>
                        Focando no estilo de um(a) skatista ou pessoas que simpatizam com o 
                        <br>
                        esporte, trabalhando sempre em busca do menor preço justo e 
                        <br>
                        acessivel com a melhor qualidade e segurança de venda e dos produtos. 
                        <br>
                        Obrigado a todos que acreditam em nós da GRAVE STORE BRAZIL! </p>
                </div>
                
                -->
                <figure>    
                    <a href="https://www.whatsapp.com/?lang=pt_br"><img src="../img/whatsapp.png" alt="Imagem" height="25" width="25"/></a>
                    <a href="https://www.instagram.com/gravebrazil/"><img src="../img/instagram.png" alt="Imagem" height="25" width="25"/></a>
                    <a href="https://www.tiktok.com/@gravebrazil" ><img src="../img/tiktok.png" alt="Imagem" height="27" width="26"/></a>
                </figure>

            </nav>

        </footer>
    </body>


</html>
