<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Grave Store</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css"/>

    </head>
    <body>
        <header role="banner" class="header">
            <div class="logo">
                <a href="indexmenu.html"><img src="img/Grave Store Logo HD.png" alt="Imagem" title="logo" width="80" height="70"/></a>
            </div>
            <div class="hud">
                
               
                <div class="cadastrar">
                    <a href="Usuario/FormUsuario.php">cadastre-se</a></div>
             
                
                <div class="login">
                    <a href="Usuario/login.php">login</a>
                </div>
                <div class="car">
                    <a href=""><img src="img/Carrinho branco.png" width="20" height="20"/></a>
                </div>

            </div>
            <nav class="menu">

                <ul>

                    <li><a href="#">Camisas</a>

                    </li>
                    <li><a href="#">Calças</a>

                    </li>

                    <li><a href="#">Moletons</a>

                    </li>

                    <li><a href="#">Tênis</a>

                    </li>

                    <li><a href="Compra/ContatoO.php">Contato</a></li>
                </ul>
            </nav>
        </header>
        <section class="carrossel">
            <div class="conteudo">
                <div class="lista__cards">
                    <button class="lista__cards__btn btn btn-esquerda">
                        <div class="icone">
                            <svg>
                            <use xlink:href="#flexa-esquerda"></use>
                            </svg>
                        </div>
                    </button>

                    <div class="conteudo__cards">
                        <div class="card card--corrente">
                            <div class="imagem--card">
                                <img src="./img/ic-messi-bg.webp" />
                            </div>
                        </div>

                        <div class="card card--proximo">
                            <div class="imagem--card">
                                <img src="./img/ic-neymar-bg.webp" />
                            </div>
                        </div>

                        <div class="card card--anterior">
                            <div class="imagem--card">
                                <img src="img/ic-mbappe-bg.webp" />
                            </div>
                        </div>
                    </div>

                    <button class="lista__cards__btn btn btn--direita">
                        <div class="icone">
                            <svg>
                            <use xlink:href="#arrow-right"></use>
                            </svg>
                        </div>
                    </button>
                    </section>

                    <div class="listagem__informacoes">
                        <div class="conteudo__informacoes">
                            <div class="info informacoes__corrente">
                                <h1 class="texto nome">Argentina</h1>
                                <h4 class="texto localizacao">Messi</h4>
                                <p class="texto descricao">3 Gols</p>
                            </div>

                            <div class="info informacoes__seguinte">
                                <h1 class="texto nome">Brazil</h1>
                                <h4 class="texto localizacao">Neymar</h4>
                                <p class="texto descricao">1 Gol</p>
                            </div>

                            <div class="info informacoes__anterior">
                                <h1 class="texto nome">França</h1>
                                <h4 class="texto localizacao">Mbappe</h4>
                                <p class="texto descricao">5 gols</p>
                            </div>
                        </div>
                    </div>


                    <div class="conteudo__background">
                        <div class="conteudo__backgorund__imagem imagem--corrente">
                            <img src="img/ic-team-argentina.webp" alt="" />
                        </div>
                        <div class="conteudo__backgorund__imagem imagem--proxima">
                            <img src="img/ic-team-brazil.webp" alt="" />
                        </div>
                        <div class="conteudo__backgorund__imagem imagem--anterior">
                            <img src="img/ic-team-france.webp" alt="" />
                        </div>
                    </div>
                </div>

                <div class="conteudo__carregamento">
                    <div class="carregamento"></div>
                </div>


                <svg class="icones" style="display: none;">
                <symbol id="flexa-esquerda" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
                    <polyline points='328 112 184 256 328 400'
                              style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px' />
                </symbol>
                <symbol id="arrow-right" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
                    <polyline points='184 112 328 256 184 400'
                              style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px' />
                </symbol>
                </svg>
            </div>
            <main class="main">


                <div class="categorias">
                    <div ><a href=""><img src="img/5 Image Street Collage Ripped Paper Instagram Story_1.png"  class="cat1" title="place holder"/></a></div>
                    <div class="roupa1">Camisas</div>
                    <div class="procura1"><a>Procurar</a></div>
                    <div class="roupa2">Calças</div>
                    <div class="procura2"><a>Procurar</a></div>
                    <div ><a href=""><img src="img/download.png" class="cat2"/></a></div>
                    
                    <div ><a href=""><img src="img/download.png" class="cat3"/></a></div>
                    <div class="roupa3">Moletons</div>
                    <div class="procura3"><a>Procurar</a></div>
                    <div class="roupa4">Tenis</div>
                    <div class="procura4"><a>Procurar</a></div>
                    <div ><a href=""><img src="img/download.png" class="cat4"/></a></div> 
                </div>


            </main>
            <footer class="footer">
                <div class="contato">
                    <div class="con1"><a href=""><img class="insta" src="img/instagram.png"/></a><div class="text">@gravebrazil</div></div>
                    <div class="con2"><a href=""><img class="insta" src="img/whatsapp.png"/></a></div>
                    <div class="con3"><img class="insta" src="img/chamada-telefonica.png"/><div class="text">Telefone:(71)99192-8523</div></div>
                    <div class="con4"><img class="insta" src="img/e-mail.png"/><div class="text">Email: gravestorebrasil@gmail.com</div></div>
                </div>
            </footer>-->
            <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.3/gsap.min.js"></script>
            <script src="js/script.js"></script>
    </body>
</html>
