<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trilhando com Chiquinho</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./assets/css/style.css">

</head>

<body>
    <!-- header section starts  -->
    <header>
        <a href="#" class="logo">
            <img src="./assets/img/Logo2.jpg" alt="trilhando com chiquinho" width="200" height="70">
        </a>
        <div class="navigation">
            <ul class="menu">
                <div class="close-btn"><i class="fas fa-times"></i></div>
                <li class="menu-item"><a href="home.php">Página Inicial</a></li>
                <li class="menu-item">
                    <a class="sub-btn" href="#">Trilhas<i class="fas fa-angle-down"></i></a>
                    <ul class="sub-menu">
                        <li class="sub-item"><a href="mg.php">Minas Gerais</a></li>
                        <li class="sub-item"><a href="rj.php">Rio de Janeiro</a></li>
                        <li class="sub-item"><a href="mg.php">São Paulo</a></li>
                    </ul>
                </li>
                <li class="menu-item"><a href="#reviews">Depoimentos</a></li>
                <li class="menu-item"><a href="sobre.php">Sobre</a></li>
                <li class="menu-item"><a href="contato.php">Contato</a></li>
            </ul>
        </div>
        <div class="menu-btn"><i class="fas fa-bars"></i></div>
    </header>
    <!-- header section ends  -->

    <!-- home section starts  -->
    <section class="home" id="home">

        <div class="content">
            <h3>Aventure-se </h3>
            <a href="#" class="btn">Saiba Mais</a>
        </div>

        <div class="controls">
            <span class="vid-btn active" data-src="./assets/img/ilhadopelado.mp4"></span>
            <span class="vid-btn" data-src="./assets/img/vid-2.mp4"></span>
            <span class="vid-btn" data-src="./assets/img/vid-3.mp4"></span>
            <span class="vid-btn" data-src="./assets/img/vid-4.mp4"></span>
            <span class="vid-btn" data-src="./assets/img/vid-5.mp4"></span>
        </div>

        <div class="video-container">
            <video src="./assets/img/ilhadopelado.mp4" id="video-slider" loop autoplay muted></video>
        </div>

    </section>

    <!-- home section ends -->

    <!-- packages section starts  -->

    <section class="packages" id="packages">

        <h1 class="heading">
            <span>D</span>
            <span>E</span>
            <span>S</span>
            <span>T</span>
            <span>A</span>
            <span>Q</span>
            <span>U</span>
            <span>E</span>
            <span>S</span>

        </h1>
        <div class="box-container">
            <div class="box">
                <h3>Pedra Selada </h3>
                <img src="./assets/img/pedra selada.jpg" alt="">
                <div class="content">
                    <p>Pedra Selada é um distrito do município de Resende, no estado do Rio de Janeiro. O distrito possui cerca de 2 300 habitantes e está situado ao norte do município.</p>
                    <a href="#" class="btn">Saiba Mais</a>
                </div>
            </div>
            <div class="box">
                <h3> Cachoeira da Usina </h3>
                <img src="./assets/img/Usina.jpg" alt="">
                <div class="content">
                    <p>Formada pelo Rio Bananal com aproximadamente 150 m de queda d'água - Localizada na Fazenda Cachoeira km. 12 da SP-247.</p>
                    <a href="trilhas.html" class="btn">Saiba Mais</a>
                </div>
            </div>
            <div class="box">
                <h3> Serrinha do Alambari </h3>
                <img src="./assets/img/serrinha.jpg" alt="">
                <div class="content">
                    <p>A Área de Proteção Ambiental da Serrinha do Alambari está situada no município de Resende, na encosta leste do Parque Nacional de Itatiaia, Serra da Mantiqueira, a oeste da estrada para Visconde de Mauá. </p>
                    <a href="trilhas.html" class="btn">Saiba Mais</a>
                </div>
            </div>

        </div>

    </section>
    <!-- packages section ends -->

    <!-- review section starts  -->

    <section class="review" id="review">

        <h1 class="heading">
            <span>D</span>
            <span>e</span>
            <span>p</span>
            <span>o</span>
            <span>i</span>
            <span>m</span>
            <span>e</span>
            <span>n</span>
            <span>t</span>
            <span>o</span>
            <span>s</span>
        </h1>

        <div class="swiper-container review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="box">
                        <img src="./assets/img/sabrina.jpg" alt="">
                        <h3>Sabrina Carvalho</h3>
                        <p>Ótimo atendimento e qualidade no momento da trilha, dá atenção, explica sobre o local. Excelente profissional.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="./assets/img/sabrina.jpg" alt="">
                        <h3>Sabrina Carvalho</h3>
                        <p>Ótimo atendimento e qualidade no momento da trilha, dá atenção, explica sobre o local. Excelente profissional.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="./assets/img/sabrina.jpg" alt="">
                        <h3>Sabrina Carvalho</h3>
                        <p>Ótimo atendimento e qualidade no momento da trilha, dá atenção, explica sobre o local. Excelente profissional.</p>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- review section ends -->

    <!-- home about section starts  -->

    <section class="about" id="about">
        <div class="image">
            <img src="./assets/img/me.jpg" alt="">
        </div>
        <div class="content">
            <h1 class="heading">
                <span>S</span>
                <span>o</span>
                <span>b</span>
                <span>r</span>
                <span>e</span>
            </h1>
            <p>Trilhando com Chiquinho, uma ideia que surgiu a partir das trilhas que realizava com meu amigocão, mostrar como a natureza é linda e que há lugares que não foram explorados é minha meta!</p>
            <a href="sobre.php" class="btn">Leia Mais</a>
        </div>

    </section>

    <!-- about section ends -->


    <!-- footer section  -->

    <section class="footer">

        <div class="box-container">
            <div class="box">
                <p>Guia de turismo Profissional certificado pela IRFJ/Resende, Cadastur atvio e Monitor de Ecoturismo.</p>
                <a href="#">
                    <img class="logo4" src="./assets/img/cadastur.png" alt="Cadastur">
                </a>
            </div>
            <div class="box">
                <h3>Siga-me</h3>
                <a href="https://api.whatsapp.com/send?phone=+5524999680186" target="_blank">
                    <img src="./assets/img/whatsapp.png" /></a>
                <a href="https://www.instagram.com/trilhandocomchiquinho/" target="_blank">
                    <img src="./assets/img/instagram.png" /></a>
                <a href="https://www.facebook.com/Trilhando-Com-Chiquinho-107333741306595" target="_blank">
                    <img src="./assets/img/facebook.png" /></a>
                <a href="https://twitter.com/tcomchiquinho" target="_blank">
                    <img src="./assets/img/twitter.png" /></a>
                <h3>Newsletter</h3>
                <p>Se inscreva para receber as atualizações!</p>
                <form action="">
                    <input type="email" name="" placeholder="Entre com seu email" class="email" id="">
                    <input type="submit" value="subscribe" class="btn">
                </form>
            </div>
        </div>
        </div>

        <h1 class="credit"> Criado por Sabrina Carvalho | Todos os direitos autorais reservados. </h1>

    </section>


    <!-- custom js file link  -->
    <script src="./assets/js/script.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>





</body>

</html>