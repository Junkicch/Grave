<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">

        <title>Editar Fornecedores</title>

        <link rel="stylesheet" href="../css/style-usuario.css"/>
        
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

    <body>

        <?php
        include("../conectarbd.php");

        $recid = filter_input(INPUT_GET, 'editarid');

        $selecionar = mysqli_query($conn, "SELECT * FROM tb_fornecedor WHERE id_fornecedor=$recid");

        $campo = mysqli_fetch_array($selecionar);
        ?>
    <body class="Fornecedor">


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
                            <li><a href="../Produto/FormProduto.php">Cadastrar</a></li>
                            <li><a href="../Produto/Consultarproduto.php">Consultar</a>
                        </ul>
                    </li>

                    <li><a href="#">Fornecedores</a>
                        <ul>
                            <li><a href="FormFornecedor.php">Cadastrar</a></li>
                            <li><a href="ConsultarFornecedor.phpConsultarfornecedor.php">Consultar</a>
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

        <div class="fornecedor">

            <form method="post" action="EditarFornecedor.php" class="formulario">

                <h2>Alterar Fornecedores</h2>

                <!esta linha cria um campo oculto para passar o id_Fornecedor, pois senão ao clicar em Salvar o código não saberá onde salvar.-->
                <input type="hidden" name="id" value="<?= $campo["id_fornecedor"] ?>"> 
                <table>
                    <ul class="form">
                        <label id="lbnome" class="labelInput"> Nome:</label>
                        <input type="text" name="cep" placeholder="Nome" value="<?= $campo["cep"] ?>" class="inputUser">
                    </ul>

                    <ul class="form">
                        <label id="lbnome" class="labelInput">CNPJ:</label>
                        <input type="text"  name="cnpj" id="cnpj" class="inputUser" value="<?= $campo["cnpj"] ?>" onblur="pesquisacep(this.value)"/>
                    </ul>

                    <ul class="form">
                        <label id="lbnome" class="labelInput">Tipo:</label>
                        <input type="text"  name="tipo" id="tipo" class="inputUser" value="<?= $campo["tipo"] ?>"/>
                    </ul>

                     <ul class="form">
                            <label id="lbnome" class="labelInput">Cep:</label>
                            <input type="text"  name="cep" id="cep" class="inputUser" onblur="pesquisacep(this.value)"/>
                        </ul>

                     <ul class="form">
                            <label id="lbnome" class="labelInput">Endereço:</label>
                            <input type="text"  name="endereco" id="endereco" class="inputUser"/>
                        </ul>

                        <ul class="form">
                            <label id="lbnome" class="labelInput">Cidade:</label>
                            <input type="text"  name="cidade"id="cidade" class="inputUser"/>
                        </ul>

                        <ul class="form">
                            <label id="lbnome" class="labelInput">Bairro:</label>
                            <input type="text"  name="bairro" id="bairro" class="inputUser"/>
                        </ul>

                    <ul class="form">
                        <label id="lbnome" class="labelInput">Numero:</label>
                        <input type="text" name="numero" placeholder="Nome" value="<?= $campo["numero"] ?>" class="inputUser">
                    </ul>


                    <ul class="form"> 
                        <label id="lbestcivil" >Estado:</label>
                        <select id="iptestado" name="estado" value="<?= $campo["estado"] ?>" class="inputUser"/>
                        <option value="AC">Acre</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal*</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="SP">São Paulo</option>
                        <option value="RO">Rondônia</option>
                        </select>
                    </ul>

                    <ul class="form">
                        <label id="lbnome" class="labelInput">Complemento:</label>
                        <input type="text" name="complemento" placeholder="Nome" value="<?= $campo["complemento"] ?>" class="inputUser">
                    </ul>

                    <ul class="form">
                        <label id="lbnome" class="labelInput">Telefone/Celular:</label>
                        <input type="tel" name="tel_cel" placeholder="cel" value="<?= $campo["tel_cel"] ?>" class="inputUser">
                    </ul>


                    <ul class="form">
                        <label id="lbnome" class="labelInput">Email:</label>
                        <input type="email" name="email" placeholder="email" value="<?= $campo["email"] ?>" class="inputUser">
                    </ul>

                    <ul class="form">
                        <input type="submit" class="hvr-fade" value="Salvar" >
                        <a href="Consultarfornecedor.php"><input type="button" class="hvr-fade" value="Cancelar"/></a>
                    </ul>               

                </table>

            </form>

        </div>



    </body>

</html>
