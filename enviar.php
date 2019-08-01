
<?php

error_log("Error message asd\n", 3, "php_error.log");


try

       {


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$nombre = $_POST['nombre'];
$from = "atencionalcliente@elincreibleflash.epizy.com";
$mail = $_POST['correo'];
$empresa = $_POST['mensaje'];

$header = 'From: ' . $from . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

//$para = 'atencionalcliente@elincreibleflash.epizy.com';
$para = 'laureanoblonsky@gmail.com';
$asunto = 'Mensaje de mi sitio web';


    $enviado = mail($para, $asunto, utf8_decode($mensaje), $header);
error_log("Mail enviado: ".$enviado."\n", 3, "php_info.log");


    header("Location:index.html");    
    }catch(Exception $e)

        {
 echo "IMPRIMIMOS EL MENSAJE QUE QUEREMOS QUE VEAN MAS EL ERROR CACHADO EN $e ".$e;
 }


?>