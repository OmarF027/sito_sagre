<?php
$page_title = "Política de privacidad y cookies | Maremma Che Sagra";
include('header.php'); ?>
<main style="max-width: 900px; margin: 40px auto; padding: 0 20px; font-family: 'Kumbh Sans', sans-serif; line-height: 1.6;">

  <h1>Política de Privacidad</h1>

  <p>Este documento describe cómo gestionamos los datos personales de los usuarios que visitan nuestro sitio web.</p>

  <h2>Responsable del tratamiento</h2>
  <p>El responsable del tratamiento es Maremma Che Sagra, con sede en Toscana, Italia. Para cualquier consulta relacionada con la privacidad, puede contactarnos en: 
  <a href="mailto:maremmachesagra@gmail.com">maremmachesagra@gmail.com</a>.</p>

  <h2>Tipos de datos recopilados</h2>
  <p>Recopilamos datos personales solo si son proporcionados voluntariamente por el usuario (por ejemplo, a través de formularios de contacto). 
  No recopilamos datos sensibles ni los cedemos a terceros.</p>

  <h2>Finalidad del tratamiento</h2>
  <p>Los datos recopilados se utilizan exclusivamente para responder a las solicitudes de los usuarios, mejorar el servicio ofrecido 
  y gestionar la prestación de servicios publicitarios (como Google Ads).</p>

  <h2>Cookies</h2>
  <p>Utilizamos cookies técnicas para mejorar la navegación y cookies de terceros, como las cookies de Google Ads, 
  para ofrecer publicidad personalizada y monitorizar el rendimiento publicitario.</p>

  <h1>Política de Cookies</h1>

  <p>Las cookies son pequeños archivos de texto almacenados en el dispositivo del usuario para mejorar la experiencia de navegación y para fines publicitarios.</p>

  <h2>Tipos de cookies utilizadas</h2>
  <ul>
    <li><strong>Cookies técnicas:</strong> necesarias para el correcto funcionamiento del sitio web.</li>
    <li><strong>Cookies de terceros:</strong> incluyen cookies publicitarias de Google Ads y otros servicios externos.</li>
  </ul>

  <h2>Gestión de cookies</h2>
  <p>El usuario puede gestionar y desactivar las cookies a través de la configuración de su navegador. 
  Desactivar las cookies técnicas puede hacer que algunas funciones no funcionen correctamente. 
  El consentimiento para el uso de cookies publicitarias se requiere explícitamente mediante el banner de cookies.</p>

  <h2>Información adicional</h2>
  <p>Para más detalles, contacte con <a href="mailto:maremmachesagra@gmail.com">maremmachesagra@gmail.com</a>.</p>

</main>

<?php include('cookie.php'); ?>  
<?php include('footer.php'); ?>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const menuToggle = document.getElementById('menuToggle');
  const navigation = document.getElementById('main-navigation');
  const body = document.body;

  menuToggle.addEventListener('click', function () {
    const isOpen = menuToggle.classList.toggle('open');
    navigation.classList.toggle('open');
    menuToggle.setAttribute('aria-expanded', isOpen);
    body.style.overflow = isOpen ? 'hidden' : 'auto';
  });

  // Chiudi il menu se clicchi fuori
  document.addEventListener('click', function (e) {
    if (!menuToggle.contains(e.target) && !navigation.contains(e.target)) {
      menuToggle.classList.remove('open');
      navigation.classList.remove('open');
      menuToggle.setAttribute('aria-expanded', 'false');
      body.style.overflow = 'auto';
    }
  });

  // Chiudi menu quando clicchi su un link (che in privacy.php fa redirect a index.php)
  document.querySelectorAll('#main-navigation a').forEach(link => {
    link.addEventListener('click', function () {
      menuToggle.classList.remove('open');
      navigation.classList.remove('open');
      menuToggle.setAttribute('aria-expanded', 'false');
      body.style.overflow = 'auto';
    });
  });
});
</script>

