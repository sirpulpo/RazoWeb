<?php
  $nombre = $_POST["contactName"];
  $email = $_POST["contactEmail"];
  $tema = $_POST["contactSubject"];
  $mensaje = $_POST["contactMessage"];

  $contenido = "Nombre: " . $nombre . "\nCorreo: " . $email . "\nTema: " . $tema . "\nMensaje: " . $mensaje;

  mail("dibujantes@rotoarchitechno.com", "Contacto", $contenido);
  mail("bienesraices@rotoarchitechno.com", "Contacto", $contenido);
  mail("proyectos@rotoarchitechno.com", "Contacto", $contenido);
  
  header("Location:index.html");

?>