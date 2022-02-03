<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trilhando com Chiquinho</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./assets/css/style.css">


</head>

<body>
    <!-- header section starts  -->
    <header>
        <div id="menu-bar" class="fas fa-bars"></div>
        <a href="index.html">
            <img class="logo" src="./assets/img/Logo2.jpg" alt="Trilhando com Chiquinho" width="150" height="70">
        </a>
        <nav class="navbar">
            <a href="home.php">Página Inicial</a>
            <a href="trilhas.php">Trilhas</a>
            <a href="sobre.php">Sobre</a>
            <a href="contato.php">Contato</a>
        </nav>

        <div class="icons">
            <i class="fas fa-user" id="login-btn"></i>
            <i class="fas fa-search" id="search-btn"></i>
        </div>

        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here...">
            <label for="search-bar" class="fas fa-search"></label>
        </form>

    </header>

    <!-- contact section starts  -->

    <section class="contact" id="contact">

        <div class="row">
            <form method="post" action="contato.php">
                <h1 class="heading">
                    <span>C</span>
                    <span>o</span>
                    <span>n</span>
                    <span>t</span>
                    <span>a</span>
                    <span>t</span>
                    <span>o</span>
                </h1>
                <div class="inputBox">
                    <label class="label">Nome *</label>
                    <input name="nome" class="input" type="text" placeholder="Seu nome" required>
                </div>
                <div class="inputBox">
                    <label class="label">Email *</label>
                    <input name="email" type="email" placeholder="Seu email" required>
                </div>
                <div class="inputBox">
                    <div class="label">
                        <label class="label">Assunto *</label>
                        <select name="assunto">
                            <option value="0">Selecione o assunto</option>
                            <option value="Informação">Informação</option>
                            <option value="Elogio">Elogio</option>
                            <option value="Reclamação">Reclamação</option>
                            <option value="Sugestão">Sugestão</option>
                            <option value="Outros">Outros</option>
                        </select>
                    </div>
                </div>
                <div class="inputBox">
                    <label class="label">Mensagem *</label>
                    <textarea name="mensagem" class="textarea" placeholder="Deixe sua mensagem" maxlength="2000"></textarea>
                </div>
                <input type="submit" class="btn" value="Enviar" onclick="funcao1()">
            </form>
            <div class="image">
                <img src="./assets/img/familia.jpg" alt="">
            </div>
        </div>

    </section>

    <!-- contact section ends -->
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

      <!-- retorno quando enviar mensagem pelo formulário  -->
    <script>
        function funcao1() {
            alert("Mensagem enviada com sucesso. Em breve retornaremos o contato!");
        }
    </script>

    <!-- custom js file link  -->
    <script src="./assets/js/script.js"></script>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>



</body>

</html>