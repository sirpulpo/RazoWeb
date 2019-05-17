<?php
  $nombre = $_POST["name"];
  $email = $_POST["email"];
  $tema = $_POST["tema"];
  $mensaje = $_POST["comments"];

  $contenido = "Nombre: " . $nombre . "\nCorreo: " . $email . "\nTema: " . $tema . "\nMensaje: " . $mensaje;

  mail("dibujantes@rotoarchitechno.com", "Contacto", $contenido);
  mail("bienesraices@rotoarchitechno.com", "Contacto", $contenido);
  mail("proyectos@rotoarchitechno.com", "Contacto", $contenido);
  
  header("Location:index.html");

?>