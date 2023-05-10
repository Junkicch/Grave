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
                <li class="itens"><a href="../indexPrincipal.php">Cardápio</a>
                </li>
                <li class="itens"><a href="../login/formLogin.php">Login</a>
                </li>
            </ul>
        </nav>

        <div class="titulo">
            <h1>Bem-vindo(a) ao pestica burguer, veja o nosso cardápio!</h1>
        </div>

        <div class="formEditar">
            <form action="login.php" method="POST">
                <fieldset id="fieldsetConfig">
                    <div class="frente">
                        <div class="inputBox">
                            <input type="text" name="login" id="login" class="respUser" onkeypress="masc_login()" maxlength="14" required>
                            <label for="login" class="labelInput">Login:</label>
                        </div>
                        <div class="inputBox">
                            <img id="olho" src="../icones/eye.png" alt="">
                            <input type="password" class="respUser" name="senha" id="senha" maxlength="14" required>
                            <label for="senha" class="labelInput">Senha:</label>
                        </div>
                        <select id="funcao_func" name="funcao_func" class="respUser" required>
                                <option value="selecione">Selecione</option>
                                <option value="gerente">Gerente</option>
                                <option value="funcionario">Funcionário</option>
                            </select>
                    </div>  
                    <button type="submit" name="btnEnviar" id="btnEnviarConfig" class="btnGeral">Entrar</button>
                    <button onclick="cancelarLogin()" type="button" name="btnCancelar" id="btnCancelConfig" class="btnGeral">Cancelar</button>
                    <ul class="imgHambur" id="imgHamburBtn">
                        <img src="../imagens/hamburguer_resized.png">
                    </ul>
                </fieldset>
            </form>
        </div>
    </body>
    <script src="../js/script.js"></script>
</html>
