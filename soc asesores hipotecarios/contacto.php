<?php
$nombre = $_POST['nombre'];
$email = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];



$para = 'contacto@socfluye.com';
$titulo = 'Mensaje de la página socfluye';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Telefono: $telefono\n Mensaje:\n $mensaje";

if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'>
alert('Mensaje enviado, muchas gracias.');
window.location.href = 'http://socfluye.com/';
</script>";
} else {
echo 'Fall¨® el envio';
}
}
?>