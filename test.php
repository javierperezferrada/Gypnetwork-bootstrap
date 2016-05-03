<?php
    session_start();
    include('acceso_db.php');
?> 
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
            Bienvenido: <a href="perfil.php?id=<?=$_SESSION['usuario_id']?>"><strong><?=$_SESSION['usuario_nombre']?></strong></a>
 
            <a href="logout.php">Cerrar Sesión</a>
    
            <a href="registro.php">Registrarse</a> | <a href="acceso.php">Ingresar</a>

<?php
        if(isset($_SESSION['usuario_nombre'])) {
    
            echo 'Bienvenido: <a href="perfil.php?id=<?=$_SESSION["usuario_id"]?>"><strong><?=$_SESSION["usuario_nombre"]?></strong></a>
 
            <a href="logout.php">Cerrar Sesión</a>'
   
        }else {
   
            echo '<a href="registro.php">Registrarse</a> | <a href="acceso.php">Ingresar</a>'
    
        }
    ?> 


</body>
</html>