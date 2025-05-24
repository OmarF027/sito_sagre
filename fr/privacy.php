<?php 
$page_title = "Politique de confidentialité et de cookies | Maremma Che Sagra"; 
include('header.php'); 
?>
<main style="max-width: 900px; margin: 40px auto; padding: 0 20px; font-family: 'Kumbh Sans', sans-serif; line-height: 1.6;">

  <h1>Politique de confidentialité</h1>

  <p>Ce document décrit comment nous gérons les données personnelles des utilisateurs qui visitent notre site.</p>

  <h2>Responsable du traitement</h2>
  <p>Le responsable du traitement est Maremma Che Sagra, situé en Toscane, Italie. Pour toute demande concernant la confidentialité, vous pouvez nous contacter à l'adresse email suivante : 
  <a href="mailto:maremmachesagra@gmail.com">maremmachesagra@gmail.com</a>.</p>

  <h2>Types de données collectées</h2>
  <p>Nous collectons des données personnelles uniquement si elles sont fournies volontairement par l'utilisateur (par exemple via des formulaires de contact). 
  Nous ne collectons pas de données sensibles et ne les partageons pas avec des tiers.</p>

  <h2>Finalités du traitement</h2>
  <p>Les données collectées sont utilisées exclusivement pour répondre aux demandes des utilisateurs, améliorer le service offert et gérer la fourniture de services publicitaires (comme Google Ads).</p>

  <h2>Cookies</h2>
  <p>Nous utilisons des cookies techniques pour améliorer la navigation ainsi que des cookies tiers, tels que ceux de Google Ads, pour fournir des publicités personnalisées et suivre les performances publicitaires.</p>

  <h1>Politique de cookies</h1>

  <p>Les cookies sont de petits fichiers texte stockés sur l'appareil de l'utilisateur pour améliorer l'expérience de navigation et à des fins publicitaires.</p>

  <h2>Types de cookies utilisés</h2>
  <ul>
    <li><strong>Cookies techniques :</strong> nécessaires au bon fonctionnement du site.</li>
    <li><strong>Cookies tiers :</strong> incluent les cookies publicitaires de Google Ads et d'autres services externes.</li>
  </ul>

  <h2>Gestion des cookies</h2>
  <p>L'utilisateur peut gérer et désactiver les cookies via les paramètres de son navigateur. 
  La désactivation des cookies techniques peut empêcher certaines fonctionnalités de fonctionner correctement. 
  Le consentement à l'utilisation des cookies publicitaires est explicitement demandé via la bannière de cookies.</p>

  <h2>Informations complémentaires</h2>
  <p>Pour plus de détails, contactez <a href="mailto:maremmachesagra@gmail.com">maremmachesagra@gmail.com</a>.</p>

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