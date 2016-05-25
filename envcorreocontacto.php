<?php
if(isset($_POST['txtcorreocontactar'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "jpovedag@misena.edu.co";
$email_subject = "Contacto desde el sitio web";
$email_from = "jpovedag@misena.edu.co";

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['txtnombrecontactar']) ||
!isset($_POST['txtcorreocontactar']) ||
!isset($_POST['txttelefonocontactar']) ||
!isset($_POST['txtmensajecontactar'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['txtnombrecontactar'] . "\n";
$email_message .= "E-mail: " . $_POST['txtcorreocontactar'] . "\n";
$email_message .= "Teléfono: " . $_POST['txttelefonocontactar'] . "\n";
$email_message .= "Comentarios: " . $_POST['txtmensajecontactar'] . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "¡El formulario se ha enviado con éxito!";
}
?>