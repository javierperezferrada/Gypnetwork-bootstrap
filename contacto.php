<!DOCTYPE html>
<html lang="es">
  <head>
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
      Gypnetwork | Contacto
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

    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js"
    type="text/javascript"></script>
    <script src="js/main.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js">
    </script>
    <script src="js/respond.min.js">
    </script>
    <![endif]-->
    <style>
        .black_overlay{
            display: none;
            position: absolute;
            top: 0%;
            left: 0%;
            width: 100%;
            height: 100%;
            background-color: black;
            z-index:1001;
            -moz-opacity: 0.8;
            opacity:.80;
            filter: alpha(opacity=80);
        }
        .white_content {
            display: none;
            position: absolute;
            top: 25%;
            left: 25%;
            width: 61%;
            height: 7%;
            padding: 16px;
            border: 1px solid white;
            background-color: white;
            z-index:1002;
            overflow: auto;
        }
        #buttom-accept{
          margin: 0 auto;
          width: 30px;
        }
        #light-response{
          z-index:1003;
        }
    </style>
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
              Contacto
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
                Contacto
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!--breadcrumbs end-->


    <div class="container">

      <div class="row">
        <div class="col-lg-5 col-sm-5 address">
          <section class="contact-infos">
            <h4>
              Contactos
            </h4>
            <p>
              <i class="icon-phone">
              </i>
              Javier Pérez Ferrada<br>
              +56 9 90699373 <br>
              jperez@gypnetwork.cl
            </p>
            <p>
              <i class="icon-phone">
              </i>
              Francisco Gonzalez Ojeda<br>
              +56 9 92653875  <br>
              fgonzalez@gypnetwork.cl
            </p>
          </section>
          <section class="contact-infos">
            <h4 class="title custom-font text-black">
              Direccion
            </h4>
            <address>
              San Pedro 5 #712,
              <br>
              Valdivia, Chile
            </address>
          </section>
        </div>
        <div class="col-lg-7 col-sm-7 address">
          <h4>
            ESCRÍBANOS PARA QUE PODEMOS SABER DE USTED
          </h4>
          <div class="contact-form">
            <form role="form" method="post" id='register'>
              <div class="form-group">
                <label for="name">
                  Nombre
                </label>
                <input type="text" placeholder="" name="name" id='name' class="form-control">
              </div>
              <div class="form-group">
                <label for="email">
                  Email
                </label>
                <input type="text" placeholder="" name="email" id='email' class="form-control">
              </div>
              <div class="form-group">
                <label for="phone">
                  Telefono
                </label>
                <input type="text" name="phone" id='phone' class="form-control">
              </div>
              <div class="form-group">
                <label for="message">
                  Mensaje
                </label>
                <textarea placeholder="" name="message" rows="5" class="form-control">
                </textarea>
              </div>
              <button class="btn btn-info" type="submit">
                Enviar
              </button>
            </form>

          </div>
        </div>
      </div>

    </div>
    <!--container end-->

    <!--google map start
    <div class="contact-map">
      <div id="map-canvas" style="width: 100%; height: 400px">
      </div>
    </div>
    <!--google map end-->


    <div class="container">
      <div class="row">
        <div class='col-md-offset-2 col-md-8 text-center'>
          <h2>
            Profesionalismo, responsabilidad y garantía en todos nuestros trabajos.-
          </h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-offset-2 col-md-8 mar-b-30">
          <div class="carousel slide" data-ride="carousel" id="quote-carousel">
            <!-- Bottom Carousel Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#quote-carousel" data-slide-to="0" class="active">
              </li>
              <li data-target="#quote-carousel" data-slide-to="1">
              </li>
              <li data-target="#quote-carousel" data-slide-to="2">
              </li>
            </ol>

            <!-- Carousel Slides / Quotes -->
            <div class="carousel-inner">

              <!-- Quote 1 -->
              <div class="item active">
                <blockquote>
                  <div class="row">
                    <div class="col-sm-3 text-center">
                      <img class="img-circle" src="img/person_1.png" style="width: 100px;height:100px;" alt="">
                    </div>
                    <div class="col-sm-9">
                      <p>
                        Nuestro equipo se pondrá en contacto contigo dentro de las próximas 24 horas.
                      </p>
                      <small>
                        Soluciones integrales en telecomunicaciones digitales.
                      </small>
                    </div>
                  </div>
                </blockquote>
              </div>
              <!-- Quote 2 -->
              <div class="item">
                <blockquote>
                  <div class="row">
                    <div class="col-sm-3 text-center">
                      <img class="img-circle" src="img/person_2.png" style="width: 100px;height:100px;" alt="">
                    </div>
                    <div class="col-sm-9">
                      <p>
                        GyPNetwork Limitada
                      </p>
                      <small>
                        Valdivia
                      </small>
                    </div>
                  </div>
                </blockquote>
              </div>
              <!-- Quote 3 -->
              <div class="item">
                <blockquote>
                  <div class="row">
                    <div class="col-sm-3 text-center">
                      <img class="img-circle" src="img/person_3.png" style="width: 100px;height:100px;" alt="">
                    </div>
                    <div class="col-sm-9">
                      <p>
                        Domotica, Seguridad
                      </p>
                      <small>
                        GyPNetwork Ltda.
                      </small>
                    </div>
                  </div>
                </blockquote>
              </div>
            </div>


          </div>

        </div>
      </div>
    </div>
    <!-- popup respuesta mensaje contacto -->
    <div id="light" class="white_content">
      <div id='light-response'></div> 
      <div id='buttom-accept'><a href = "/" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'" class="btn btn-info">Aceptar</a></div>
    </div>
    <div id="fade" class="black_overlay"></div>




    <?php include('footer.php'); ?>

    <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Información</h4>
                </div>
                <div class="modal-body">
                    <p id='server-response'></p>
                    <p class="text-warning"><small>Nuestro equipo se contactará con usted dentro de las próximas 24 horas.</small></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="window.location.href='/'">Aceptar</button>
                </div>
            </div>
        </div>
    </div>



    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js">
    </script>
    <script src="js/jquery.validate.min.js">
    </script>
    <script src="js/bootstrap.min.js">
    </script>
    <script type="text/javascript" src="js/hover-dropdown.js">
    </script>
    <script type="text/javascript" src="assets/bxslider/jquery.bxslider.js">
    </script>


    
    <!--common script for all pages-->
    <script src="js/common-scripts.js">
    </script>
    <script src="js/wow.min.js">
    </script>
    <script>
      $(document).ready(function() {
        $('#link-contact').addClass('active');
      });
      wow = new WOW(
        {
          boxClass:     'wow',      // default
          animateClass: 'animated', // default
          offset:       0          // default
        }
      )
        wow.init();
    </script>


    <script>
      $(document).ready(function() {
        $(".btn").click(function(){
            $("#myModal").modal('show');
        });
        $("#register").submit(function(e) {

            
        });
        //Set the carousel options
        $('#quote-carousel').carousel({
          pause: true,
          interval: 4000,
        });
        $('#register').submit(function(e) {
            e.preventDefault();
        }).validate({
            debug: false, 
            rules: {
                "name": {
                    required: true
                },
                "email": {
                    required: true,
                    email: true
                },
                "phone": {
                    required: true,
                    number:true,
                    minlength: 9,
                    maxlength: 9
                },
                "message": {
                    required: true
                }
            },
            messages: {
                "name": {
                    required: "Introduce tu nombre."
                },
                "email": {
                    required: "Introduce tu email.",
                    email: "Introduce un email valido."
                },
                "phone": {
                    required: "Introduce tu numero de teléfono.",
                    number: "Introduce un numero válido.",
                    maxlength: "Debe contener 9 dígitos.",
                    minlength: "Debe contener 9 dígitos."
                },
                "message": {
                    required: "Introduce un mensaje."
                }
            },
            submitHandler: function(form) {
            var url = "contact_service.php"; // the script where you handle the form input.

            $.ajax({
                   type: "POST",
                   url: url,
                   data: $("#register").serialize(), // serializes the form's elements.
                   success: function(data)
                   {  
                      $('#server-response').append(data)
                      $("#myModal").modal('show');
                       //alert(data); // show response from the php script.
                   }
                 });
            $('#register')[0].reset();

            e.preventDefault(); // avoid to execute the actual submit of the form.
            }
 
        });
      });

     



    </script>

  </body>
</html>
