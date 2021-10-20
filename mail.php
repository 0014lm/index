<?php
$para      = 'jegs87@gmail.com';
$titulo    = 'IP detected';
$mensaje   = 'IP';
$cabeceras = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);
?>