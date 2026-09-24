# Agencia de Aduanas Rialgava Internacional Nivel 2 S.A.S — Sitio Web Corporativo

Sitio web oficial y plataforma de información corporativa para la **Agencia de Aduanas Rialgava Internacional Nivel 2 S.A.S**, especializada en agenciamiento aduanero, asesorías en comercio exterior, importaciones, exportaciones y logística integral.

---

## Tabla de Contenidos

- [Descripción General](#descripción-general)
- [Stack Tecnológico](#stack-tecnológico)
- [Estructura del Proyecto](#estructura-del-proyecto)
- [Características y Módulos](#características-y-módulos)
- [Requisitos del Sistema](#requisitos-del-sistema)
- [Instalación y Despliegue Local](#instalación-y-despliegue-local)
- [Configuración Técnica](#configuración-técnica)
  - [Reescritura de URLs (.htaccess)](#reescritura-de-urls-htaccess)
  - [Configuración de Envío de Correo (PHPMailer)](#configuración-de-envío-de-correo-phpmailer)
- [Seguridad y Buenas Prácticas](#seguridad-y-buenas-prácticas)
- [Licencia y Créditos](#licencia-y-créditos)

---

## Descripción General

Este proyecto consiste en una aplicación web dinámica desarrollada en **PHP** modular, sin frameworks pesados, optimizada para ofrecer un alto rendimiento, facilidad de mantenimiento y una experiencia de usuario fluida y adaptable (responsive design).

Permite a los clientes y usuarios:
- Conocer los servicios aduaneros y logísticos de la empresa.
- Consultar información corporativa, misión, visión y valores.
- Descargar documentación reglamentaria y legal en formato PDF (Código de ética, manual anticorrupción, reglamentos, portafolios).
- Enviar solicitudes de contacto mediante formulario con notificación por correo electrónico y enlace directo a WhatsApp.

---

## Stack Tecnológico

| Capa | Tecnología | Descripción |
| :--- | :--- | :--- |
| **Backend** | PHP (>= 7.4 / 8.x) | Lógica del servidor, modularización de vistas y procesamiento de formularios |
| **Servidor Web** | Apache | Servidor HTTP con módulo `mod_rewrite` habilitado |
| **Librería de Correo** | PHPMailer v6.x | Gestión de envíos de correos electrónicos transaccionales vía SMTP/mail |
| **Frontend** | HTML5 semántico | Maquetación web estructurada y accesible |
| **Estilos** | CSS3 nativo (`assets/css/style.css`) | Variables CSS (Custom Properties), Flexbox, CSS Grid y Media Queries |
| **Iconografía y Tipografía**| FontAwesome 6 & Google Fonts | Iconos vectoriales y fuente *Inter* |

---

## Estructura del Proyecto

```text
Rialgava/
│
├── .htaccess                 # Reglas de Apache: enrutamiento y URLs limpias sin .php
├── README.md                 # Documentación técnica del proyecto
│
├── header.php                # Cabecera global, barra superior de contacto y barra de navegación
├── footer.php                # Pie de página global con enlaces y datos de contacto
│
├── inicio.php                # Página principal (Home, Hero, Servicios, Métricas, Call to Action)
├── nosotros.php              # Información institucional (Misión, Visión, Valores, Historia)
├── contacto.php              # Formulario de contacto, integración PHPMailer y enlace a WhatsApp
├── galeria.php               # Galería multimedia de operaciones y equipo
│
├── assets/
│   └── css/
│       └── style.css         # Hoja de estilos centralizada (tema visual, layout, responsive)
│
├── descargas/
│   └── PDF/                  # Documentación legal y corporativa descargable
│       ├── CHECK LIST DOCUMENTOS CLIENTES.pdf
│       ├── CHECK-LIST-PARA-CONTRATACION-DE-PERSONAL.pdf
│       ├── CODIGO-DE-ETICA-julio-15-de-2024.pdf
│       ├── MANUAL-DE-POLITICA-ANTICORRUSION-RIALGAVA.pdf
│       ├── PORTAFOLIO-DE-SERVICIOS-CLIENTES.pdf
│       └── REGLAMENTO INTERNO DE TRABAJO 2026.pdf
│
├── upload/                   # Recursos visuales (logotipos, sliders, imágenes de servicios)
│
└── vendor/
    └── PHPMailer/            # Librería PHPMailer para gestión de correos
```

---

## Características y Módulos

### 1. Navegación Modular y Detección de Página Activa
El archivo `header.php` implementa una función auxiliar `is_active($page_name)` para resaltar automáticamente el enlace del menú correspondiente a la página en la que se encuentra el usuario.

### 2. Formulario de Contacto Híbrido (`contacto.php`)
- **Procesamiento en Servidor:** Captura y sanitiza los campos `nombre`, `celular`, `correo` y `mensaje` mediante `htmlspecialchars()`.
- **Notificación por Correo:** Envío mediante `PHPMailer` hacia la gerencia de la empresa (`gerencia@rialgavainternacional.com`).
- **Integración con WhatsApp:** Genera automáticamente un enlace directo a la API de WhatsApp (`wa.me`) con el mensaje preformateado para respuesta inmediata.

### 3. Centro de Documentación y Descargas
Menús desplegables en la barra de navegación que permiten visualizar y descargar directamente los PDFs normativos e informativos de la empresa.

### 4. URLs Amigables (Clean URLs)
Configurado a través de `.htaccess` para que los usuarios puedan acceder a las rutas sin escribir la extensión `.php` (ejemplo: `/nosotros` en lugar de `/nosotros.php`).

---

## Requisitos del Sistema

- Servidor web **Apache 2.4+** con módulo `mod_rewrite` activo.
- **PHP 7.4** o superior (compatible con PHP 8.0, 8.1, 8.2 y 8.3).
- Extensión `curl` y `openssl` habilitadas en PHP (requeridas si se utiliza SMTP seguro).
- Entorno de desarrollo recomendado: **XAMPP**, **WampServer**, **Laragon** o contenedor Docker con Apache+PHP.

---

## Instalación y Despliegue Local

1. **Clonar o copiar el repositorio** en la carpeta de documentos de tu servidor web local (por ejemplo en XAMPP):
   ```bash
   cd C:\xampp\htdocs
   git clone https://github.com/Alej2299/Web-site.git Rialgava
   ```

2. **Iniciar el servidor Apache** desde el panel de control de XAMPP.

3. **Verificar el módulo `mod_rewrite`**:
   Asegúrate de que en el archivo `httpd.conf` de Apache la siguiente línea esté descomentada:
   ```apache
   LoadModule rewrite_module modules/mod_rewrite.so
   ```
   Y que en la sección `<Directory "C:/xampp/htdocs">` se permita la sobreescritura:
   ```apache
   AllowOverride All
   ```

4. **Acceder a la aplicación:**
   Abre tu navegador web y visita:
   ```
   http://localhost/Rialgava/
   ```

---

## Configuración Técnica

### Reescritura de URLs (.htaccess)
El archivo `.htaccess` contiene:
```apache
DirectoryIndex inicio.php
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^([^\.]+)$ $1.php [NC,L]
```
Esto asegura que la página inicial predeterminada sea `inicio.php` y que las rutas internas se resuelvan de forma limpia.

### Configuración de Envío de Correo (PHPMailer)
En [contacto.php](contacto.php), por defecto se utiliza la función nativa `mail()` del servidor:
```php
$mail->isMail();
```
Para habilitar el envío seguro a través de un servidor **SMTP** corporativo o de proveedores como Gmail, Outlook o cPanel, edita las líneas comentadas en `contacto.php`:

```php
$mail->isSMTP();
$mail->Host       = 'smtp.tudominio.com';
$mail->SMTPAuth   = true;
$mail->Username   = 'usuario@tudominio.com';
$mail->Password   = 'tu_contraseña_o_app_password';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // O PHPMailer::ENCRYPTION_STARTTLS
$mail->Port       = 465; // O 587
```

---

## Seguridad y Buenas Prácticas

- **Sanitización de Entradas:** Todas las variables de entrada de usuario (`$_POST`) son sanitizadas para evitar ataques de tipo XSS.
- **Protección de Datos:** Las credenciales y claves sensibles deben almacenarse en variables de entorno o en archivos de configuración excluidos del control de versiones (`.gitignore`).
- **Manejo de Errores:** Las excepciones generadas por el servicio de correo son capturadas en bloques `try...catch` sin exponer trazas de error críticas al usuario final.

---

## Licencia y Créditos

- **Empresa:** Agencia de Aduanas Rialgava Internacional Nivel 2 S.A.S.
- **Desarrollador / Mantenedor:** Alejandro Suarez ([@Alej2299](https://github.com/Alej2299))
- **Ubicación:** Edificio Lotería del Quindío, Carrera 16 No. 19 - 21, Local 3, Armenia, Quindío, Colombia.
