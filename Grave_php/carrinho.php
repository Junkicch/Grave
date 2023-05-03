
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="css/styleCard.css"/>
    </head>
    <body>
        <div class="logo">
            <a href="indexmenu.html"><img src="img/Grave Store Logo HD.png" alt="Imagem" title="logo" width="80" height="70"/></a>
        </div>
        
        <header role="banner" class="header">
            <div class="cadastrar">
                <a href="Usuario/FormUsuario.php">Cadastrar</a>
            </div>
            <div class="login">
                <a href="Usuario/login.php">Login</a>
            </div>
            <div class="car">
                <img src="img/Carrinho branco.png" width="20px" height="20px"/>
            </div>

        </header>
        
        <nav class="menu" id="navbar">
            <ul>
                <li><a href="">Camisas</a></li>
                <li><a href="#">Calças</a></li>
                <li><a href="#">Moletons</a></li>
                <li><a href="#">Tênis</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>
        
        <main class="main">
            
            <div class="modal">
                <div class="content">
                    <h1 class="title">Olá, eu sou um modal!</h1>
                    <p class="text">Você pode me fechar clicando fora desta área.</p>
                </div>
            </div>
            
            <table id="tableConfigCard">
                        <tr>
                            <?php
                            include_once './conectarbd.php';
                            $sql = "select * from tb_produto";
                            $query = mysqli_query($conn, $sql)or die(mysqli_error($conn));
                            $linhas = mysqli_fetch_array($query);
                            if ($linhas) {
                                $cont = 0;
                                do {
                                    $cont++;
                                    if ($cont > 4) {
                                        echo "</tr><tr>";
                                        $cont = 0;
                                    }
                                    ?>
                                    <td>
                                        <div id="div--img--card">
                                        <img id="img--card" src="<?php echo 'img/' . $linhas['imagem']; ?>" >
                                        <div id="comentarios--img--card">
                                        <br><?php echo $linhas["nome"]; ?><br><?php echo $linhas["preco"]; ?><br>
                                        <?php
                                        if ($linhas["quantidade"] > 0) {
                                            ?>
                                            <form method="get" action="produto.php">
                                                <input type="hidden" name="produto" value="<?php echo $linhas['id_produto']; ?>">
                                                <input type="submit" value="Comprar" class="btn btn-default" name="addCarrinho"/>
                                            </form>
                                            <?php
                                        } else {
                                            echo "<label style='color:red; font-weight: bold; padding-top: 10px;'>Indisponível</label>";
                                        }
                                        ?>
                                        </div>
                                        </div>
                                    </td>
                                    <?php
                                } while ($linhas = mysqli_fetch_array($query));
                                ?>
                                <?php
                            }
                            ?>
                       
                        </tr>
                    </table>
            
        </main>
        
        <footer class="footer">
                                <div class="contato">
                                        <div class="con1"><a href=""><img class="insta" src="img/instagram.png"/></a><div class="text">@gravebrazil</div></div>
                                        <div class="con2"><a href=""><img class="insta" src="img/whatsapp.png"/></a></div>
                                        <div class="con3"><img class="insta" src="img/chamada-telefonica.png"/><div class="text">Telefone:(71)99192-8523</div></div>
                                        <div class="con4"><img class="insta" src="img/e-mail.png"/><div class="text">Email: gravestorebrasil@gmail.com</div></div>
                                    </div>
                            </footer>
        <script src="js/script1.js"></script>
    </body>
    <script src="js/jsCart.js"></script>
    

</html>

