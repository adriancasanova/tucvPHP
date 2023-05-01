<?php
require_once('cors.php');
  ?> 

<?php 

$data = json_decode(file_get_contents('php://input'), true);
print_r($data);
    $nombre = $data['nombre']; 
    $apellido = $data['apellido'];   
    $email = $data['email'];
    $asunto = $data['asunto'];
    
    
   
 
$body = $nombre . $apellido . $asunto;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

try {
  //Server settings
  //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'proveedorsmtp@gmail.com';                     //SMTP username
    $mail->Password   = 'Losredondos.31';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

  //Recipients
  //$mail->setFrom('proveedorsmtp@gmail.com', $email);
    $mail->setFrom($email, $email);
    //$mail->addAddress('pufytospetshop@gmail.com', 'Joe User');     //Add a recipient
    $mail->addAddress('adriancasanova_@outlook.es');               //Name is optional

   
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Solicitud de Contacto';
    $mail->Body    = $body;
    $mail->Charset = 'UTF-8';    
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo '<script>
    alert ("El mensaje se ha enviado correctamente");
    window.history.go(-1);
    </script>
    ';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
 

