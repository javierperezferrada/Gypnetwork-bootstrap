<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Developed By M Abdur Rokib Promy">
    <meta name="author" content="cosmic">
    <meta name="keywords" content="Bootstrap 3, Template, Theme, Responsive, Corporate, Business">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>
      Gypnetwork | Nosostros
    </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/flexslider.css"/>
    <link href="assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/animate.css">
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>



    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
<script src="js/html5shiv.js">
</script>
<script src="js/respond.min.js">
</script>
<![endif]-->
  </head>

  <body>
    <?php 
    session_start();

    if (isset($_SESSION['loggedin']) & $_SESSION['loggedin'] == true)
    {
      include('header-admin.php'); 
    }else{
      include('header.php');
    }
    ?>
    <!--breadcrumbs start-->
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-4">
            <h1>
              Nosotros
            </h1>
          </div>
          <div class="col-lg-8 col-sm-8">
            <ol class="breadcrumb pull-right">
              <li>
                <a href="/">
                  Inicio
                </a>
              </li>
              <!--
              <li>
                <a href="#">
                  Pages
                </a>
              </li>
            -->
              <li class="active">
                Nosotros
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="about-carousel wow fadeInLeft">
            <div id="myCarousel" class="carousel slide">
              <!-- Carousel items -->
              <div class="carousel-inner">
                <div class="active item">
                  <img src="img/service3.jpg" alt="">
                  <div class="carousel-caption">
                    <p>
                      Un equipo integral de profesionales.
                    </p>
                  </div>
                </div>
                <div class="item">
                  <img src="img/service2.jpg" alt="">
                  <div class="carousel-caption">
                    <p>
                      Dedicados a solucionar los problemas de sus clientes.
                    </p>
                  </div>
                </div>
                <div class="item">
                  <img src="img/service5.jpg" alt="">
                  <div class="carousel-caption">
                    <p>
                      Gypnetwork Limitada
                    </p>
                  </div>
                </div>
              </div>
              <!-- Carousel nav -->
              <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                <i class="fa fa-angle-left">
                </i>
              </a>
              <a class="carousel-control right" href="#myCarousel" data-slide="next">
                <i class="fa fa-angle-right">
                </i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-7 about wow fadeInRight">

          <p>
            Somos una empresa especializada en el área de las Telecomunicaciones Digitales y la Seguridad, contamos con amplia experiencia en la instalación de cámaras con circuito cerrado de televisión, centrales de alarmas para el hogar y la oficina, configuraciones de equipos de red y centrales telefónicas.
          </p>
          <ul class="list-unstyled">
            <li>
              <i class="fa fa-angle-right pr-10">
              </i>
              Cámaras de vigilancia con Circuito Cerrado de TV
            </li>

            <li>
              <i class="fa fa-angle-right pr-10">
              </i>
              Cámaras de Vigilancia con tecnología IP
            </li>

            <li>
              <i class="fa fa-angle-right pr-10">
              </i>
              Centrales de alarma para el hogar y la industria.
            </li>

            <li>
              <i class="fa fa-angle-right pr-10">
              </i>
              Centrales Teléfonicas
            </li>

            <li>
              <i class="fa fa-angle-right pr-10">
              </i>
              Citofonía.
            </li>

            <li>
              <i class="fa fa-angle-right pr-10">
              </i>
              Control de acceso.
            </li>

          </ul>
          <blockquote>
            <p>
              Siempre buscando el profesionalismo en todos nuestros trabajos realizados.
            </p>
            <small>
              Gypnetwork Limitada
            </small>
          </blockquote>
        </div>
      </div>
      <div class="row">
        <div class="hiring">
          <h2 class="wow flipInX">
            Gypnetwork Ltda.
          </h2>
          <div class="col-lg-6 col-sm-6 about-hiring">
            <div class="icon-wrap ico-bg round-five wow zoomIn" data-wow-duration="1s" data-wow-delay=".1s">
              <i class="fa fa-user">
              </i>
            </div>
            <div class="content">
              <h3 class="title wow flipInX">
                Cámaras de seguridad
              </h3>
              <p>
                Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere.
              </p>
            </div>
          </div>
          <div class="col-lg-6 col-sm-6 about-hiring">
            <div class="icon-wrap ico-bg round-five wow zoomIn" data-wow-duration="1s" data-wow-delay=".3s">
              <i class="fa fa-user">
              </i>
            </div>
            <div class="content">
              <h3 class="title wow flipInX">
                Alarmas para el Hogar
              </h3>
              <p>
                Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere.
              </p>
            </div>
          </div>

          <div class="col-lg-6 col-sm-6 about-hiring">
            <div class="icon-wrap ico-bg round-five wow zoomIn" data-wow-duration="1s" data-wow-delay=".5s">
              <i class="fa fa-user">
              </i>
            </div>
            <div class="content">
              <h3 class="title wow flipInX">
                Centrales Telefónicas
              </h3>
              <p>
                Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere.
              </p>
            </div>
          </div>
          <div class="col-lg-6 col-sm-6 about-hiring">
            <div class="icon-wrap ico-bg round-five wow zoomIn" data-wow-duration="1s" data-wow-delay=".7s">
              <i class="fa fa-user">
              </i>
            </div>
            <div class="content">
              <h3 class="title wow flipInX">
                Redes Locales
              </h3>
              <p>
                Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere.
              </p>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="gray-box">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <!--testimonial start-->
            <div class="about-testimonial boxed-style about-flexslider ">
              <section class="slider wow fadeInRight">
                <div class="flexslider">
                  <ul class="slides about-flex-slides">
                    <li>
                      <div class="about-testimonial-image ">
                        <img alt="" src="img/person_1.png">
                      </div>
                      <a class="about-testimonial-author" href="#">
                        Javier Pérez
                      </a>
                      <span class="about-testimonial-company">
                        Programador
                      </span>
                      <div class="about-testimonial-content">
                        <p class="about-testimonial-quote">
                          Trabajar en Gypnetwork es muy interesante, ya que siempre estamos enfrentando nuevos desafíos en tecnologías, e implementado nuevas formas de utilizar los sistemas de información para solucionar los problemas de nuestros clientes.
                        </p>
                      </div>
                    </li>
                    <li>
                      <div class="about-testimonial-image ">
                        <img alt="" src="img/person_2.png">
                      </div>
                      <a class="about-testimonial-author" href="#">
                        Francisco Gonzalez
                      </a>
                      <span class="about-testimonial-company">
                        Instalador
                      </span>
                      <div class="about-testimonial-content">
                        <p class="about-testimonial-quote">
                          En Gypnetwork siempre estamos buscando cumplir con los mas altos estándares en todos nuestros trabajos de instalaciones de equipos de telecomunicaciones y seguridad, además de considerar siempre incorporar un compromiso de calidad con nuestros clientes.
                        </p>
                      </div>
                    </li>
                  </ul>
                </div>
              </section>
            </div>
            <!--testimonial end-->
          </div>
          <div class="col-lg-7" id="skillz">
            <h3 class="skills">
              Nuestras Habilidades
            </h3>

            <div class="skill_bar">
              <div class="skill_bar_progress skill_one">
                <p>
                  Instalación de cámaras de seguridad : 95%
                </p>
              </div>
            </div>

            <div class="skill_bar">
              <div class="skill_bar_progress skill_two">
                <p>
                  Configuración de centrales de alarma : 80%
                </p>
              </div>
            </div>

            <div class="skill_bar">
              <div class="skill_bar_progress skill_three">
                <p>
                  Configuracion de DVR : 98%
                </p>
              </div>
            </div>

            <div class="skill_bar">
              <div class="skill_bar_progress skill_four">
                <p>
                  Configuración de centrales teléfonicas: 70%
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="container" id="tourpackages-carousel">

      <div class="row">
        <div class="profile">
          <h2>
            Nuestro Equipo
          </h2>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="thumbnail wow fadeInUp" data-wow-delay=".1s">
              <img src="img/team/member1.png" alt="">
              <div class="caption">
                <h4>
                  Francisco Gonzalez
                </h4>
                <p>
                  Instalador Profesional con mas de 5 años de experiencia realizando distintos tipo de instalaciones de equipos de seguridad y telecomunicaciones.
                </p>
                <div class="team-social-link">
                  <a href="#">
                    <i class="fa fa-facebook">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-twitter">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-pinterest">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-linkedin">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-google-plus">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-github">
                    </i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="thumbnail wow fadeInUp" data-wow-delay=".3s">
              <img src="img/team/member2.png" alt="">
              <div class="caption">
                <h4>
                  Javier Pérez
                </h4>
                <p>
                  Programador de centrales teléfonicas y DVR.
                </p>
                <div class="team-social-link">
                  <a href="#">
                    <i class="fa fa-facebook">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-twitter">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-pinterest">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-linkedin">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-google-plus">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-github">
                    </i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!--
          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="thumbnail wow fadeInUp" data-wow-delay=".5s">
              <img src="img/team/member3.jpg" alt="">
              <div class="caption">
                <h4>
                  Thumbnail label
                </h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit
                </p>
                <div class="team-social-link">
                  <a href="#">
                    <i class="fa fa-facebook">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-twitter">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-pinterest">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-linkedin">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-google-plus">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-github">
                    </i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="thumbnail wow fadeInUp" data-wow-delay=".7s">
              <img src="img/team/member4.jpg" alt="">
              <div class="caption">
                <h4>
                  Thumbnail label
                </h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit
                </p>
                <div class="team-social-link">
                  <a href="#">
                    <i class="fa fa-facebook">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-twitter">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-pinterest">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-linkedin">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-google-plus">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-github">
                    </i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        -->
        </div>
        <!-- End row -->

      </div>
      <!-- End container -->
    </div>


    <!--container end-->

    <?php 
    session_start();

    if (isset($_SESSION['loggedin']) & $_SESSION['loggedin'] == true)
    {
      include('footer-admin.php'); 
    }else{
      include('footer.php');
    }
    ?>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js">
    </script>
    <script src="js/bootstrap.min.js">
    </script>
    <script type="text/javascript" src="js/hover-dropdown.js">
    </script>
    <script type="text/javascript" src="assets/bxslider/jquery.bxslider.js">
    </script>
    <script defer src="js/jquery.flexslider.js">
    </script>

    <script src="js/jquery.easing.min.js">
    </script>
    <script src="js/link-hover.js">
    </script>
    <script src="js/wow.min.js">
    </script>


    <!--common script for all pages-->
    <script src="js/common-scripts.js">
    </script>


    <script>
      $(document).ready(function() {
        $('#link-about').addClass('active');
      });

      wow = new WOW(
        {
          boxClass:     'wow',      // default
          animateClass: 'animated', // default
          offset:       0          // default
        }
      )
        wow.init();


      $(window).load(function() {
        $('.flexslider').flexslider({
          animation: "slide",
          start: function(slider) {
            $('body').removeClass('loading');
          }
        }
                                   );
      }
                    );




      $(window).scroll(function() {
        $('#skillz').each(function(){
          var imagePos = $(this).offset().top;
          var viewportheight = window.innerHeight;

          var topOfWindow = $(window).scrollTop();
          if (imagePos < topOfWindow+viewportheight) {
            $('.skill_bar').fadeIn('slow');
            $('.skill_one').animate({
              width:'95%'}
                                    , 2000);
            $('.skill_two').animate({
              width:'90%'}
                                    , 2000);
            $('.skill_three').animate({
              width:'70%'}
                                      , 1000);
            $('.skill_four').animate({
              width:'55%'}
                                     , 1000);
            $('.skill_bar_progress p').fadeIn('slow',function(){

            }
                                             );
          }
        }
                         );
      }
                      );




    </script>

  </body>
</html>
