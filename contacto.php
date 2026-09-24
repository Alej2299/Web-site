<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/PHPMailer/src/Exception.php';
require 'vendor/PHPMailer/src/PHPMailer.php';
require 'vendor/PHPMailer/src/SMTP.php';

$mensaje_estado = "";
$whatsapp_redirect = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $celular = htmlspecialchars($_POST['celular']);
    $correo = htmlspecialchars($_POST['correo']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    $mail = new PHPMailer(true);

    try {
        // Server settings (Ajustar credenciales SMTP según el servidor del cliente)
        // $mail->SMTPDebug = 0;                      
        // $mail->isSMTP();                                            
        // $mail->Host       = 'smtp.example.com';                     
        // $mail->SMTPAuth   = true;                                   
        // $mail->Username   = 'user@example.com';                     
        // $mail->Password   = 'secret';                               
        // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
        // $mail->Port       = 465;                                    
        
        // Uso Mail de PHP por defecto si no hay SMTP configurado
        $mail->isMail(); 

        // Recipients
        $mail->setFrom('no-reply@rialgavainternacional.com', 'Sitio Web Rialgava');
        $mail->addAddress('gerencia@rialgavainternacional.com', 'Gerencia Rialgava'); 
        $mail->addReplyTo($correo, $nombre);

        // Content
        $mail->isHTML(true);                                  
        $mail->Subject = 'Nuevo mensaje de contacto desde el sitio web';
        $mail->Body    = "<h2>Nuevo mensaje de contacto</h2>
                          <p><strong>Nombre:</strong> {$nombre}</p>
                          <p><strong>Celular:</strong> {$celular}</p>
                          <p><strong>Correo:</strong> {$correo}</p>
                          <p><strong>Mensaje:</strong><br>{$mensaje}</p>";

        $mail->send();
        $mensaje_estado = "<div style='color: green; font-weight: bold; margin-bottom: 20px;'>Mensaje enviado correctamente. Redirigiendo a WhatsApp...</div>";
        
        // Crear enlace de WhatsApp
        $wa_numero = "573212337131";
        $wa_texto = urlencode("Hola, mi nombre es {$nombre}. Mi correo es {$correo}. Te escribo desde la web: {$mensaje}");
        $whatsapp_redirect = "https://wa.me/{$wa_numero}?text={$wa_texto}";

    } catch (Exception $e) {
        $mensaje_estado = "<div style='color: red; font-weight: bold; margin-bottom: 20px;'>Error al enviar el mensaje. Mailer Error: {$mail->ErrorInfo}</div>";
    }
}
?>
<?php include 'header.php'; ?>

<!-- Header Contacto -->
<section class="hero-nosotros" style="background: url('https://images.unsplash.com/photo-1542744094-3a31f272c490?q=80&w=2560&auto=format&fit=crop') center/cover no-repeat;">
    <div class="container">
        <div class="hero-nosotros-content">
            <h1>Contáctanos</h1>
            <p>Estamos listos para asesorarte. Déjanos tus datos y nos pondremos en contacto contigo lo más pronto posible.</p>
        </div>
    </div>
</section>

<!-- Formulario y Mapa -->
<section style="padding: 80px 0; background-color: var(--bg-light);">
    <div class="container">
        <div style="display: flex; flex-wrap: wrap; gap: 50px;">
            
            <!-- Info y Mapa -->
            <div style="flex: 1; min-width: 300px;">
                <h3 style="font-size: 1.8rem; color: var(--primary-color); margin-bottom: 30px; text-transform: uppercase;">Información</h3>
                <ul class="contact-info" style="color: var(--text-dark); margin-bottom: 40px; font-size: 1.1rem; line-height: 1.8;">
                    <li style="margin-bottom: 20px;"><i class="fa-solid fa-phone" style="color: var(--secondary-color); margin-right: 15px;"></i> 322 5678626 <br> 310 2527004 <br> 322 5621281</li>
                    <li style="margin-bottom: 20px;"><i class="fa-solid fa-envelope" style="color: var(--secondary-color); margin-right: 15px;"></i> gerencia@rialgavainternacional.com <br> administrativo@rialgavainternacional.com <br> aarialgava21@gmail.com - TALENTO HUMANO <br> rialgava5@gmail.com - AREA 0170</li>
                    <li style="margin-bottom: 20px;"><i class="fa-solid fa-location-dot" style="color: var(--secondary-color); margin-right: 15px;"></i> Oficina Principal: Edificio Lotería del Quindío, Carrera 16 No. 19 - 21, Local 3- Armenia, Quindío.</li>
                </ul>
                
                <div style="border-radius: 10px; overflow: hidden; box-shadow: var(--shadow); height: 300px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15918.490150937409!2d-75.68884978715822!3d4.538166599999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e38f4f34daefea3%3A0x6b2d1844bdf9f3df!2sArmenia%2C%20Quind%C3%ADo!5e0!3m2!1ses!2sco!4v1716942054111!5m2!1ses!2sco" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            
            <!-- Formulario -->
            <div style="flex: 1; min-width: 300px; background: white; padding: 40px; border-radius: 10px; box-shadow: var(--shadow);">
                <h3 style="font-size: 1.8rem; color: var(--primary-color); margin-bottom: 20px; text-transform: uppercase;">Formulario de Contacto</h3>
                
                <?= $mensaje_estado; ?>

                <form action="contacto" method="POST">
                    <div style="margin-bottom: 20px;">
                        <input type="text" name="nombre" placeholder="Nombre y Apellido" required style="width: 100%; padding: 15px; border: 1px solid #ddd; border-radius: 5px; font-family: var(--font-main); background: var(--bg-light);">
                    </div>
                    <div style="margin-bottom: 20px;">
                        <input type="text" name="celular" placeholder="Celular" required style="width: 100%; padding: 15px; border: 1px solid #ddd; border-radius: 5px; font-family: var(--font-main); background: var(--bg-light);">
                    </div>
                    <div style="margin-bottom: 20px;">
                        <input type="email" name="correo" placeholder="Correo Electrónico" required style="width: 100%; padding: 15px; border: 1px solid #ddd; border-radius: 5px; font-family: var(--font-main); background: var(--bg-light);">
                    </div>
                    <div style="margin-bottom: 20px;">
                        <textarea name="mensaje" placeholder="¿En qué le podemos ayudar?" rows="5" required style="width: 100%; padding: 15px; border: 1px solid #ddd; border-radius: 5px; font-family: var(--font-main); background: var(--bg-light); resize: vertical;"></textarea>
                    </div>
                    <button type="submit" class="btn-contact" style="width: 100%; border: none; cursor: pointer; padding: 15px; font-size: 1.1rem; text-transform: uppercase;">Enviar</button>
                </form>
            </div>
            
        </div>
    </div>
</section>

<?php if ($whatsapp_redirect != ""): ?>
<script>
    setTimeout(function() {
        window.open("<?= $whatsapp_redirect ?>", "_blank");
    }, 2000);
</script>
<?php endif; ?>

<?php include 'footer.php'; ?>
