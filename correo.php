

<?php
  $destino= "hmbcontadoresasociados@gmail.com";
  $nombre= $_POST["nombre"];
  $correo= $_POST["email"];
  $telefono= $_POST["telefono"];
  $mensaje= $_POST["mensaje"];

  $contenido = "nombre: " . $nombre . "\nCorreo: " . $correo . "\nTelefono: " . $telefono . "\nMensaje: " . $mensaje;
  mail($destino,"Contacto HMB",$contenido);
  header("location:index.html")
?>
