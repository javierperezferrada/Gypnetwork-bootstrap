<?php
/* start the session */

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
 <title>Check Login</title>
 <meta charset = "utf8" />
</head>


<body>

<?php

 include('acceso_db.php');
 $tbl_name = "usuarios";



// data enviada desde el formulario
$username = $_POST['username'];
$password = $_POST['password'];

$sql= "SELECT*FROM $tbl_name WHERE usuario_nombre='$username' and usuario_clave='$password'";

$result=mysql_query($sql);

// counting table row
$count = mysql_num_rows($result);
// If result matched $username and $password

if($count == 1){

	 $_SESSION['loggedin'] = true;
	 $_SESSION['username'] = $username;
	 $_SESSION['start'] = time();
	 $_SESSION['expire'] = $_SESSION['start'] + (5 * 60) ;

	header("Location:administrador");

}
 else {
 echo "Username o Password estan incorrectos.";

 echo "<a href='ingresar'>Volver a Intentarlo</a>";
}

?>

</body>
</html>
