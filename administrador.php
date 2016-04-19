<?php
session_start();

if (isset($_SESSION['loggedin']) & $_SESSION['loggedin'] == true)
{

}
else
{
echo "Esta pagina es solo para usuarios registrados.<br>";
echo "<a href='ingresar'>Iniciar Sesi&oacuten!</a>";

exit;
}
$now = time(); // checking the time now when home page starts

if($now > $_SESSION['expire'])
{
session_destroy();
echo "Su sesion a terminado, <a href='/'>
      Necesita Hacer Login</a>";
exit;
}
?>

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
      Gypnetwork | Administrador
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
    <link rel="stylesheet" type="text/css" href="css/component.css">
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
              Administrador
            </h1>
          </div>
          <div class="col-lg-8 col-sm-8">
            <ol class="breadcrumb pull-right">
              <li>
                <a href="/">
                  Gypnetwork Ltda
                </a>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->
    <div class="component-bg">
      <div class="container">

        <div class="bs-docs-section">
          <h1 id="tables" class="page-header">
            Productos
          </h1>
          <p>
            En esta sección de la aplicación web, usted puede agregar, editar o eliminar, los productos que se muestran en su sitio web.
          </p>
          <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                  <tr>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Office</th>
                      <th>Extn.</th>
                      <th>Start date</th>
                      <th>Salary</th>
                  </tr>
              </thead>
              <tfoot>
                  <tr>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Office</th>
                      <th>Extn.</th>
                      <th>Start date</th>
                      <th>Salary</th>
                  </tr>
              </tfoot>
          </table>
            
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>
                    #
                  </th>
                  <th>
                    Nombre
                  </th>
                  <th>
                    Descripción
                  </th>
                  <th>
                    Proveedor
                  </th>
                  <th>
                    Sitio web
                  </th>
                  <th>
                    Precio compra
                  </th>
                  <th>
                    Precio Venta
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    1
                  </td>
                  <td>
                    Table cell
                  </td>
                  <td>
                    Table cell
                  </td>
                  <td>
                    Table cell
                  </td>
                  <td>
                    Table cell
                  </td>
                  <td>
                    Table cell
                  </td>
                  <td>
                    Table cell
                  </td>
                </tr>
                <tr>
                  <td>
                    2
                  </td>
                  <td>
                    Table cell
                  </td>
                  <td>
                    Table cell
                  </td>
                  <td>
                    Table cell
                  </td>
                  <td>
                    Table cell
                  </td>
                  <td>
                    Table cell
                  </td>
                  <td>
                    Table cell
                  </td>
                </tr>
                <tr>
                  <td>
                    3
                  </td>
                  <td>
                    Table cell
                  </td>
                  <td>
                    Table cell
                  </td>
                  <td>
                    Table cell
                  </td>
                  <td>
                    Table cell
                  </td>
                  <td>
                    Table cell
                  </td>
                  <td>
                    Table cell
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.table-responsive -->

         

        </div>
      </div>
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
    <script defer src="js/jquery.flexslider.js">
    </script>
    <script type="text/javascript" src="assets/bxslider/jquery.bxslider.js">
    </script>

    <script src="js/jquery.easing.min.js">
    </script>
    <script src="js/link-hover.js">
    </script>


    <!--common script for all pages-->
    <script src="js/common-scripts.js">
    </script>
    <script src="js/wow.min.js">
    </script>
    <script>
      var editor; // use a global for the submit and return data rendering in the examples
 
$(document).ready(function() {
    editor = new $.fn.dataTable.Editor( {
              ajax: "staff.php",
              table: "#example",
              fields: [ {
                      label: "First name:",
                      name: "first_name"
                  }, {
                      label: "Last name:",
                      name: "last_name"
                  }, {
                      label: "Position:",
                      name: "position"
                  }, {
                      label: "Office:",
                      name: "office"
                  }, {
                      label: "Extension:",
                      name: "extn"
                  }, {
                      label: "Start date:",
                      name: "start_date",
                      type: 'datetime'
                  }, {
                      label: "Salary:",
                      name: "salary"
                  }
              ]
          } );
       
          var table = $('#example').DataTable( {
              lengthChange: false,
              ajax: "staff.php",
              columns: [
                  { data: null, render: function ( data, type, row ) {
                      // Combine the first and last names into a single table field
                      return data.first_name+' '+data.last_name;
                  } },
                  { data: "position" },
                  { data: "office" },
                  { data: "extn" },
                  { data: "start_date" },
                  { data: "salary", render: $.fn.dataTable.render.number( ',', '.', 0, '$' ) }
              ],
              select: true
          } );
       
          // Display the buttons
          new $.fn.dataTable.Buttons( table, [
              { extend: "create", editor: editor },
              { extend: "edit",   editor: editor },
              { extend: "remove", editor: editor }
          ] );
       
          table.buttons().container()
              .appendTo( $('.col-sm-6:eq(0)', table.table().container() ) );
      } );



      $(document).ready(function() {
        $('#link-administrator').addClass('active');
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

  </body>
</html>
