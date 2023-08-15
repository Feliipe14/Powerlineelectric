<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "alonsovaldez@powerlineelectricals.com"; // Cambia esto por tu dirección de correo electrónico
    $subject = "New message sent from your site";
    $message = "Name: " . $_POST["name"] . "\n";
    $message .= "Email: " . $_POST["email"] . "\n";
    $message .= "Message: " . $_POST["message"];

    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtpout.secureserver.net'; // Cambia esto por el servidor SMTP de tu proveedor de correo
    $mail->SMTPAuth = true;
    $mail->Username = 'alonsovaldez@powerlineelectricals.com'; // Cambia esto por tu nombre de usuario SMTP
    $mail->Password = '3104729293'; // Cambia esto por tu contraseña SMTP
    $mail->SMTPSecure = 'tls'; // Usar 'ssl' si el servidor SMTP lo requiere
    $mail->Port = 587; // Puerto SMTP seguro (tls) o 465 (ssl)

    $mail->setFrom('pedrito@gmail.com ', 'pedro');
    $mail->addAddress($to);
    $mail->isHTML(false);

    $mail->Subject = $subject;
    $mail->Body = $message;

    if ($mail->send()) {
        echo"<script>alert('Your email has been sent.')</script>";
        echo"<script> setTimeout(\"location.href='index.php'\",120)</script>";
 
    } else {
        echo "Hubo un problema al enviar el formulario: " . $mail->ErrorInfo;
    }
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POWER LINE ELECTRIC</title>
  <!-- Enlace a la hoja de estilos de Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Enlace a tu hoja de estilos personalizada -->
  <link rel="stylesheet" href="styles.css">
  <link rel="icon" href="images/logo.jpg">
</head>
<body>
  <!-- Barra de navegación -->
  <div class="menu">
  <nav class="navbar navbar-expand-lg  " >
    
    
      <a class="navbar-brand" href="#">
        <img loading="lazy" src="images/logo.jpeg" width="250" height="100">
      </a>
    
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#start">Start</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#nosotros">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#experience">Experiences</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    
  </nav>
</div>
 
  <!-- Sección de inicio -->
    <div class="texto">
      <h2 class="text-center">ABOUT US</h2>
      
      <p>Power Line Electric its a leading Electric Services Company in the ELECTRICAL sector in Denver, CO. We are specialists in repair, development and execution of ELECTRICAL projects.</p>
    </div>
  <section id="nosotros" >
    <div class="nosotros">

      <video class="video"   autoplay muted loop >
        <source src="images/video.mp4" type="video/mp4">
      </video>
    
  </div>
  </section>

  <!-- Sección de servicios -->
  
  <header id="start" class="bg-primary text-white text-center py-5">
    <div class="container">
      <h1>RELIABLE ELECTRICAL FOR YOUR HOME AND BUSINESS</h1>
      <p class="lead">
        We offer efficient and safe electrical solutions</p>
      <a href="#contact" class="btn btn-light btn-lg">CONTACT US</a>
      
 
    </div>

  </header>
  <!-- Sección de nosotros -->
<section id="services" class="py-5">
    <div class="container">
      <h2 class="text-center">WE CAN OFFER YOU THESE SERVICES</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4">
            <img loading="lazy" src="images/1.jpeg" class="card-img loading="lazy"-top" id="imagen" alt="Servicio 1">
            <div class="card-body">
              <h5 class="card-title">ELECTRICAL INSTALLATIONS</h5>
              <p class="card-text">We carry out safe and high quality electrical installations for your home or business.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4">
            <img loading="lazy" src="images/2.jpeg" class="card-img loading="lazy"-top" alt="Servicio 2" id="imagen">
            <div class="card-body">
              <h5 class="card-title">ELECTRICAL MAINTENANCE</h5>
              <p class="card-text">We provide preventive and corrective maintenance services to guarantee the optimal operation of your electrical installations.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4">
            <img loading="lazy" src="images/3.jpeg" class="card-img loading="lazy"-top" alt="Servicio 3" id="imagen">
            <div class="card-body">
              <h5 class="card-title">ENERGY EFFICIENCY</h5>
              <p class="card-text">We advise you to reduce energy consumption and optimize your electrical system.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4">
            <img loading="lazy" src="images/4.png" class="card-img loading="lazy"-top" alt="Servicio 4" id="imagen">
            <div class="card-body">
              <h5 class="card-title">LIGHTING CONTROLS</h5>
              <p class="card-text">Solution of the lighting system and electrical communication networks</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4">
            <img loading="lazy" src="images/5.jpg" class="card-img loading="lazy"-top" alt="Servicio 5" id="imagen">
            <div class="card-body">
              <h5 class="card-title">TROUBLESHOOTING</h5>
              <p class="card-text">We diagnose problems in systems, devices, transformers, electrical switches and other electronic accessories.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">9
          <div class="card mb-4">
            <img loading="lazy" src="images/6.jpg" class="card-img loading="lazy"-top" alt="Servicio 6" id="imagen">
            <div class="card-body">
              <h5 class="card-title">DESIGN AND PLANNING OF ELECTRICAL NETWORKS</h5>
              <p class="card-text">We help you in the design, organization and planning of your electrical networks</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="experience" class="bg-primary text-white text-center py-5">
    <div class="container">
      <h2 class="text-center">WE HAVE EXPERIENCE</h2>
      <p class="text-center">Credibility and trust: we have 20 years of experience, it is a tangible proof of our knowledge in the field of ELECTRICAL.</p>
      
    </div>
  </section>
  <!-- Sección de contacto -->
  <section id="contact" class="py-5">
   
    <div class="container">

      <div class="columnas-contenedor">
    <h2 class="text-center">CONTACT US</h2>
      <p class="text-center">Contact us to request information or a personalized quote.</p>
      <div class="row">
        <div class="col-md-9 mx-auto">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
              <label for="nombre">Name</label>
              <input type="text" class="form-control" name="name" id="nombre" required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" id="email" required>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Send Message</button>
    </form> 
        </div>
      </div>
    
        <img loading="lazy" class="map" width="500px" src="images/mapa.png" alt="">
    
     
      </div>

    </div>
     
  </section>

  <!-- Pie de página -->
  <footer class="bg-dark text-white text-center py-3">
    <div class="container">
      <p>POWER LINE ELECTRIC&copy; 2023. All rights reserved. Denver,CO</p>
    </div>
  </footer>
  <a href="https://api.whatsapp.com/send?phone=TUNUMERODETELEFONO" class="whatsapp-float" target="_blank">
    <img loading="lazy" src="images/whatsapp.png" alt="WhatsApp">
  </a>
  

  <!-- Enlaces a los scripts de Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>





