<?php
require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer;

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$departamento = $_POST['departamento'];
$telefono = $_POST['telefono'];
$comentarios = $_POST['comentarios'];

$titulo = 'Contacto desde website';
$msjCorreo = "Nombres y Apellidos: $nombre\n Correo electronico: $email\n Departamento: $departamento\n Telefono: $telefono\n Comentarios:\n $comentarios";

$mail->From = $email; 
$mail->FromName = "Contacto desde website";

$mail->addAddress('snimax@gmail.com');
$mail->addAddress('jdelcarpio@lever.com.pe');
$mail->addAddress('salaverry@inversionesaguila.com.pe');

$mail->Subject = $titulo;
$mail->Body    = $msjCorreo;


if ($_POST['submit']) {
	if($mail->send()) {
		echo "<script language='javascript'>
		window.location.href = 'gracias.php';
		</script>";
	} else {
		echo 'Error en envío';
	}
}


?>