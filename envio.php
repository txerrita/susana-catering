<?php

$nombre = $_POST['nombre'];
$telefono = -$_POST['telefono'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];







echo "<h3>El mensaje  que enviastes es :</h3>";
echo("Nombre:");
echo "<br>";
echo $nombre;
echo "<br>";
echo("Email:");
echo "<br>";
echo $email;
echo "<br>";
echo("Mensaje:");
echo "<br>";
echo $mensaje;
echo "<br>";

echo("Gracias pronto atendere tu consulta");

echo "<br>";

echo "<br>";

$aquien = "joserra.o@gmail.com";
$asunto = "Has recibido un mensaje de SOLICITUD DE PRESUPUESTO";
$mensajemail =$nombre." Con el email ".$email." y el teléfono".$telefono." mensaje enviado" .$mensaje;

if (mail($aquien,$asunto,$mensajemail))
{echo "Tu email se envió correctamente ";}
 else{echo "El envió de email ha fallado";}





?>