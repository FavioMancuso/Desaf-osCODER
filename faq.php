<?php

$destino = "faviomancusov@gmail.com"
$usuario = $_POST["usuario"];
$textarea = $_POST["textarea"];

$contenido = "Usuario " . $usuario . "\nComentario " . $textarea;
$asunto = "El siguiente usuario realizó esta consulta: "

mail($destino, $asunto, $contenido, $header);
header("Location:index.html");

?>