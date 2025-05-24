<?php include('header.php'); ?>
<main style="max-width: 900px; margin: 40px auto; padding: 0 20px; font-family: 'Kumbh Sans', sans-serif; line-height: 1.6;">

  <h1>Privacy Policy</h1>

  <p>Questo documento descrive come gestiamo i dati personali degli utenti che visitano il nostro sito.</p>

  <h2>Titolare del trattamento</h2>
  <p>Il titolare del trattamento è Maremma Che Sagra, con sede in Toscana, Italia. Per qualsiasi
  richiesta riguardante la privacy, è possibile contattarci all'indirizzo email: 
  <a href="mailto:maremmachesagra@gmail.com">maremmachesagra@gmail.com</a>.</p>

  <h2>Tipi di dati raccolti</h2>
  <p>Raccogliamo dati personali solo se forniti volontariamente dall’utente (es. tramite form di contatto).
  Non raccogliamo dati sensibili né li cediamo a terzi.</p>

  <h2>Finalità del trattamento</h2>
  <p>I dati raccolti sono utilizzati esclusivamente per rispondere alle richieste degli utenti
  e per migliorare il servizio offerto.</p>

  <h2>Cookie</h2>
  <p>Utilizziamo cookie tecnici per migliorare la navigazione. Non utilizziamo cookie di profilazione.</p>

  <h1>Cookie Policy</h1>

  <p>I cookie sono piccoli file di testo memorizzati sul dispositivo dell’utente per migliorare l’esperienza di navigazione.</p>

  <h2>Tipologie di cookie utilizzati</h2>
  <ul>
    <li><strong>Cookie tecnici:</strong> necessari per il corretto funzionamento del sito.</li>
    <li><strong>Cookie di terze parti:</strong> potremmo integrare contenuti esterni che utilizzano cookie propri.</li>
  </ul>

  <h2>Gestione dei cookie</h2>
  <p>L’utente può gestire e disabilitare i cookie tramite le impostazioni del proprio browser.
  Disabilitando i cookie tecnici, alcune funzionalità potrebbero non funzionare correttamente.</p>

  <h2>Ulteriori informazioni</h2>
  <p>Per maggiori dettagli, contattare <a href="mailto:maremmachesagra@gmail.com">maremmachesagra@gmail.com</a>.</p>

</main>

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


