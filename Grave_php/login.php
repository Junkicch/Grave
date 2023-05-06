<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro Usuario</title>
        <link href="../img/Marca D'água Grave Preto.png" rel="icon">
        <link rel="stylesheet" href="css/style-usuario.css"/>
        <!--<link rel="stylesheet" href="../css/formulariotop.css"/>-->
       
    </head>

    <body class="usuario">


        <header class="header">
            <div class="logo">
                <a href="../index.php"><img src="img/Grave Store Logo HD.png" alt="Imagem" title="logo" width="80" height="70"/></a>
            </div>



        </header>
        <main class="main">



            <div class="formulario" id="box">
                <h2>Cadastro Usuario</h2>
                <form method="post" action="testLogin.php" class="formulario">

                    <table>

                        <ul class="form">
                            <label id="lbnome" class="labelInput">E-mail:</label>
                            <input type="email"  name="cpf" id="cpf" class="inputUser"  />
                        </ul>


                        <ul class="form">

                            <div id="input">
                                <label id="password" class="labelInput">Senha:</label>
                                <input type="password" value="" name="senha" id="senha" class="inputUser"/>
                                <img src="img/Aberto-olho_1.png" height="19px">
                            </div>    

                            <ul class="form">
<!--                                <label id="lbnome" class="labelInput"> Função:</label>-->
                                <select id="iptestado" name="funcao" class="inputUser" value="<?= $campo["funcao"] ?>"/>

                                
                                <option value="Comum">Comum</option>
                                

                                </select>
                            </ul>



                        </ul>



                        <ul class="form">
                            <button  type="submit" id="Login" class="hvr-fade" >Login</button>

 <!--<a href="FormUsuario.php"> <input type="button" id="Cancelar" class="hvr-fade " value="Cancelar"/></a>
                            -->
                        </ul>               

                    </table>

                </form>




                <div >
                    Não tem conta? <a href="FormUsuario.php">Cadastre-se</a>
                </div>


            </div>
            <img src="img/Marca D'água Grave Preto.png" alt="Imagem" height="500" width="400" class="fundo">


        </main>
    </body>

    <script>
        var input = document.querySelector('#input input');
        var img = document.querySelector('#input img');
        img.addEventListener('click', function () {
            input.type = input.type == 'text' ? 'password' : 'text';
        });
    </script>
</html>

