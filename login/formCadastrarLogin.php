<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bem-vindo(a) </title>
        <link href="../css/style.css" rel="stylesheet">
        <link href="../css/styleLogin.css" rel="stylesheet">
        <link rel="icon" href="../icones/hamburguer.ico">

    </head>
    <body>
        <nav class="navBar">
            <ul class="imgHamburNav">
                <img src="../imagens/hamburguer_resized.png">
            </ul>  
            <ul class="menus">
                <li class="itens"><a href="Cardápio/cardapio.php">Cardápio</a>
                </li>  
                <li class="itens"><a href="Contatos/contatos.php">Entre em Contato</a>
                </li>
                <li class="itens"><a href="login.php">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="titulo">
        <h1>Bem-vindo(a) ao pestica burguer, faça seu cadastro conosco!</h1>
    </div>

    <div class="formEditar">
        <form action="cadastrarLogin.php" method="POST">
            <fieldset id="fieldsetConfigCadLogin">
                <div class="frente">
                    <div class="inputBox">
                        <input type="text" name="login" id="login" class="respUser" required>
                        <label for="login" class="labelInput">Login:</label>
                    </div>
                    <div class="inputBox">
                        <input type="password" class="respUser" name="senha" id="senha" required>
                        <label for="senha" class="labelInput">Senha:</label>
                    </div>
                    <div class="inputBox">
                        <input type="password" class="respUser" name="confirmar_senha" id="confirmar_senha" required>
                        <label for="confirmar_senha" class="labelInput">Confirmar a Senha:</label>
                    </div>
                </div>
                <button type="submit" name="btnEnviar" id="btnEnviarConfig" class="btnGeral">Cadastrar</button>
                <button onclick="cancelar()" type="button" name="btnCancelar" id="btnCancelConfig" class="btnGeral">Cancelar</button>
                <ul class="imgHambur" id="imgHamburBtn">
                    <img src="../imagens/hamburguer_resized.png">
                </ul>
            </fieldset>
        </form>
    </div>


</body>
<script src="../js/script.js"></script>
</html>
