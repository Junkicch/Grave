<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cadastrar Produto</title>
        <link href="../img/Marca D'água Grave Preto.png" rel="icon">
        <link rel="stylesheet" href="../css/style.css"/>
        <!--<link rel="stylesheet" href="../css/formulariotop.css"/>-->
        <script>
            function limpa_formulário_cep() {
                //Limpa valores do formulário de cep.
                document.getElementById('endereco').value = ("");
                document.getElementById('bairro').value = ("");
                document.getElementById('cidade').value = ("");

            }

            function meu_callback(conteudo) {
                if (!("erro" in conteudo)) {
                    //Atualiza os campos com os valores.
                    document.getElementById('endereco').value = (conteudo.logradouro);
                    document.getElementById('bairro').value = (conteudo.bairro);
                    document.getElementById('cidade').value = (conteudo.localidade);

                } //end if.
                else {
                    //CEP não Encontrado.
                    limpa_formulário_cep();
                    alert("CEP não encontrado.");
                }
            }

            function pesquisacep(valor) {

                //Nova variável "cep" somente com dígitos.
                var cep = valor.replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if (validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        document.getElementById('endereco').value = "...";
                        document.getElementById('bairro').value = "...";
                        document.getElementById('cidade').value = "...";


                        //Cria um elemento javascript.
                        var script = document.createElement('script');

                        //Sincroniza com o callback.
                        script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

                        //Insere script no documento e carrega o conteúdo.
                        document.body.appendChild(script);

                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            }
            ;
        </script>
    </head>

    <body class="usuario">


        <header class="header" >
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
                    <li><a href="#">Almoxarifado</a>
                        <ul>
                            <li><a href="../Estoque/Compras.php">Cadastrar Nova Compra</a></li>
                            <li><a href="../Estoque/ConsultarEstoque.php">Consultar Estoque</a>
                        </ul>
                        
                </ul>
            </nav>
        </header>

        <main class="main">



            <div class="produto">
                <h2>Cadastro Produto</h2>
                <form method="post" action="cadastrarproduto.php" class="formulario">

                    <table>
                        <ul class="form">
                            <label id="lbnome" class="labelInput">Nome:</label>
                            <input type="text"  name="nome" id="nome" class="inputUser"/>
                        </ul>
                        <ul class="form">
                            <label id="lbnome" class="labelInput">Tipo:</label>
                            <select id="iptestado" name="tipo" class="inputUser" value="<?= $campo["tipo"] ?>"/>
                            <option value="Selecione">Selecione</option>
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
                            <input type="text"  name="colecao" id="nome" class="inputUser"/>
                            </select>
                        </ul>

                        <ul class="form">
                            <label id="lbnome" class="labelInput">Preço:</label>
                            <input type="text"  name="preco" class="inputUser"/>
                        </ul>

                        <ul class="form">
                            <label id="lbnome" class="labelInput">Quantidade:</label>
                            <input type="text"  name="quantidade" id="nome" class="inputUser"/>
                        </ul>
        
                        <ul class="form">
                            <label id="lbnome" class="labelInput">Imagem:</label>
                            <input type="hidden" name="MAX_FILE_SIZE" value="99999999"/>
                            <div><input name="imagem" type="file"/></div>
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

