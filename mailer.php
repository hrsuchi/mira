<?php
  if(isset($_GET["cotizacion"])){
    $mensaje = "Nombre: ".$_POST["cotiname"]."\n";
    $mensaje = $mensaje."Telefono: ".$_POST["cotitel"]."\n";
    $mensaje = $mensaje."Email: ".$_POST["cotiemail"]."\n";
    $mensaje = $mensaje."Rango de cuotas: (Q)".$_POST["rangocuotas"]."\n";
    $mensaje = $mensaje."Habitaciones: ".$_POST["habitaciones"]."\n";
    $mensaje = $mensaje."apartamento: ".$_POST["apartamento"]."\n";
    $to = $_POST["cotiemail"];
    $subject = "Cotizacion - Mira";
    $headers = "From: hola@mira.gt";
    mail($to,$subject,$mensaje,$headers);
  }
  if(isset($_GET["cita"])){
    $mensaje = "Nombre: ".$_POST["citanombre"]."\n";
    $mensaje = $mensaje."Telefono: ".$_POST["citatel"]."\n";
    $mensaje = $mensaje."Email: ".$_POST["citaemail"]."\n";
    $mensaje = $mensaje."Forma: ".$_POST["citaforma"]."\n";
    $mensaje = $mensaje."San Martin: Zona ".$_POST["sanmartin"]."\n";
    $mensaje = $mensaje."Horario: ".$_POST["citahorario"]."\n";
    $mensaje = $mensaje."Fecha: ".$_POST["citafecha"]."\n";
    $to = "hola@mira.gt";
    $subject = "Nueva Cita | Mira";
    $headers = "From: no-reply@mira.gt";
    mail($to,$subject,$mensaje,$headers);
  }
  if(isset($_GET["contacto"])){
    $mensaje = "Nombre: ".$_POST["contname"]."\n";
    $mensaje = $mensaje."Telefono: ".$_POST["contphone"]."\n";
    $mensaje = $mensaje."Email: ".$_POST["contaemail"]."\n";
    $mensaje = $mensaje."Forma de Contacto: ".$_POST["forma_contacto"]."\n";
    $mensaje = $mensaje."San Martin: Zona ".$_POST["contsanmartin"]."\n";
    $mensaje = $mensaje."Tipo de Apartamento: ".$_POST["tipo_apartamento"]."\n";
    $mensaje = $mensaje."Mensaje: ".$_POST["contmessage"]."\n";
    $to = "hola@mira.gt";
    $subject = "Contacto | Mira";
    $headers = "From: no-reply@mira.gt";
    mail($to,$subject,$mensaje,$headers);
  }
?>
