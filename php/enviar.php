<?php
$destino= "contactolasvueltas@gmail.com";
$nombre= $_POST ["Nombre"];
$telefono= $_POST ["Teléfono"];
$correo= $_POST ["Correo"];
$mensaje= $_POST ["Mensaje"];
$contenido= "Nombre: " . $nombre . "\nCorreo" .$correo . "\nTeléfono" . $telefono . "\nMensaje" . $mensaje;
mail($destino, "Contacto", $contenido);
header("Location:gracias.html")

?>