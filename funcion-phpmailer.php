<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader (created by composer, not included with PHPMailer)
require 'vendor/autoload.php';
//Datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
//$asunto = $_POST['asunto'];
if (is_array($_POST['asunto'])) {
    $asunto = implode(", ", $_POST['asunto']); // convierte array a texto
} else {
    $asunto = (string)$_POST['asunto'];
}
$mensaje = $_POST['mensaje'];
$foto = $_FILES['foto']['tmp_name']; //array assoc - $foto['tmp_name']; $foto['size'] - $foto['name']

if( empty(trim($nombre)) ) $nombre = 'anonimo';
if( empty(trim($apellido)) ) $apellido = '';
//Cuerpo html para enviar.
$body = <<<HTML
    <h1>Contacto desde la web</h1>
    <p>De: $nombre $apellido / $email</p>
    <h2>Mensaje</h2>
    $mensaje
HTML;

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'sergiop8877@gmail.com';                     //SMTP username
    $mail->Password   = 'sjjjkwscksigyvck';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('sergiop8877@gmail.com', 'Pereyra');
    $mail->addAddress($email, "$nombre $apellido");     //Add a recipient
    /*$mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');*/

    //Attachments
    $mail->addAttachment($_FILES['foto']['tmp_name'], $_FILES['foto']['name']);        //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "Mensaje web: {$asunto}";
    $mail->Body    = "$body";
    /*$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';*/

    $mail->send();
    header("Location: index.php" );
} catch (Exception $e) {
    echo "Error al enviar: {$mail->ErrorInfo}";
}