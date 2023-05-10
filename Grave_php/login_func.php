<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro Usuario</title>
        <link href="../img/Marca D'água Grave Preto.png" rel="icon">
        <link rel="stylesheet" href="css/style-usuario.css"/>
        <link rel="stylesheet" href="../css/formulariotop.css"/>

    </head>

    <body class="usuario">


        <header class="header">
            <div class="logo">
                <a href=""><img src="img/Grave Store Logo HD.png" alt="Imagem" title="logo" width="80" height="70"/></a>
            </div>



        </header>
        <main class="main">



            <div class="formulario" id="box">
                <h2>Login Funcionario</h2>
                <form method="post" action="testLogin_func.php" class="formulario">

                    <table>



                        <ul class="form">

                            <label id="lbnome" class="labelInput"></label>

                            <input type="email"  class="inputUser" name="email" placeholder="Email">

                            <br>
                            <br>                             

                            <div id="input">

                                <label id="password" class="labelInput"></label>
                                <!--  <input type="password" value="" name="senha" id="senha" class="inputUser"/>-->

                                <input class="inputUser" type="password" name="senha" placeholder="Senha">

                                <img src="img/Aberto-olho_1.png" height="19px">
                            </div>    

<!--                            <ul class="form">
                                <label id="lbnome" class="labelInput"> Função:</label> 
                                <select id="iptestado" name="funcao" class="inputUser" value="<?= $campo["funcao"] ?>"/>


                                <option value="Comum">Comum</option>


                                </select>
                            </ul>-->



                        </ul>



                        <ul class="form">
                            <!--   <button  type="submit" id="Login" class="hvr-fade" >Login</button>-->

                            <input class="hvr-fade"  type="submit" name="submit" value="Enviar">


                            <a href="FormUsuario.php"> <input type="button" id="Cancelar" class="hvr-fade " value="Cancelar"/></a>

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




<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        div{
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        .inputSubmit{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            
        }
        .inputSubmit:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div>
        <h1>Login</h1>
        <form action="testLogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>-->
