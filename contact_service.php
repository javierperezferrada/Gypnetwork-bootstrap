<?php
  $message="Mensaje del formulario de contacto de www.gypnetwork.cl";
  $message.= "\nNombre: ". $_POST['name'];
  $message.= "\nEmail: ".$_POST['email'];
  $message.= "\nTelefono: ". $_POST['phone'];
  $message.= "\nMensaje: \n".$_POST['message'];
  $to= "javier_dc2@hotmail.com";
  $from = $_POST['email'];
  $subject = "Mensaje enviado por: ".$_POST['name'];
  $bool = @mail('gypnetwork.info@gmail.com',$subject,$message);
  if($bool){
	    echo "<p>Mensaje enviado</p>";
	}else{
	    echo "<p>Mensaje no enviado</p>";
	}
?>