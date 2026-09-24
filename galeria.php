<?php include 'header.php'; ?>

<!-- Header Galería -->
<section class="hero-nosotros" style="background: url('upload/aerial_port_1782597594105.png') center/cover fixed;">
    <div class="container">
        <div class="hero-nosotros-content">
            <h1>Galería</h1>
            <p>Momentos destacados, nuestro equipo y la pasión que ponemos en nuestro trabajo diario.</p>
        </div>
    </div>
</section>

<!-- Galería Grid -->
<section style="padding: 80px 0; background-color: var(--bg-light);">
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(350px, 1fr)); gap: 25px;">
            
            <?php
            $imagenes_cumpleanos = [
                'aerial_port_1782597594105.png',
                'port_cargo_ship_1782597567490.png',
                'port_cranes_1782597581399.png',
                'stacked_containers_1782597606715.png'
            ];

            foreach ($imagenes_cumpleanos as $img) {
                echo '<div style="overflow: hidden; border-radius: 12px; box-shadow: 0 10px 25px rgba(0,0,0,0.1); height: 300px;">';
                echo '<img src="upload/' . htmlspecialchars($img) . '" alt="Galería Rialgava" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s ease;" onmouseover="this.style.transform=\'scale(1.08)\'" onmouseout="this.style.transform=\'scale(1)\'">';
                echo '</div>';
            }
            ?>

        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
