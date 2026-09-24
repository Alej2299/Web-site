    <!-- Footer -->
    <footer>
        <!-- Mapa de ubicación -->
        <div class="footer-map" style="width: 100%; height: 350px; background-color: #eee;">
            <iframe 
                src="https://maps.google.com/maps?q=Cra.+16+%2319-21,+Armenia,+Quind%C3%ADo,+Colombia&t=&z=16&ie=UTF8&iwloc=&output=embed" 
                width="100%" 
                height="100%" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        
        <div class="container footer-grid" style="padding-top: 60px;">
            <div class="footer-col">
                <img src="upload/logo-rialgava-blanco.png" alt="Rialgava Blanco" style="height: 80px; margin-bottom: 20px;">
                <p style="font-size: 0.9rem; margin-bottom: 15px;">
                    Agencia de aduanas con amplia trayectoria, garantizando la seguridad, transparencia y eficiencia en todas las operaciones de comercio exterior.
                </p>
                <div class="social-links" style="display: flex; gap: 10px;">
                    <a href="#" style="background: rgba(255,255,255,0.1); padding: 10px; border-radius: 50%;"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" style="background: rgba(255,255,255,0.1); padding: 10px; border-radius: 50%;"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" style="background: rgba(255,255,255,0.1); padding: 10px; border-radius: 50%;"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>
            
            <div class="footer-col">
                <h4>Enlaces Rápidos</h4>
                <ul class="footer-links">
                    <li><a href="inicio">Inicio</a></li>
                    <li><a href="nosotros">Nosotros</a></li>
                    <li><a href="galeria">Galería</a></li>
                    <li><a href="contacto">Contáctanos</a></li>
                </ul>
            </div>
            
            <div class="footer-col">
                <h4>Contáctanos</h4>
                <ul class="contact-info">
                    <li>
                        <i class="fa-solid fa-location-dot"></i>
                        <span>Edificio Lotería del Quindío, Carrera 16 No. 19 - 21, Local 3- Armenia, Quindío.</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-phone"></i>
                        <span>322 5678626 <br> 310 2527004 <br> 322 5621281</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-envelope"></i>
                        <span>gerencia@rialgavainternacional.com <br> operaciones@rialgavainternacional.com <br> aarialgava21@gmail.com - TALENTO HUMANO <br> rialgava5@gmail.com - AREA 0170</span>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="container">
                <p>&copy; <?= date("Y"); ?> Agencia de Aduanas Rialgava Internacional Nivel 2. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Botón flotante WhatsApp -->
    <a href="https://wa.me/573212337131" target="_blank" style="position: fixed; bottom: 20px; right: 20px; background-color: #25d366; color: white; border-radius: 50%; width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; font-size: 30px; box-shadow: 0 4px 10px rgba(0,0,0,0.3); z-index: 1000; transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
        <i class="fa-brands fa-whatsapp"></i>
    </a>

    <!-- Custom JS (Opcional por ahora) -->
    <script src="assets/js/script.js"></script>
</body>
</html>
