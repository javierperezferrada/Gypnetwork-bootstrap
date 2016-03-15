<?php
  $message="Mensaje del formulario de contacto de www.gypnetwork.cl";
  $message.= "\nNombre: ". $_POST['name'];
  $message.= "\nEmail: ".$_POST['email'];
  $message.= "\nTelefono: ". $_POST['phone'];
  $message.= "\nmessage: \n".$_POST['message'];
  $to= "javier_dc2@hotmail.com";
  $from = $_POST['email'];
  $subject = "Mensaje enviado por: ".$_POST['name'];
  @mail('gypnetwork.info@gmail.com',$subject,$message);
?>