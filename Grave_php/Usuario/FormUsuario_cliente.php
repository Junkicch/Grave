<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro Usuario</title>
        <link href="../img/Marca D'água Grave Preto.png" rel="icon">
        <link rel="stylesheet" href="../css/style-usuario.css"/>
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

            //arquivo funcoes_cpf.js
// validador CPF
            function verificarCPF(c) {
                var i;
                s = c;
                var c = s.substr(0, 9);
                var dv = s.substr(9, 2);
                var d1 = 0;
                var v = false;

                for (i = 0; i < 9; i++) {
                    d1 += c.charAt(i) * (10 - i);
                }
                if (d1 == 0) {
                    alert("CPF Inválido")
                    v = true;
                    return false;
                }
                d1 = 11 - (d1 % 11);
                if (d1 > 9)
                    d1 = 0;
                if (dv.charAt(0) != d1) {
                    alert("CPF Inválido")
                    v = true;
                    return false;
                }

                d1 *= 2;
                for (i = 0; i < 9; i++) {
                    d1 += c.charAt(i) * (11 - i);
                }
                d1 = 11 - (d1 % 11);
                if (d1 > 9)
                    d1 = 0;
                if (dv.charAt(1) != d1) {
                    alert("CPF Inválido")
                    v = true;
                    return false;
                    if (!v) {
                        alert(c + "nCPF Válido")
                    }
                }

            }


            ;
        </script>
    </head>

    <body class="usuario">


        <header class="header">
            <div class="logo">
                <a href="../index.php"><img src="../img/Grave Store Logo HD.png" alt="Imagem" title="logo" width="80" height="70"/></a>
            </div>



        </header>

        <main class="main">



            <div class="formulario" id="box">
                <h2>Cadastro Usuario</h2>
                <form method="post" action="cadastrarusuario.php" class="formulario">

                    <table>
                        <ul class="form">
                            <label id="lbnome" class="labelInput"> Nome:</label>
                            <input type="text" id="iptnome" name="nome" id="nome" class="inputUser"/>
                        </ul>

                        <ul class="form">
                            <label id="lbnome" class="labelInput">CPF:</label>
                            <input type="text"  name="cpf" id="cpf" class="inputUser" onblur="return verificarCPF(this.value)" />
                        </ul>

                        <ul class="form">
                            <label id="lbnome" class="labelInput">Data de nascimento:</label>
                            <input type="date"  name="data_nasc" class="inputUser"/>
                        </ul>

                        <ul class="form">
                            <label id="lbnome" class="labelInput">CEP:</label>
                            <input type="text"  name="cep" id="cep" class="inputUser" onblur="pesquisacep(this.value)"/>
                        </ul>


                        <ul class="form">
                            <label id="lbnome" class="labelInput"> Estado:</label>
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
                            <label id="lbnome" class="labelInput">Endereco:</label>
                            <input type="text"  name="endereco" id="endereco" class="inputUser"/>
                        </ul>


                        <ul class="form">
                            <label id="lbnome" class="labelInput">Complemento:</label>
                            <input type="text"  name="complemento" id="complemento" class="inputUser"/>
                        </ul>

                        <ul class="form">
                            <label id="lbnome" class="labelInput">Cidade:</label>
                            <input type="text"  name="cidade" id="cidade" class="inputUser"/>
                        </ul>


                        <ul class="form">
                            <label id="lbnome" class="labelInput">Bairro:</label>
                            <input type="text"  name="bairro" id="bairro" class="inputUser"/>
                        </ul>

                        <ul class="form">
                            <label id="lbnome" class="labelInput">Numero:</label>
                            <input type="text"  name="numero" id="numero" class="inputUser"/>
                        </ul>


                        <ul class="form">
                            <label id="lbnome" class="labelInput">Telefone:</label>
                            <input type="text" id="iptnome" name="telefone" class="inputUser"/>
                        </ul>


                        <ul class="form">
                            <label id="lbnome" class="labelInput">E-mail:</label>
                            <input type="email" id="iptnome" name="email" class="inputUser"/>
                        </ul>


                        <ul class="form">
                            <label id="lbnome" class="labelInput">Senha:</label>
                            <input type="password" id="iptnome" name="senha" class="inputUser"/>
                        </ul>


                         <ul class="form">
                                <label id="lbnome" class="labelInput"> Função:</label>
                                <select id="iptestado" name="funcao" class="inputUser" value="<?= $campo["funcao"] ?>"/>


                                <option value="Comum">Comum</option>


                                </select>
                            </ul>
                       

                                <ul class="form">
                                    <button  type="submit" id="Cadastrar" class="hvr-fade" >Cadastrar</button>


                                    <a href="../index.php"> <input type="button" id="Cancelar" class="hvr-fade" value="Cancelar"/></a>

                                </ul>               

                                </table>
                                </form>

                                <div >
                                    Já tem uma conta? <a href="login.php">Faça Login</a>
                                </div>
                                </div>
                                <img src="../img/Marca D'água Grave Preto.png" alt="Imagem" height="500" width="400" class="fundo">


                                </main>
                                </body>
                                </html>

