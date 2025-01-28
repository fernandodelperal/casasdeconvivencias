   <?php
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
   // Habilitar la visualización de errores
   ini_set('display_errors', 1);
   error_reporting(E_ALL);

   $to = 'fernandodelperal@gmail.com'; // Reemplaza con tu dirección de correo electrónico
   $subject = 'Prueba de la función mail()';
   $message = 'Este es un correo de prueba para verificar la función mail() en PHP.';
   $headers = 'From: webmaster@tu-dominio.com' . "\r\n" .
              'Reply-To: webmaster@tu-dominio.com' . "\r\n" .
              'X-Mailer: PHP/' . phpversion();

   if (mail($to, $subject, $message, $headers)) {
       echo 'Correo enviado exitosamente.';
   } else {
       echo 'EError al enviar el correo.';
       // Obtener el último error de PHP
       $error = error_get_last();
       echo '<pre>';
       print_r($error);
       echo '</pre>';
   }
   ?>
