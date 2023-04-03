<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro Usuário</title>
        <link href="../img/Marca D'água Grave Preto.png" rel="icon">
        <link rel="stylesheet" href="../css/style.css"/>
       <!--<link rel="stylesheet" href="../css/formulariotop.css"/>-->
        <script>
            function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('endereco').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('endereco').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            
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
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('endereco').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

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
    };
        </script>
    </head>
    
    <body class="usuario">
        
        
        <header class="header" >
            <a href="../indexmenu.html"><img src="../img/Grave Store Logo HD.png" alt="Imagem" title="logo" width="80" height="70"/></a>
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
                    <li><a href="../Fornecedor/ConsultarFornecedor.php">Consultar</a>
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
        
        <main class="main">
   
          
            
        <div class="formulario" id="box">
            <h2>Cadastro Usuario</h2>
            <form method="post" action="cadastrarusuario.php" class="formulario">

                <table>
                    <ul class="form">
                        <label id="lbnome" class="labelInput"> Nome:</label>
                        <input type="text" id="iptnome" name="nome_usu" id="nome" class="inputUser"/>
                    </ul>
                    
                    <ul class="form">
                        <label id="lbnome" class="labelInput">Cep:</label>
                        <input type="text"  name="cep_usu" id="cep" class="inputUser" onblur="pesquisacep(this.value)"/>
                    </ul>
                    
                    <ul class="form">
                        <label id="lbnome" class="labelInput">Endereco:</label>
                        <input type="text"  name="endereco_usu" id="endereco" class="inputUser"/>
                    </ul>
                    
                    <ul class="form">
                        <label id="lbnome" class="labelInput">Bairro:</label>
                        <input type="text"  name="bairro_usu" id="bairro" class="inputUser"/>
                    </ul>
                    
                    <ul class="form">
                        <label id="lbnome" class="labelInput">Cidade:</label>
                        <input type="text"  name="cidade_usu" id="cidade" class="inputUser"/>
                    </ul>
                    
                    <ul class="form">
                        <label id="lbnome" class="labelInput">Número:</label>
                        <input type="text"  name="numero_usu"id="numero" class="inputUser"/>
                    </ul>
                    
                    <ul class="form">
                        <label id="lbnome" class="labelInput">Complemento:</label>
                        <input type="text"  name="complemento_usu" id="complemento" class="inputUser"/>
                    </ul>
                    
                    <ul class="form"> 
                        <label id="lbestcivil" >Estado:</label>
                    <select id="iptestado" name="estado_usu" class="inputUser" value="<?=$campo["estado_usu"]?>"/>
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
                        <label id="lbnome" class="labelInput">Telefone/Celular:</label>
                        <input type="tel" id="iptnome" name="tel_cel_usu" class="inputUser"/>
                    </ul>
                    
                    <ul class="form">
                        <label id="lbnome" class="labelInput">Email:</label>
                        <input type="email" id="iptnome" name="email_usu" class="inputUser"/>
                    </ul>

                    <ul class="form">
                        <button  type="submit" id="Cadastrar" class="hvr-fade" >Cadastrar</button>
                        <a href="../indexmenu.html"> <input type="button" id="Cancelar" class="hvr-fade " value="Cancelar"/></a>
                    </ul>               

                </table>
            </form>
            
        </div>
            <img src="../img/Marca D'água Grave Preto.png" alt="Imagem" height="500" width="400" class="fundo">
               
                
        </main>
    </body>
</html>

