<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="Thales Gabriel">
  <link rel="stylesheet" href="css/style.css ">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/bootstrap.css">

  <title>Sistema Advogacia</title>


  <!-- icone -->
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
  <link rel="icon" href="img/favicon.ico" type="image/x-icon" />

  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/style.css">


</head>

<body>

  <!-- cabeçalho navbar com menu hamburguer e sem -->
  <header class="section page-header rd-navbar-transparent-wrap">
    <!--RD Navbar-->
    <div class="rd-navbar-wrap">
      <nav class="rd-navbar rd-navbar-transparent" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="20px" data-xl-stick-up-offset="20px" data-xxl-stick-up-offset="20px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
        <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
        <div class="rd-navbar-aside-outer rd-navbar-collapse">
          <div class="rd-navbar-aside">
            <!-- infos nav bar -->
            <div class="rd-navbar-info">
              <!-- telefone com api wpp -->
              <div class="icon novi-icon mdi mdi-phone"></div><a href="http://api.whatsapp.com/send?1=pt_BR&phone=5512991456968" title="12 991456968">12 9 9145-6968</a>
            </div>
            <ul class="list-lined">
              <li><a href="../sistema">Log in</a></li>

            </ul>
          </div>
        </div>
        <div class="rd-navbar-main-outer">
          <div class="rd-navbar-main-inner">
            <div class="rd-navbar-main">
              <!--RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!--RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!--RD Navbar Brand-->
                <!-- logo na nav bar -->
                <div class="rd-navbar-brand">
                  <!--Brand--><a class="brand" href="index.php"><img class="brand-logo-dark" src="images/logo-default-293x44.png" alt="" width="146" height="22" /><img class="brand-logo-light" src="img/Logo metade normal.png" alt="" width="155" height="22" /></a>
                </div>
              </div>
              <div class="rd-navbar-main-element">
                <div class="rd-navbar-nav-wrap">
                  <!-- itens do menu  -->
                  <ul class="rd-navbar-nav">
                    <li class="rd-nav-item active"><a class="rd-nav-link" href="index.php">Home</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="#servicos">Serviços</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="#sobre">Sobre</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="#contatos">Contatos</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <!-- seção do banner no topo do site -->

  <!-- o delay de cada imagem e texto esta no html no data-caption-delay -->
  <section class="section swiper-container swiper-slider swiper-slider-1 context-dark" data-loop="true" data-autoplay="5000" data-simulate-touch="false">


    <div class="swiper-wrapper">
      <!-- para adicionar mais slyde basta copiar esta DIV "swiper-slide" -->
      <div class="swiper-slide" data-slide-bg="img/banners/01.jpg">
        <div class="swiper-slide-caption section-lg">
          <div class="container">
            <div class="row">

              <!-- Texto 1 e Imagem 1 do carrousel -->
              <div class="col-md-9 col-lg-7 offset-md-1 offset-xxl-0">
                <h1><span class="d-block" data-caption-animate="fadeInUp" data-caption-delay="100">HVF Advocacia</span><span class="d-block text-light" data-caption-animate="fadeInUp" data-caption-delay="200">Profissionais Qualificados</span></h1>
                <p class="lead" data-caption-animate="fadeInUp" data-caption-delay="350">Coloque aqui o texto com o lema da sua empresa!!</p>
                <div class="button-wrap-default" data-caption-animate="fadeInUp" data-caption-delay="450"><a class="button button-secondary-text" href="#">Veja mais</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Texto 2 e Imagem 2 do carrousel -->
      <div class="swiper-slide" data-slide-bg="img/banners/02.jpg">
        <div class="swiper-slide-caption section-lg">
          <div class="container">
            <div class="row">
              <div class="col-md-9 col-lg-7 offset-md-1 offset-xxl-0">
                <h1><span class="d-block" data-caption-animate="fadeInUp" data-caption-delay="100">Lutaremos por você</span><span class="d-block text-light" data-caption-animate="fadeInUp" data-caption-delay="200">Os melhores Profissionais</span></h1>
                <p class="lead" data-caption-animate="fadeInUp" data-caption-delay="350">Entre em contato conosco e te daremos toda assistência necessária!</p>
                <div class="button-wrap-default" data-caption-animate="fadeInUp" data-caption-delay="450"><a class="button button-secondary-text" href="#">Contate-nos</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Texto 3 e Imagem 3 do carrousel -->
      <div class="swiper-slide" data-slide-bg="img/banners/03.png">
        <div class="swiper-slide-caption section-lg">
          <div class="container">
            <div class="row">
              <div class="col-md-9 col-lg-7 offset-md-1 offset-xxl-0">
                <h1><span class="d-block" data-caption-animate="fadeInUp" data-caption-delay="100">#Diretos Trabalhista</span><span class="d-block text-light" data-caption-animate="fadeInUp" data-caption-delay="200">Os Melhores Profissionais</span></h1>
                <p class="lead" data-caption-animate="fadeInUp" data-caption-delay="350">Especialistas que vão te dar todo suporte e apoio!</p>
                <div class="button-wrap-default" data-caption-animate="fadeInUp" data-caption-delay="450"><a class="button button-secondary-text" href="#">Veja Mais</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Swiper Pagination-->
    <div class="swiper-pagination-wrap">
      <div class="container">
        <div class="row">
          <div class="col-md-9 col-lg-7 offset-md-1 offset-xxl-0">
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- seção Serviços -->
  <!-- para adicionar mais so diminuir o col-md do bootstrap e copiar mais a div do conteudo -->

  <section  id="servicos" class="section section-sm section-sm-bottom-100 bg-primary">
    <div class="container">
      <div class="row row-30">
        <div class="col-md-4 wow fadeInUp">
          <div class="box-icon-2">
            <div class="icon novi-icon mercury-icon-briefcase"></div>
            <h5 class="title">Diretos Trabalhistas</h5>
            <p class="text">Aqui você vai encontrar os profissionais mais qualificados do mercado para poder te atender em tudo o que precisar, são especialistas em causas trabalhistas.</p>
          </div>
        </div>
        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
          <div class="box-icon-2">
            <div class="icon novi-icon mercury-icon-chart"></div>
            <h5 class="title">Direito Criminal</h5>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque molestias quidem veritatis inventore excepturi ut mollitia alias ab iusto nam beatae reiciendis.</p>
          </div>
        </div>
        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.4s">
          <div class="box-icon-2">
            <div class="icon novi-icon mercury-icon-house"></div>
            <h5 class="title">Vara da Família</h5>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque molestias quidem veritatis inventore excepturi ut mollitia alias ab iusto nam beatae reiciendis.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- seção missão -->

  <section class="section bg-default section-md">
    <div class="container">
      <div class="row row-30">
        <div class="col-md-6">
          <h2 class="title-icon"><span class="icon icon-default mercury-icon-target-2"></span><span>Nossa <span class="text-light">Missão</span></span></h2>
          <p class="big">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque molestias quidem veritatis inventore excepturi ut mollitia alias ab iusto nam beatae reiciendis</p>
          <ul class="list-marked-2">
            <li>Fazer o possível para satisfazer nossos clientes</li>
            <li>Sharing professional experience in tax management</li>
            <li>Offering full support to all our clients</li>
          </ul>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-6">
              <!--Box counter-->
              <div class="box-counter">
                <div class="box-counter-main">
                  <div class="counter">750</div>
                </div>
                <p class="box-counter-title">Clientes Satisfeitos</p>
              </div>
            </div>
            <div class="col-6">
              <!--Box counter-->
              <div class="box-counter">
                <div class="box-counter-main">
                  <div class="counter">82</div>
                </div>
                <p class="box-counter-title">Nossa Equipe</p>
              </div>
            </div>
            <div class="col-6">
              <!--Box counter-->
              <div class="box-counter">
                <div class="box-counter-main">
                  <div class="counter">243</div>
                </div>
                <p class="box-counter-title">Casos de Sucesso</p>
              </div>
            </div>
            <div class="col-6">
              <!--Box counter-->
              <div class="box-counter">
                <div class="box-counter-main">
                  <div class="counter">99</div><span>%</span>
                </div>
                <p class="box-counter-title">Índice de Satisfação</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- seção historia -->
  <section id="sobre"  class="section section-lg bg-default">
    <div class="container">
      <h2><span class="text-light">Sua</span> Historia</h2>
      <div class="row row-30 justify-content-xl-between">
        <div class="col-md-6 col-xl-6">
          <p class="big">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a fermentum turpis. Nulla metus diam, feugiat ac lectus vitae, tempus porttitor sem. Vestibulum non lacus vulputate, placerat ligula ut, dignissim tortor. Nulla facilisi.</p>
          <div class="box-shadow-2">
            <div class="box-shadow-header">
              <div class="unit flex-column flex-md-row">
                <div class="unit-left">
                  <div class="heading-5">1996</div>
                </div>
                <div class="unit-body">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a fermentum turpis. Nulla metus diam, feugiat ac lectus vitae, tempus porttitor sem. Vestibulum non lacus vulputate, placerat</p>
                </div>
              </div>
            </div><img class="img-responsive" src="img/escritorio.jpg " alt="" width="569" height="169" />
          </div>
        </div>
        <div class="col-md-6 col-xl-5">
          <ul class="list-lg">
            <li>
              <div class="heading-5">1999</div>
              <p class="p-offset-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a fermentum turpis. Nulla metus diam, feugiat ac lectus vitae, tempus porttitor sem. Vestibulum non lacus vulputate, placerat ligula ut, dignissim tortor.</p>
            </li>
            <li>
              <div class="heading-5">2001</div>
              <p class="p-offset-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a fermentum turpis. Nulla metus diam, feugiat ac lectus vitae, tempus porttitor sem. Vestibulum non lacus vulputate, placerat ligula ut, dignissim tortor. Nulla facilisi. Curabitur accumsan metus mauris, non iaculis magna pulvinar sit amet. Aenean sagittis purus non egestas eleifend.</p>
            </li>
            <li>
              <div class="heading-5">2010</div>
              <p class="p-offset-1">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
            </li>
            <!-- botão  -->
            <li><a class="button button-primary" href="http://google.com" target="_blank">Read more</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>


  <!-- seção Principios-->

  <section class="section section-lg bg-gray-100">
    <div class="container text-center text-lg-left">
      <h2><span class="text-light text-secondary">Nosos</span> Princípios</h2>
      <div class="row row-30 number-counter-2">
        <div class="col-md-4">
          <div class="box-numbered-left unit">
            <div class="unit-left">
              <div class="index-counter"></div>
            </div>
            <div class="unit-body">
              <h5 class="title">Verdade</h5>
              <div class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a fermentum turpis. Nulla metus diam, feugiat ac lectus vitae, tempus porttitor sem. Vestibulum non lacus vulputate, placerat ligula ut, dignissim tortor.</div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box-numbered-left unit">
            <div class="unit-left">
              <div class="index-counter"></div>
            </div>
            <div class="unit-body">
              <h5 class="title">Integridade</h5>
              <div class="content">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box-numbered-left unit">
            <div class="unit-left">
              <div class="index-counter"></div>
            </div>
            <div class="unit-body">
              <h5 class="title">Honestidade</h5>
              <div class="content">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- feedback sobre os cliente -->

  <section class="section section-lg bg-gray-800" id="clientes">
    <div class="container text-center text-xl-left">
      <h2>Nossos <span class="text-light">Feedbacks</span></h2>
      <div class="owl-carousel owl-carousel-4 text-center" data-items="1" data-sm-items="3" data-md-items="4" data-lg-items="5" data-xl-items="6" data-dots="true" data-nav="false" data-stage-padding="15" data-loop="false" data-margin="30" data-mouse-drag="false">
        <div class="item"><a class="link-image"><img src="img/profiles/clienteex.jpg" alt="" width="150" height="35" /></a>
          <p>"Fiquei muito satisfeito com tudo que essa equipe maravilhosa fez por mim, atendeu muito bem minhas espectativas!!"
        </div>

        <div class="item"><a class="link-image"><img src="img/profiles/clienteex.jpg" alt="" width="150" height="35" /></a>
          <p>"Fiquei muito satisfeito com tudo que essa equipe maravilhosa fez por mim, atendeu muito bem minhas espectativas!!"
        </div>


        <div class="item"><a class="link-image"><img src="img/profiles/clienteex.jpg" alt="" width="150" height="35" /></a>
          <p>"Fiquei muito satisfeito com tudo que essa equipe maravilhosa fez por mim, atendeu muito bem minhas espectativas!!"
        </div>


        <div class="item"><a class="link-image"><img src="img/profiles/clienteex.jpg" alt="" width="150" height="35" /></a>
          <p>"Fiquei muito satisfeito com tudo que essa equipe maravilhosa fez por mim, atendeu muito bem minhas espectativas!!"
        </div>


        <div class="item"><a class="link-image"><img src="img/profiles/clienteex.jpg" alt="" width="150" height="35" /></a>
          <p>"Fiquei muito satisfeito com tudo que essa equipe maravilhosa fez por mim, atendeu muito bem minhas espectativas!!"
        </div>


        <div class="item"><a class="link-image"><img src="img/profiles/clienteex.jpg" alt="" width="150" height="35" /></a>
          <p>"Fiquei muito satisfeito com tudo que essa equipe maravilhosa fez por mim, atendeu muito bem minhas espectativas!!"
        </div>


        <div class="item"><a class="link-image"><img src="img/profiles/clienteex.jpg" alt="" width="150" height="35" /></a>
          <p>"Fiquei muito satisfeito com tudo que essa equipe maravilhosa fez por mim, atendeu muito bem minhas espectativas!!"
        </div>
      </div>
    </div>
  </section>

  <!-- nossa equipe -->

  <section class="section section-lg bg-default">
    <div class="container text-center text-lg-left">
      <h2><span class="text-light">Nossa</span> Equipe</h2>
      <div class="row row-40">

        <!-- card do advogado -->
        <div class="col-md-4">
          <div class="team-box-left">
            <div class="team-meta unit align-items-center">
              <div class="unit-left"><img class="img" src="images/testimonials-1-138x138.jpg" alt="" width="138" height="69" />
              </div>
              <div class="unit-body">
                <h5 class="title">Kate White</h5>
                <div class="subtitle">Advogada</div>
              </div>
            </div>
            <div class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a fermentum turpis. Nulla metus diam, feugiat ac lectus vitae, tempus porttitor sem. Vestibulum non lacus vulputate, placerat ligula ut, dignissim tortor.</div>
          </div>
        </div>

        <!-- card do advogado -->
        <div class="col-md-4">
          <div class="team-box-left">
            <div class="team-meta unit align-items-center">
              <div class="unit-left"><img class="img" src="images/testimonials-2-138x138.jpg" alt="" width="138" height="69" />
              </div>
              <div class="unit-body">
                <h5 class="title">Victor Jackson</h5>
                <div class="subtitle">Consultor Financeiro</div>
              </div>
            </div>
            <div class="content">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
          </div>

          <!-- card do advogado -->
        </div>
        <div class="col-md-4">
          <div class="team-box-left">
            <div class="team-meta unit align-items-center">
              <div class="unit-left"><img class="img" src="images/testimonials-3-138x138.jpg" alt="" width="138" height="69" />
              </div>
              <div class="unit-body">
                <h5 class="title">Olivia Smith</h5>
                <div class="subtitle">Advogada</div>
              </div>
            </div>
            <div class="content">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima.</div>
          </div>
        </div>
      </div><a class="button button-primary" href="#">Botão Disponivel</a>
    </div>
  </section>

  <!-- contatos -->

  <section class="page-section" id="contatos">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">

          <h2 class="section-heading text-uppercase ">Contate-nos</h2>
          <h3 class="section-subheading text-muted text-primary">Dúvidas? Preencha abaixo
            ou veja nas <small><i class="far fa-question-circle mr-1"></i><span class="text-muted mr-4"><a data-toggle="modal" href="#modalFaq" title="Clique para ver as perguntas frequentes">Perguntas Frequentes </a> </small></span>

          </h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form action="enviar.php" method="post" id="contactForm" name="sentMessage">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="nome" name="nome" type="text" placeholder="Seu Nome *" required>
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" name="email" type="email" placeholder="Seu Email *" required>
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="telefone" name="telefone" type="tel" placeholder="Seu WhatsApp - Opcional">

                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="mensagem" name="mensagem" placeholder="Sua Mensagem *" required></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="" class="btn btn-primary btn-xl text-uppercase" type="submit">Enviar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>


  <!-- rodapé -->

  <footer class="section footer-classic">
    <div class="footer-inner-1">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-3 mb-4">
            <span class="copyright"><i class="far fa-envelope mr-1"></i>contato@thalesartedigital.com</span><br>

          </div>
          <div class="col-md-6" align="center">
            <ul class="list-inline social-buttons">
              <!-- blog -->
              <li class="list-inline-item">
                <a href="blog.php" target="_blank" title="Ir para o Blog">
                  <div class="icon novi-icon mdi mdi-blogger"></div>
                </a>
              </li>
              <!-- facebook -->
              <li class="list-inline-item">
                <a href="https://www.facebook.com/" target="_blank" title="Nossa Página no Facebbok">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <!-- instagram -->
              <li class="list-inline-item">
                <a href="https://www.instagram.com/" target="_blank" title="Nosso Instragram">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
            </ul>
            <br>
            <small>
              <p class="direitos-rodape">@Todos os direitos reservados - <a class="text-dark" data-toggle="modal" href="#modalTermos">Termos de Uso</a></p>
            </small>
          </div>
          <div class="col-md-3">
            <ul class="list-inline">

              <li class="list-inline-item">
                Thales Gabriel - <a class="text-muted" href="http://api.whatsapp.com/send?1=pt_BR&phone=5512991456968" alt="31 97527-5084" target="_blank"><i class="fab fa-whatsapp mr-1"></i>12 9 9145-6968</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-inner-2">
      <div class="container">
        <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span>. Todos os Direitos Reservados. Desenvolvido por <a href="https://www.thalesartedigital.com" target="_blank" >Thales Gabriel</a></p>
      </div>
    </div>
  </footer>






  <!-- javascript bootstrap -->
  <script src="js/core.min.js" crossorigin="anonymous"></script>
  <script src="js/script.js" crossorigin="anonymous"></script>
</body>

</html>