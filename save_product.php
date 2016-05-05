<?php 
  include('acceso_db.php');
  $idProveedor= $_POST['idProveedor'];
  $name= $_POST['name'];
  $description= $_POST['description'];
  $valor_neto= $_POST['valor_neto'];
  $valor_total= $_POST['valor_total'];
  $codigo_proveedor= $_POST['codigo_proveedor'];
  $idProveedor=$_POST['idProveedor'];
  $imagen= $_POST['imagen'];
  $tags=$_POST['tags'];
  $query = "INSERT INTO Producto(idProveedor, nombre, descripcion, tags, valor_neto, valor_total, pagina_web, imagen, codigo_proveedor) VALUES ('".$idProveedor."', '".$name."', '".$description."', '".$tags."','".$valor_neto."','".$valor_total."', '".$pagina_web."','/img/productos/".$imagen."', '".$codigo_proveedor."')";

  $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

  echo $name.$description.$valor_neto.$valor_total.$idProveedor.$codigo_proveedor;
 ?>