
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="css/styleCard.css"/>
        <link rel="stylesheet" href="css/styleCart1.css"/>
        
        
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
                <a href="login.php">Login</a>
            </div>
            <div class="car">
                <a><img src="img/Carrinho branco.png" width="20px" height="20px"/></a>
            </div>

        </header>
        
        <nav class="menu" id="navbar">
            <ul>
                <li><a href="carrinho.php">Camisas</a></li>
                <li><a href="carrinho.php">Calças</a></li>
                <li><a href="carrinho.php">Moletons</a></li>
                <li><a href="carrinho.php">Tênis</a></li>
                <li><a href="carrinho.php">Contato</a></li>
            </ul>
        </nav>
        
        <main class="main"  >
            
            <div class="modal">
                <div class="content">
                    <aside>
            <div class="cart">
                <h1>Carrinho</h1>
                <div class="colum"><div>Nome</div><div>Qtde</div><div>Preço</div></div>
                <ul class="cart-items"></ul>
                <p class="total-price">Total: R$0.00</p>
                <form method="get" action="Produto/finalizarCompra.php">
                                                <input type="hidden" name="produto" value="<?php echo $linhas['id_produto']; ?>">
                                                <input type="submit" value="Comprar" class="btn btn-default" name="addCarrinho"/>
                                            </form>
            </div>
        </aside>
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
                                            <img id="img--card" src="<?php echo 'img/Roupas/' . $linhas['imagem']; ?>">
                                            
                                            
                                        <div id="comentarios--img--card">
                                        <br><?php echo $linhas["nome"]; ?><br>
                                            <?php echo $linhas["preco"]; ?><br>
                                            <button class="add-to-cart" data-name="<?= $linhas["nome"]?>" data-price="<?= $linhas["preco"]?>">🛒</button>
                                        <?php
                                        if ($linhas["quantidade"] > 0) {
                                            ?>
                                            
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.3/gsap.min.js"></script>
        <script src="js/jsModal.js"></script>
        <script src="js/jsCart.js"></script>
    </body>
    

</html>

