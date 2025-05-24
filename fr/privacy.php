<?php 
$page_title = "Politique de confidentialité et de cookies | Maremma Che Sagra"; 
include('header.php'); 
?>
<main style="max-width: 900px; margin: 40px auto; padding: 0 20px; font-family: 'Kumbh Sans', sans-serif; line-height: 1.6;">

  <h1>Politique de confidentialité</h1>

  <p>Ce document décrit comment nous traitons les données personnelles des utilisateurs qui visitent notre site web.</p>

  <h2>Responsable du traitement</h2>
  <p>Le responsable du traitement est Maremma Che Sagra, situé en Toscane, Italie. Pour toute demande liée à la confidentialité, vous pouvez nous contacter à l'adresse email : 
  <a href="mailto:maremmachesagra@gmail.com">maremmachesagra@gmail.com</a>.</p>

  <h2>Types de données collectées</h2>
  <p>Nous collectons les données personnelles uniquement si elles sont fournies volontairement par l'utilisateur (par exemple, via le formulaire de contact).
  Nous ne collectons pas de données sensibles et ne partageons pas de données avec des tiers.</p>

  <h2>Finalité du traitement</h2>
  <p>Les données collectées sont utilisées exclusivement pour répondre aux demandes des utilisateurs
  et pour améliorer le service fourni.</p>

  <h2>Cookies</h2>
  <p>Nous utilisons des cookies techniques pour améliorer la navigation. Nous n'utilisons pas de cookies de profilage.</p>

  <h1>Politique des cookies</h1>

  <p>Les cookies sont de petits fichiers texte stockés sur l'appareil de l'utilisateur afin d'améliorer l'expérience de navigation.</p>

  <h2>Types de cookies utilisés</h2>
  <ul>
    <li><strong>Cookies techniques :</strong> nécessaires au bon fonctionnement du site web.</li>
    <li><strong>Cookies tiers :</strong> nous pouvons intégrer du contenu externe qui utilise ses propres cookies.</li>
  </ul>

  <h2>Gestion des cookies</h2>
  <p>L'utilisateur peut gérer et désactiver les cookies via les paramètres de son navigateur.
  En désactivant les cookies techniques, certaines fonctionnalités peuvent ne pas fonctionner correctement.</p>

  <h2>Informations complémentaires</h2>
  <p>Pour plus de détails, veuillez contacter <a href="mailto:maremmachesagra@gmail.com">maremmachesagra@gmail.com</a>.</p>
  
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