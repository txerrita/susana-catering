<?php
/*
	Creado por DaríoBF - www.dariobf.com
	Script que gestiona el envío de un formulario por correo electrónico a la cuenta indicada.
*/

//Correo de destino; donde se enviará el correo.
$correoDestino = "joserra.o@gmail.com";

//Texto emisor; sólo lo leerá quien reciba el contenido.
$textoEmisor = "MIME-VERSION: 1.0\r\n";
$textoEmisor .= "Content-type: text/html; charset=UTF-8\r\n";
$textoEmisor .= "Consulta de PRESUPUESTO";

/*
	Recopilo los datos vía POST
	Con strip_tags suprimo etiquetas HTML y php para evitar una posible inyección.
	Como no gestiona base de datos no es necesario limpiar de inyección SQL.
*/
$nombre = strip_tags($_POST['nombre']);
$telefono = strip_tags($_POST['telefono']);
$email = strip_tags($_POST['email']);
$mensaje = strip_tags($_POST['mensaje']);
$fecha = time();
$fechaFormateada = date("j/n/Y", $fecha);

//Formateo el asunto del correo
$asunto = "Solicitud PRESUPUESTO. $nombre $telefono";

//Formateo el cuerpo del correo

$cuerpo = "<b>Enviado por:</b> " . $nombre . ", " . " el día " . $fechaFormateada . "<br />";
$cuerpo .= "<b>Teléfono de contacto: </b>" . $telefono . "<br />";
$cuerpo .= "<b>E-mail:</b> " . $email . "<br />";
$cuerpo .= "<b>Comentario:</b> " . $mensaje;

// Envío el mensaje
mail( $correoDestino, $asunto, $cuerpo, $textoEmisor);
?>