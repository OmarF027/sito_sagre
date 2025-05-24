<?php 
$page_title = "Datenschutz & Cookie-Richtlinie | Maremma Che Sagra"; 
include('header.php'); ?>
<main style="max-width: 900px; margin: 40px auto; padding: 0 20px; font-family: 'Kumbh Sans', sans-serif; line-height: 1.6;">

  <h1>Datenschutzerklärung</h1>

  <p>Dieses Dokument beschreibt, wie wir die personenbezogenen Daten der Nutzer verwalten, die unsere Website besuchen.</p>

  <h2>Verantwortlicher für die Datenverarbeitung</h2>
  <p>Verantwortlicher für die Datenverarbeitung ist Maremma Che Sagra mit Sitz in der Toskana, Italien. Für Fragen zum Datenschutz können Sie uns unter folgender E-Mail-Adresse kontaktieren: 
  <a href="mailto:maremmachesagra@gmail.com">maremmachesagra@gmail.com</a>.</p>

  <h2>Art der erhobenen Daten</h2>
  <p>Wir erheben personenbezogene Daten nur, wenn diese freiwillig vom Nutzer bereitgestellt werden (z.B. über Kontaktformulare). 
  Sensible Daten werden nicht erhoben oder an Dritte weitergegeben.</p>

  <h2>Zweck der Datenverarbeitung</h2>
  <p>Die erhobenen Daten werden ausschließlich verwendet, um auf Anfragen der Nutzer zu antworten, den angebotenen Service zu verbessern 
  und die Bereitstellung von Werbediensten (wie Google Ads) zu verwalten.</p>

  <h2>Cookies</h2>
  <p>Wir verwenden technische Cookies, um die Navigation zu verbessern, sowie Drittanbieter-Cookies, wie jene von Google Ads, 
  um personalisierte Werbung anzubieten und die Werbeleistung zu überwachen.</p>

  <h1>Cookie-Richtlinie</h1>

  <p>Cookies sind kleine Textdateien, die auf dem Gerät des Nutzers gespeichert werden, um die Benutzererfahrung zu verbessern und zu Werbezwecken.</p>

  <h2>Verwendete Cookie-Typen</h2>
  <ul>
    <li><strong>Technische Cookies:</strong> notwendig für die ordnungsgemäße Funktion der Website.</li>
    <li><strong>Drittanbieter-Cookies:</strong> beinhalten Werbecookies von Google Ads und anderen externen Diensten.</li>
  </ul>

  <h2>Cookie-Verwaltung</h2>
  <p>Der Nutzer kann Cookies über die Einstellungen seines Browsers verwalten und deaktivieren. 
  Das Deaktivieren technischer Cookies kann dazu führen, dass einige Funktionen nicht mehr richtig funktionieren. 
  Die Zustimmung zur Nutzung von Werbecookies wird ausdrücklich über das Cookie-Banner eingeholt.</p>

  <h2>Weitere Informationen</h2>
  <p>Für weitere Details kontaktieren Sie bitte <a href="mailto:maremmachesagra@gmail.com">maremmachesagra@gmail.com</a>.</p>

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
