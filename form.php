<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'] ?? '';
    $apellidos = $_POST['apellidos'] ?? '';
    $telefono = $_POST['telefono'] ?? '';
    $correo = $_POST['correo'] ?? '';
    $direccion = $_POST['direccion'] ?? '';
    $numero = $_POST['numero'] ?? '';
    $estado = $_POST['estado'] ?? '';
    $ciudad = $_POST['ciudad'] ?? '';
    $especificacion = $_POST['especificacion'] ?? '';
    $colonia = $_POST['colonia'] ?? '';
    $codigo = $_POST['codigo'] ?? '';
    $banco = $_POST['banco'] ?? '';
    $clabe = $_POST['clabe'] ?? '';
    $rfc = $_POST['rfc'] ?? '';
    $mensajetxt = $_POST['mensajetxt'] ?? '';
    $opciones1 = $_POST["opciones1"];
    $opciones2 = $_POST["opciones2"];



    $mensaje = '
    <html>
    <head></head>
    <body>
    <table style="width:600px; margin: 0 auto; border: 1px solid #ddd; font-family: Arial; border-collapse:collapse;">
  <tr>
    <td style="padding:20px; text-align:center"><img src="https://cdn.shopify.com/s/files/1/0745/7407/0038/files/logo-RCN-black_1.svg"></td>
 <tr>
   <td>
     <h2 style="text-align:center; color: #5655ef; padding: 20px;">¡Registro de nuevo vendedor!</h2></td></tr>
  <tr><td style="text-align:center;"><p>Hola <b style="color: #5655ef;">Admin</b>, hemos recibido una solicitud de registro de un nuevo vendedor </p><hr style="text-align:center; background-color: #ddd; width: 90%; height:0.5px; border:0;"></td></tr>
    <tr><td style="padding:20px;">
    <table style="margin: 0 auto; border: 1px solid #ddd; width:500px; border-collapse:collapse; font-size: 13px;" cellpadding="5px">
    <tr style="border: 1px solid #ddd;"><th style="background:#5655ef; padding: 10px; color:#fff; border: 1px solid #ddd;"colspan="2">Datos Generales</th></tr>
      <tr style="border: 1px solid #ddd;">
        <td style="border: 1px solid #ddd;">Nombres: '.$nombre.'</td>
        <td style="border: 1px solid #ddd;">Apellido: '.$apellidos.'</td>
      </tr>
      <tr style="border: 1px solid #ddd;">
        <td style="border: 1px solid #ddd;">Teléfono: '.$telefono.'</td>
        <td style="border: 1px solid #ddd;">Correo: '.$correo.'</td>
      </tr>
      <tr style="border: 1px solid #ddd;"><th style="background:#5655ef; padding: 10px; color:#fff; border: 1px solid #ddd;"colspan="2">Datos de Envío y Recolección</th></tr>
      <tr style="border: 1px solid #ddd;">
        <td style="border: 1px solid #ddd;" colspan="2">Dirección: '.$direccion.'</td></tr>
      <tr style="border: 1px solid #ddd;">
        <td style="border: 1px solid #ddd;">Número: '.$numero.'</td>
        <td style="border: 1px solid #ddd;">Estado: '.$estado.'</td>
      </tr>
       <tr style="border: 1px solid #ddd;">
        <td style="border: 1px solid #ddd;" colspan="2">Especificación de la dirección: '.$especificacion.'</td>
      </tr>
             <tr style="border: 1px solid #ddd;">
        <td style="border: 1px solid #ddd;" colspan="2">Ciudad: '.$ciudad.'</td>
      </tr>
      <tr style="border: 1px solid #ddd;">
        <td style="border: 1px solid #ddd;">Colonia: '.$colonia.'</td>
        <td style="border: 1px solid #ddd;">Código Postal: '.$codigo.'</td>
      </tr>
            <tr style="border: 1px solid #ddd;"><th style="background:#5655ef; padding: 10px; color:#fff; border: 1px solid #ddd;"colspan="2">Método de envío de ropa</th></tr>
      <tr style="border: 1px solid #ddd;">
        <td style="border: 1px solid #ddd;" colspan="2">El cliente eligio: '.$opciones1.'</td>
      </tr>
            <tr style="border: 1px solid #ddd;"><th style="background:#5655ef; padding: 10px; color:#fff; border: 1px solid #ddd;"colspan="2">¿Que quiero hacer con la ropa para vender?</th></tr>
      <tr style="border: 1px solid #ddd;">
        <td style="border: 1px solid #ddd;" colspan="2">El cliente eligio: '.$opciones2.'</td>
      </tr>
      <tr style="border: 1px solid #ddd;"><th style="background:#5655ef; padding: 10px; color:#fff; border: 1px solid #ddd;"colspan="2">Datos Bancarios</th></tr>
      <tr style="border: 1px solid #ddd;">
        <td style="border: 1px solid #ddd;">Banco: '.$banco.'</td>
        <td style="border: 1px solid #ddd;">CLABE: '.$clabe.'</td>
      </tr>
      <tr style="border: 1px solid #ddd;">
        <td style="border: 1px solid #ddd;" colspan="2">RFC: '.$rfc.'</td>
      </tr>
      <tr style="border: 1px solid #ddd;"><th style="background:#5655ef; padding: 10px; color:#fff; border: 1px solid #ddd;"colspan="2">Mensaje</th></tr>
      <tr style="border: 1px solid #ddd;">
        <td style="border: 1px solid #ddd;" colspan="2">Mensaje: '.$mensajetxt.'</td>
      </tr>
    </table>
    </td></tr>
  
  <tr>
    <td>
      <table style="width:600px; background: #E1D8C8; padding:10px;">
        <tr>
          <td><img src="https://cdn.shopify.com/s/files/1/0745/7407/0038/files/logo-RCN-black_1.svg" width="110px"><br>
            <img src="https://cdn.shopify.com/s/files/1/0745/7407/0038/files/payment-methods_430x.png" width="110px">
          </td>
          <td style="font-size:12px;"><ul style="list-style:none;"><p>Navegación<p><li><a href="https://ropacomonueva.com/">Inicio</a></li>
<li><a href="https://ropacomonueva.com/pages/sobre-nosotros">Nosotros</a></li>
<li><a href="https://ropacomonueva.myshopify.com/collections/all/mujeres">Mujeres</a></li>
            <li><a href="https://ropacomonueva.com/pages/contacto">Contacto</a></li>
            <li><a href="https://ropacomonueva.com/pages/quiero-vender">Quiero Vender</a></li></ul>
          </td>
          <td style="font-size:12px; vertical-align:top;"><ul style="list-style:none;">
            <p>Contacto<p>
            <li><a href="mailto:hola@ropacomonueva.com">hola@ropacomonueva.com</a></li>
            <li><a href="https://wa.me/528132505679">+528132505679</a></li>
            </ul>
          </td>
          <td style="font-size:12px; vertical-align:top; text-align:center;"><p>Social<p><ul>
            <li style="display:inline;"><a href="https://www.facebook.com/ropacomonuevarcn"><img src="https://i.ibb.co/X238NHM/icons8-facebook-48.png" height="20px"></a></li>
<li style="display:inline;"><a href="https://www.instagram.com/ropacomonueva.com_/"><img src="https://i.ibb.co/NL5vxr4/icons8-instagram-48.png" height="20px"></a></li>
          </td>
          </tr>
        
      </table>
    </td>
  </tr>
  <tr style="background: #202B39;">
    <td style="text-align:center; font-size: 12px; padding: 10px; color:#fff;">
      Todos los derechos reservados Ropacomonueva.com 2023<br>
      <a style="color:#fff;" href="https://ropacomonueva.myshopify.com/pages/preguntas-frecuentes">Preguntas Frecuentes</a><br>
      <a style="color:#fff;" href="https://ropacomonueva.myshopify.com/pages/terminos-y-condiciones">Términos y Condiciones</a><br>
      <a style="color:#fff;" href="https://ropacomonueva.myshopify.com/pages/aviso-de-privacidad">Aviso de Privacidad</a></br>
    </td></tr>
    </table>
    </body>
    </html>';





    // Establecer las cabeceras del correo electrónico
    $email = "noreply@ropacomonueva.com";
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From:  "RopaComoNueva.com" <' . $email .'>' . " \r\n" .
            'Reply-To: '.  $email . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
    
    // Enviar el correo electrónico
    $destinatario = "hola@ropacomonueva.com"; // Cambiar por tu dirección de correo electrónico
    $asunto = "Nuevo registro de Vendedor";

if (mail($destinatario, $asunto, $mensaje, $headers)) {
    
    
    
    if ($_POST['opciones1'] == 'Recolección a mi domicilio GRATIS') {
        
    // Envío del correo de registro exitoso
    // Enviar mensaje de bienvenida al correo proporcionado en el formulario
    $asunto_bienvenida = "Bienvenido a RopaComoNueva";
    $mensaje_bienvenida = '
    
    
        <html>
    <head></head>
    <body>
    <table style="width:600px; margin: 0 auto; border: 1px solid #ddd; font-family: Arial; border-collapse:collapse;">
  <tr>
    <td style="padding:0px; text-align:center"><img src="https://i.ibb.co/7pM2qSd/banner2px.png"></td>
 <tr>
   <td>
     <h3 style="text-align:center; color: #333; padding: 10px;"> ¡Hola! '.$nombre.' 💙 Estás a un paso de vender</h3></td></tr>
     <tr><td style="text-align:center; padding:10px 10px; background-color: #5655EF; font-weight:600; color: #fff;">AVISO IMPORTANTE</td></tr>
    <tr><td style="text-align:center; padding: 10px 20px; border-bottom:1px solid #ddd;">Gracias por unirte a este movimiento y darle una segunda vida a más prendas, que de otra forma terminarian sin uso.<br><br><b>Lo lamentamos, pero por el momento NO estamos recolectando ropa.</b><br>Cuando reanudemos la recolección te contactaremos a tus datos de contacto.<br><br>Gracias por tu comprension, RopaComoNueva.com</td></tr>
  <tr><td style="text-align:left; padding:0px 20px;"><p style="font-weight:600">Haz seleccionado </p></td></tr>
  <tr><td><div style="text-align:center; padding:10px; background-color: #E1D8C8; width:540px; margin: 0 auto;"><p style="font-weight:600;"><span style="color:#5655EF;">Opción 1:</span> Recolección a domicilio gratis</p></div></td></tr>
   <tr><td style="text-align:left; padding:0px 20px; font-size:14px;"><p style="font-weight: 600">Responde a este correo con:</p><p>La fecha en la que quieres que pasemos a recoger tu ropa. (Ejemplo: 23 de Noviembre de 2022)</p><p>Horario de Recolección: Lunes a Viernes de 9am a 8pm, sábado de 9am a 1pm<br>
Te estaremos haciendo llegar tu guía de envío para esa fecha. ¡Imprímela, pégala en el paquete y
listo! Nosotros pasamos a recogerla.</p><br><img src="https://i.ibb.co/sVf9FHb/Paso-2-Recolecci-n-1.png" width="550px">
   </td></tr>
  <tr><td style="padding:10px;"><p style="font-style:italic; border-top: 1px solid #ddd; border-bottom:1px solid #ddd; width:400px; margin: 0 auto; text-align:center; padding: 10px;"><b style="color: #d33; font-style:normal !important;">Tienes dudas</b><br>Escríbenos al 81 3250 5679 o a este correo <a href="mailto:hola@ropacomonueva.com">hola@ropacomonueva.com</p></td></tr>
  <tr>
    <td>
      <table style="width:600px; background: #E1D8C8; padding:10px;">
        <tr>
          <td><img src="https://cdn.shopify.com/s/files/1/0745/7407/0038/files/logo-RCN-black_1.svg" width="110px"><br>
            <img src="https://cdn.shopify.com/s/files/1/0745/7407/0038/files/payment-methods_430x.png" width="110px">
          </td>
          <td style="font-size:12px;"><ul style="list-style:none;"><p>Navegación<p><li><a href="https://ropacomonueva.com/">Inicio</a></li>
<li><a href="https://ropacomonueva.com/pages/sobre-nosotros">Nosotros</a></li>
<li><a href="https://ropacomonueva.myshopify.com/collections/all/mujeres">Mujeres</a></li>
            <li><a href="https://ropacomonueva.com/pages/contacto">Contacto</a></li>
            <li><a href="https://ropacomonueva.com/pages/quiero-vender">Quiero Vender</a></li></ul>
          </td>
          <td style="font-size:12px; vertical-align:top;"><ul style="list-style:none;">
            <p>Contacto<p>
            <li><a href="mailto:hola@ropacomonueva.com">hola@ropacomonueva.com</a></li>
            <li><a href="https://wa.me/528132505679">+528132505679</a></li>
            </ul>
          </td>
          <td style="font-size:12px; vertical-align:top; text-align:center;"><p>Social<p><ul>
            <li style="display:inline;"><a href="https://www.facebook.com/ropacomonuevarcn"><img src="https://i.ibb.co/X238NHM/icons8-facebook-48.png" height="20px"></a></li>
<li style="display:inline;"><a href="https://www.instagram.com/ropacomonueva.com_/"><img src="https://i.ibb.co/NL5vxr4/icons8-instagram-48.png" height="20px"></a></li>
          </td>
          <tr>
      </table>
    </td>
  </tr>
    <tr style="background: #202B39;">
    <td style="text-align:center; font-size: 12px; padding: 10px; color:#fff;">
      Todos los derechos reservados Ropacomonueva.com 2023<br>
      <a href="https://ropacomonueva.myshopify.com/pages/preguntas-frecuentes" style="color:#fff">Preguntas Frecuentes</a><br>
      <a href="https://ropacomonueva.myshopify.com/pages/terminos-y-condiciones" style="color:#fff">Términos y Condiciones</a><br>
      <a href="https://ropacomonueva.myshopify.com/pages/aviso-de-privacidad" style="color:#fff">Aviso de Privacidad</a></br>
    </td></tr>
    </table>
        </body>
    </html>
    ';

    
    $emailto = "hola@ropacomonueva.com";
    $headers_usuario = 'MIME-Version: 1.0' . "\r\n";
    $headers_usuario .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers_usuario .= 'From:  "RopaComoNueva.com" <' . $emailto .'>' . " \r\n" .
            'Reply-To: '.  $emailto . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
            
    } else {
    // Envío del correo de registro exitoso
    // Enviar mensaje de bienvenida al correo proporcionado en el formulario
    $asunto_bienvenida = "Bienvenido a RopaComoNueva";
    $mensaje_bienvenida = '
    
            <html>
    <head></head>
    <body>
    <table style="width:600px; margin: 0 auto; border: 1px solid #ddd; font-family: Arial; border-collapse:collapse;">
  <tr>
    <td style="padding:0px; text-align:center"><img src="https://i.ibb.co/7pM2qSd/banner2px.png"></td>
 <tr>
   <td>
     <h3 style="text-align:center; color: #333; padding: 10px;"> ¡Hola! '.$nombre.' 💙 Estás a un paso de vender</h3></td></tr>
     <tr><td style="text-align:center; padding:10px 10px; background-color: #5655EF; font-weight:600; color: #fff;">AVISO IMPORTANTE</td></tr>
    <tr><td style="text-align:center; padding: 10px 20px; border-bottom:1px solid #ddd;">Gracias por unirte a este movimiento y darle una segunda vida a más prendas, que de otra forma terminarian sin uso.<br><br><b>Lo lamentamos, pero por el momento NO estamos recolectando ropa.</b><br>Cuando reanudemos la recolección te contactaremos a tus datos de contacto.<br><br>Gracias por tu comprension, RopaComoNueva.com</td></tr>
  <tr><td style="text-align:left; padding:0px 20px;"><p style="font-weight:600">Haz seleccionado </p></td></tr>
    <tr><td><div style="text-align:center; padding:10px; background-color: #E1D8C8; width:540px; margin: 0 auto;"><p style="font-weight:600;"><span style="color:#5655EF;">Opción 2:</span> Llévala a nuestro centro de recolección en NL</p></div></td></tr>
   <tr><td style="text-align:left; padding:0px 20px; font-size:14px;"><p style="font-weight: 600">Responde a este correo con:</p><p>La fecha en la que estarías pasando a entregar tu ropa.<br> Te estaremos haciendo llegar un código único para que puedas entregar tu ropa, así la dirección de nuestro centro de recolección.<br>
Horario de entregas: Lunes a Viernes de 9am a 8pm, sábado de 9am a 1pm.</p></p><br><img src="https://i.ibb.co/sVf9FHb/Paso-2-Recolecci-n-1.png" width="550px">
   </td></tr>
  <tr><td style="padding:10px;"><p style="font-style:italic; border-top: 1px solid #ddd; border-bottom:1px solid #ddd; width:400px; margin: 0 auto; text-align:center; padding: 10px;"><b style="color: #d33; font-style:normal !important;">Tienes dudas</b><br>Escríbenos al 81 3250 5679 o a este correo <a href="mailto:hola@ropacomonueva.com">hola@ropacomonueva.com</p></td></tr>
  <tr>
    <td>
      <table style="width:600px; background: #E1D8C8; padding:10px;">
        <tr>
          <td><img src="https://cdn.shopify.com/s/files/1/0745/7407/0038/files/logo-RCN-black_1.svg" width="110px"><br>
            <img src="https://cdn.shopify.com/s/files/1/0745/7407/0038/files/payment-methods_430x.png" width="110px">
          </td>
          <td style="font-size:12px;"><ul style="list-style:none;"><p>Navegación<p><li><a href="https://ropacomonueva.com/">Inicio</a></li>
<li><a href="https://ropacomonueva.com/pages/sobre-nosotros">Nosotros</a></li>
<li><a href="https://ropacomonueva.myshopify.com/collections/all/mujeres">Mujeres</a></li>
            <li><a href="https://ropacomonueva.com/pages/contacto">Contacto</a></li>
            <li><a href="https://ropacomonueva.com/pages/quiero-vender">Quiero Vender</a></li></ul>
          </td>
          <td style="font-size:12px; vertical-align:top;"><ul style="list-style:none;">
            <p>Contacto<p>
            <li><a href="mailto:hola@ropacomonueva.com">hola@ropacomonueva.com</a></li>
            <li><a href="https://wa.me/528132505679">+528132505679</a></li>
            </ul>
          </td>
          <td style="font-size:12px; vertical-align:top; text-align:center;"><p>Social<p><ul>
            <li style="display:inline;"><a href="https://www.facebook.com/ropacomonuevarcn"><img src="https://i.ibb.co/X238NHM/icons8-facebook-48.png" height="20px"></a></li>
<li style="display:inline;"><a href="https://www.instagram.com/ropacomonueva.com_/"><img src="https://i.ibb.co/NL5vxr4/icons8-instagram-48.png" height="20px"></a></li>
          </td>
          <tr>
      </table>
    </td>
  </tr>
    <tr style="background: #202B39;">
    <td style="text-align:center; font-size: 12px; padding: 10px; color:#fff;">
      Todos los derechos reservados Ropacomonueva.com 2023<br>
      <a href="https://ropacomonueva.myshopify.com/pages/preguntas-frecuentes" style="color:#fff">Preguntas Frecuentes</a><br>
      <a href="https://ropacomonueva.myshopify.com/pages/terminos-y-condiciones" style="color:#fff">Términos y Condiciones</a><br>
      <a href="https://ropacomonueva.myshopify.com/pages/aviso-de-privacidad" style="color:#fff">Aviso de Privacidad</a></br>
    </td></tr>
    </table>
        </body>
    </html>
    ';

    
    $emailto = "hola@ropacomonueva.com";
    $headers_usuario = 'MIME-Version: 1.0' . "\r\n";
    $headers_usuario .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers_usuario .= 'From:  "RopaComoNueva.com" <' . $emailto .'>' . " \r\n" .
            'Reply-To: '.  $emailto . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
            
    }

    mail($correo, $asunto_bienvenida, $mensaje_bienvenida, $headers_usuario);

    http_response_code(200);
    $respuesta = array('status' => 'exito', 'mensaje' => 'El correo electrónico se ha enviado correctamente.');
    echo json_encode($respuesta);
} else {
    $respuesta = array('status' => 'error', 'mensaje' => 'Ha ocurrido un error al enviar el correo electrónico. Por favor, intenta de nuevo.');
    echo json_encode($respuesta);
}
}
