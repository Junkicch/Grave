<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cadastrar Funcionário</title>
        <link rel="icon" type="imagem/png" href="../img/Marca D'água Grave Preto.png" />
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
        <header class="header">
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
                            <li><a href="../Venda/FormVenda.php">Cadastrar</a></li>
                            <li><a href="../Venda/Consultarvenda.php">Consultar</a>
                        </ul>
                    </li>

                    <li><a href="#">Funcionários</a>
                        <ul>
                            <li><a href="../funcionario/FormFuncionario.php">Cadastrar</a></li>
                            <li><a href="../funcionario/Consultarfuncionario.php">Consultar</a>
                        </ul>
                    <li><a href="#">Almoxarifado</a>
                        <ul>
                            <li><a href="../Estoque/Compras.php">Cadastrar Nova Compra</a></li>
                            <li><a href="../Estoque/ConsultarEstoque.php">Consultar Estoque</a>
                        </ul>

                        </nav>
                        </header>

                        <main class="main">



                            <div class="funcionario" >
                                <h2>Cadastrar Funcionário</h2>
                                <form method="post" action="cadastrarfuncionario.php" class="formulario">

                                    <table> 


                                        <ul class="form">
                                            <label id="lbnome" class="labelInput"> Nome:</label>
                                            <input type="text" id="iptnome" name="nome" id="nome" class="inputUser"/>
                                        </ul>





                                        <ul class="form">
                                            <label id="lbnome" class="labelInput"> CPF:</label>
                                            <input type="text" id="iptnome" name="cpf" id="nome" class="inputUser"/>
                                        </ul>

                                        <ul class="form">
                                            <label id="lbnome" class="labelInput"> RG:</label>
                                            <input type="text" id="iptnome" name="rg" id="nome" class="inputUser"/>
                                        </ul>

                                        <ul class="form">
                                            <label id="lbnome" class="labelInput"> Orgão Emissor:</label>
                                            <input type="text" id="iptnome" name="orgao_emissor" id="nome" class="inputUser"/>
                                        </ul>

                                        <ul class="form">
                                            <label id="lbnome" class="labelInput"> UF:</label>
                                            <select id="iptestado" name="uf" class="inputUser" value="<?= $campo["uf"] ?>"/>
                                            
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
                                            <label id="lbnome" class="labelInput"> Data de expedição:</label>
                                            <input type="date" id="iptnome" name="data_expedicao" id="nome" class="inputUser"/>
                                        </ul>
                                        <ul class="form">
                                            <label id="lbnome" class="labelInput"> Data de Nascimento:</label>
                                            <input type="date" id="iptnome" name="data_nasc" id="nome" class="inputUser"/>
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
                                            <label id="lbnome" class="labelInput"> Ctps:</label>
                                            <input type="text" id="iptnome" name="ctps" id="nome" class="inputUser"/>
                                        </ul>

                                        <ul class="form">
                                            <label id="lbnome" class="labelInput"> CNH:</label>
                                            <input type="text" id="iptnome" name="cnh" id="nome" class="inputUser"/>
                                        </ul>
                                        <ul class="form">
                                            <label id="lbnome" class="labelInput"> Pis/Pasep:</label>
                                            <input type="text" id="iptnome" name="pis_pasep" id="nome" class="inputUser"/>
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
                                            <label id="lbnome" class="labelInput">Complemento:</label>
                                            <input type="text"  name="complemento"id="complemento" class="inputUser"/>
                                        </ul>

                                        <ul class="form">
                                            <label id="lbnome" class="labelInput">Numero:</label>
                                            <input type="text"  name="numero" id="numero" class="inputUser"/>
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
                                            <label id="lbnome" class="labelInput"> UF:</label>
                                            <select id="iptestado" name="estado" class="inputUser" value="<?= $campo["estado"] ?>"/>
                                            
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
                                            <label id="lbnome" class="labelInput">Telefone/Celular:</label>
                                            <input type="text"  name="telefone" id="tel_cel" class="inputUser"/>
                                        </ul>


                                        <ul class="form">
                                            <label id="lbnome" class="labelInput">Email:</label>
                                            <input type="text"  name="email" id="email" class="inputUser"/>
                                        </ul>

                                        <ul class="form">
                                            <label id="lbnome" class="labelInput"> Função:</label>
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
                                            <label id="lbnome" class="labelInput"> Salario:</label>
                                            <input type="text" id="iptnome" name="salario" id="nome" class="inputUser"/>
                                        </ul>

                                        <ul class="form">
                                            <label id="lbnome" class="labelInput"> Horario:</label>
                                            <select name="horario" class="inputUser" value="<?= $campo["horario"] ?>"/>
                                            
                                            <option value="">Selecione</option>
                                            <option value="Manhã">Manhã</option>
                                            <option value="Tarde">Tarde</option>
                                            <option value="Noite">Noite</option>
                                            <option value="Integral">Integral</option>
                                            </select>
                                        </ul>

                                        <ul class="form">
                                            <label id="lbnome" class="labelInput"> Banco:</label>
                                            <input type="text" id="iptnome" name="banco" id="nome" class="inputUser"/>
                                        </ul>

                                        <ul class="form">
                                            <label id="lbnome" class="labelInput"> Conta:</label>
                                            <input type="text" id="iptnome" name="conta" id="nome" class="inputUser"/>
                                        </ul>

                                        <ul class="form">
                                            <label id="lbnome" class="labelInput"> Agência:</label>
                                            <input type="text" id="iptnome" name="agencia" id="nome" class="inputUser"/>
                                        </ul>

                                        <ul class="form">
                                            <label id="lbnome" class="labelInput"> Tipo de Conta:</label>
                                            <input type="text" id="iptnome" name="tipo_conta" id="nome" class="inputUser"/>
                                        </ul>

                                        <ul class="form">
                                            <label id="lbnome" class="labelInput"> Pix:</label>
                                            <input type="text" id="iptnome" name="pix" id="nome" class="inputUser"/>
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

