<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">

        <title>Editar Funcionario</title>

        <link rel="stylesheet" href="../css/style-usuario.css"/>
        <link rel="icon" type="imagem/png" href="../img/Marca D'água Grave Preto.png" />
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

        $selecionar = mysqli_query($conn, "SELECT * FROM tb_funcionario WHERE id_funcionario=$recid");

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
            <div >

                <form method="post" action="EditarProduto.php">



                    <!esta linha cria um campo oculto para passar o id_Usuario, pois senão ao clicar em Salvar o código não saberá onde salvar.-->
                    <input type="hidden" name="id" value="<?= $campo["id_funcionario"] ?>"> 
                    <div class="formulario" id="box">
                        <h2>Alterar Funcionario</h2>
                        <form method="post" action="cadastrarproduto.php" class="formulario">

                            <table>
                                <ul class="form">
                                    <label id="lbnome" class="labelInput">Nome:</label>
                                    <input type="text"  name="nome" id="nome" class="inputUser" value="<?= $campo["nome"] ?>"/>
                                </ul>

                                <ul class="form">
                                    <label id="lbnome" class="labelInput">CPF:</label>
                                    <input type="text"  name="cpf" id="cpf" class="inputUser" value="<?= $campo["cpf"] ?>"/>
                                </ul>

                                <ul class="form">
                                    <label id="lbnome" class="labelInput">RG:</label>
                                    <input type="text"  name="rg" id="rg" class="inputUser" value="<?= $campo["rg"] ?>"/>
                                </ul>

                                <ul class="form">
                                    <label id="lbnome" class="labelInput">Orgão Emissor:</label>
                                    <input type="text"  name="orgao_emissor" id="orgao_emissor" class="inputUser" value="<?= $campo["orgao_emissor"] ?>"/>
                                </ul>


                                <ul class="form">
                                    <label id="lbnome" class="labelInput">UF:</label>
                                    <select id="uf" name="uf" class="inputUser" value="<?= $campo["uf"] ?>"/>


                                    <option value="">Selecione</option>
                                    <option value="AL">AL</option>
                                    <option value="AP">AP</option>
                                    <option value="AM">AM</option>
                                    <option value="BA">BA</option>
                                    <option value="CE">CE</option>
                                    <option value="DF">DF</option>
                                    <option value="ES">ES</option>
                                    <option value="GO">GO</option>
                                    <option value="MA">MA</option>
                                    <option value="MS">MS</option>
                                    <option value="MT">MT</option>
                                    <option value="MG">MG</option>
                                    <option value="PA">PA</option>
                                    <option value="PB">PB</option>
                                    <option value="PR">PR<option>
                                    <option value="PE">PE</option>
                                    <option value="PI">PI</option>
                                    <option value="RJ">RJ</option>
                                    <option value="RN">RN</option>
                                    <option value="RS">RS</option>
                                    <option value="RO">RO</option>
                                    <option value="RR">RR</option>
                                    <option value="SC">SC</option>
                                    <option value="SP">SP</option>
                                    <option value="SE">SE</option>
                                    <option value="TO">TO</option>

                                    </select>

                                </ul>

                                <ul class="form">
                                    <label id="lbnome" class="labelInput">Data Exepedição:</label>
                                    <input type="date"  name="data_expedicao" id="data_expedicao" class="inputUser" value="<?= $campo["data_expedicao"] ?>"/>
                                </ul>


                                <ul class="form">
                                    <label id="lbnome" class="labelInput">Data Nascimento:</label>
                                    <input type="date"  name="data_nasc" id="data_nasc" class="inputUser" value="<?= $campo["data_nasc"] ?>"/>
                                </ul>


                                <ul class="form">
                                    <label id="lbnome" class="labelInput"> Sexo:</label>
                                    <select name="sexo" class="inputUser" value="<?= $campo["sexo"] ?>"/>
                                    <option value="">Selecione</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Feminino">Feminino</option>
                                    <option value="Outros">Outros</option>
                                    </select>
                                </ul>





                                <ul class="form">
                                    <label id="lbnome" class="labelInput"> Etnia:</label>
                                    <select name="etnia" placeholder="selecione" class="inputUser" value="<?= $campo["etnia"] ?>"/>
                                    <option value="">Selecione</option>
                                    <option value="Preto">Preto</option>
                                    <option value="Branco">Branco</option>
                                    <option value="Pardo">Pardo</option>
                                    <option value="Amarelo">Amarelo</option>
                                    <option value="Indigenas">Indigenas</option>

                                    </select>
                                </ul>


                                <ul class="form">
                                    <label id="lbnome" class="labelInput">CTPS:</label>
                                    <input type="text"  name="ctps" id="ctps" class="inputUser" value="<?= $campo["ctps"] ?>"/>
                                </ul>

                                <ul class="form">
                                    <label id="lbnome" class="labelInput">CNH:</label>
                                    <input type="text"  name="cnh" id="cnh" class="inputUser" value="<?= $campo["cnh"] ?>"/>
                                </ul>

                                <ul class="form">
                                    <label id="lbnome" class="labelInput">PIS/PASEP:</label>
                                    <input type="text"  name="pis_pasep" id="pis_pasep" class="inputUser" value="<?= $campo["pis_pasep"] ?>"/>
                                </ul>

                                <ul class="form">
                                    <label id="lbnome" class="labelInput">CEP:</label>
                                    <input type="text"  name="cep" id="cep" class="inputUser" value="<?= $campo["cep"] ?>"/>
                                </ul>

                                <ul class="form">
                                    <label id="lbnome" class="labelInput">Endereço:</label>
                                    <input type="text"  name="endereco" id="endereco" class="inputUser" value="<?= $campo["endereco"] ?>"/>
                                </ul>

                                <ul class="form">
                                    <label id="lbnome" class="labelInput">Complemento:</label>
                                    <input type="text"  name="complemento" id="complemento" class="inputUser" value="<?= $campo["complemento"] ?>"/>
                                </ul>

                                <ul class="form">
                                    <label id="lbnome" class="labelInput">Numero:</label>
                                    <input type="text"  name="numero" id="numero" class="inputUser" value="<?= $campo["numero"] ?>"/>
                                </ul>

                                <ul class="form">
                                    <label id="lbnome" class="labelInput">Cidade:</label>
                                    <input type="text"  name="cidade" id="cidade" class="inputUser" value="<?= $campo["cidade"] ?>"/>
                                </ul>

                                <ul class="form">
                                    <label id="lbnome" class="labelInput">Bairro:</label>
                                    <input type="text"  name="bairro" id="bairro" class="inputUser" value="<?= $campo["bairro"] ?>"/>
                                </ul>

                                <ul class="form">
                                    <label id="lbnome" class="labelInput">Estado:</label>
                                    <input type="text"  name="estado" id="estado" class="inputUser" value="<?= $campo["estado"] ?>"/>
                                </ul>

                                <ul class="form">
                                    <label id="lbnome" class="labelInput">Telefone/Celular:</label>
                                    <input type="text"  name="telefone" id="telefone" class="inputUser" value="<?= $campo["telefone"] ?>"/>
                                </ul>

                                <ul class="form">
                                    <label id="lbnome" class="labelInput">E-mail:</label>
                                    <input type="email"  name="email" id="email" class="inputUser" value="<?= $campo["email"] ?>"/>
                                </ul>

                                <ul class="form">
                                    <label id="lbnome" class="labelInput">Função:</label>


                                    <select name="funcao" class="inputUser" value="<?= $campo["funcao"] ?>"/>

                                    <option value="">Selecione</option>
                                    <option value="Artista">Artista</option>
                                    <option value="Vendedor">Vendedor</option>
                                    <option value="Empacotador">Empacotador</option>
                                    <option value="Assistente Administrativo">Assistente Administrativo</option>
                                    <option value="Assitente em Contabilidade">Assitente em Contabilidade</option>
                                    <option value="Assistente de Recursos Humanos">Assistente de Recursos Humanos</option>
                                    </select>
                                </ul>

                                <ul class="form">
                                    <label id="lbnome" class="labelInput">Salario:</label>
                                    <input type="text"  name="salario" id="salario" class="inputUser" value="<?= $campo["salario"] ?>"/>
                                </ul>


                                <ul class="form">
                                    <label id="lbnome" class="labelInput">Horario:</label>
                                    <input type="text"  name="horario" id="horario" class="inputUser" value="<?= $campo["horario"] ?>"/>
                                </ul>


                                <ul class="form">
                                    <label id="lbnome" class="labelInput">Horario:</label>
                                    <select name="horario" class="inputUser" value="<?= $campo["horario"] ?>"/>

                                    <option value="">Selecione</option>
                                    <option value="Manhã">Manhã</option>
                                    <option value="Tarde">Tarde</option>
                                    <option value="Noite">Noite</option>
                                    <option value="Integral">Integral</option>
                                    </select>

                                </ul>


                                <ul class="form">
                                    <label id="lbnome" class="labelInput">Banco:</label>
                                    <input type="text"  name="banco" id="banco" class="inputUser" value="<?= $campo["banco"] ?>"/>
                                </ul>


                                <ul class="form">
                                    <label id="lbnome" class="labelInput">Conta:</label>
                                    <input type="text"  name="conta" id="conta" class="inputUser" value="<?= $campo["conta"] ?>"/>
                                </ul>

                                <ul class="form">
                                    <label id="lbnome" class="labelInput">Agencia:</label>
                                    <input type="text"  name="agencia" id="agencia" class="inputUser" value="<?= $campo["agencia"] ?>"/>
                                </ul>
                                
                                <ul class="form">
                                    <label id="lbnome" class="labelInput">Tipo da conta:</label>
                                    <input type="text"  name="tipo_conta" id="tipo_conta" class="inputUser" value="<?= $campo["tipo_conta"] ?>"/>
                                </ul>
                                
                                 <ul class="form">
                                    <label id="lbnome" class="labelInput">Pix:</label>
                                    <input type="text"  name="pix" id="pix" class="inputUser" value="<?= $campo["pix"] ?>"/>
                                </ul>





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
