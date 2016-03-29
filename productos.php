    
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php
    header('Content-Type: text/html; charset=UTF-8'); 
    ?>

    <link type="text/css" rel="stylesheet" href="stylesheet.css"/>
    <meta name="author" content="Javier Perez Ferrada" charset="utf-8">
    <meta name="keywords" content="instalacion, camaras, cctv, lan, redes, wifi,revisa tus camaras en tu dispositivo, inteligente, telefono, valdivia, region de los rios, los rios, cabaÃ±a segura, seguridad, servicios,  cableado estructurado, categoria 6e, certificacion"/>
    <meta name="description" content="instalacion de camaras de seguridad en valdivia" />
    <script src="jquery-1.11.1.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="funciones.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-55694475-1', 'auto');
      ga('send', 'pageview');

    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>
      Gypnetwork | Productos
    </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet">-->

    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/flexslider.css"/>
    <link href="assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="assets/owlcarousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/owlcarousel/owl.theme.css">

    <link href="css/superfish.css" rel="stylesheet" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'> -->


    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="css/component.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="css/parallax-slider/parallax-slider.css" />
    <script type="text/javascript" src="js/parallax-slider/modernizr.custom.28468.js">
    </script>

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



    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Nuestros principales productos</p>
                <div class="list-group">
                    <a href="#" class="list-group-item active">Cámaras</a>
                    <a href="#" class="list-group-item">Alarmas</a>
                    <a href="#" class="list-group-item">Redes</a>
                </div>
            </div>

            <div class="col-md-9">

                <?php
                mysql_set_charset('utf8');
                // Conectando, seleccionando la base de datos
                $link = mysql_connect('localhost', 'gypnetwo_admin', 'k6yF7vc5l(3y')
                    or die('No se pudo conectar: ' . mysql_error());
                mysql_select_db('gypnetwo_gypnetwork') or die('No se pudo seleccionar la base de datos');

                // Realizar una consulta MySQL
                $query = 'SELECT valor_total,nombre,descripcion,imagen FROM Producto';

                $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

                // Imprimir los resultados en HTML
                while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
                    echo '<div class="thumbnail"><img class="img-responsive" src="'.$line['imagen'].'" alt=""><div class="caption-full">
                        <h4 class="pull-right">$'.number_format($line["valor_total"], 0, ",", ".").'</h4>
                        <h4><a href="#">'.$line['nombre'].'</a>
                        </h4>
                        <p>'.$line['descripcion'].'</p>
                    </div>
                    <!--
                    <div class="ratings">
                        <p class="pull-right">3 reviews</p>
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            4.0 estrellas
                        </p>
                    </div>
                  -->
                </div>';

                }
                
                // Liberar resultados
                mysql_free_result($result);

                // Cerrar la conexión
                mysql_close($link);
                ?>

            </div>

        </div>

    </div>
    <!-- /.container -->


    <?php include('footer.php'); ?>


 <!-- js placed at the end of the document so the pages load faster
<script src="js/jquery.js">
</script>
-->
    <script src="js/jquery-1.8.3.min.js">
    </script>
    <script src="js/bootstrap.min.js">
    </script>
    <script type="text/javascript" src="js/hover-dropdown.js">
    </script>
    <script defer src="js/jquery.flexslider.js">
    </script>
    <script type="text/javascript" src="assets/bxslider/jquery.bxslider.js">
    </script>

    <script type="text/javascript" src="js/jquery.parallax-1.1.3.js">
    </script>
    <script src="js/wow.min.js">
    </script>
    <script src="assets/owlcarousel/owl.carousel.js">
    </script>

    <script src="js/jquery.easing.min.js">
    </script>
    <script src="js/link-hover.js">
    </script>
    <script src="js/superfish.js">
    </script>
    <script type="text/javascript" src="js/parallax-slider/jquery.cslider.js">
    </script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#link-products').addClass('active');
      });
      $(function() {

        $('#da-slider').cslider({
          autoplay    : true,
          bgincrement : 100
        });

      });
    </script>



    <!--common script for all pages-->
    <script src="js/common-scripts.js">
    </script>

    <script type="text/javascript">
      jQuery(document).ready(function() {


        $('.bxslider1').bxSlider({
          minSlides: 5,
          maxSlides: 6,
          slideWidth: 360,
          slideMargin: 2,
          moveSlides: 1,
          responsive: true,
          nextSelector: '#slider-next',
          prevSelector: '#slider-prev',
          nextText: 'Onward →',
          prevText: '← Go back'
        });

      });


    </script>


    <script>
      $('a.info').tooltip();

      $(window).load(function() {
        $('.flexslider').flexslider({
          animation: "slide",
          start: function(slider) {
            $('body').removeClass('loading');
          }
        });
      });

      $(document).ready(function() {

        $("#owl-demo").owlCarousel({

          items : 4

        });

      });

      jQuery(document).ready(function(){
        jQuery('ul.superfish').superfish();
      });

      new WOW().init();


    </script>
  </body>
</html>
