<?php
$page_title = "Privacy Policy & Cookie Policy | Maremma Che Sagra";
include('header.php'); ?>
<main style="max-width: 900px; margin: 40px auto; padding: 0 20px; font-family: 'Kumbh Sans', sans-serif; line-height: 1.6;">

  <h1>Privacy Policy</h1>

  <p>This document describes how we handle the personal data of users who visit our website.</p>

  <h2>Data Controller</h2>
  <p>The data controller is Maremma Che Sagra, based in Tuscany, Italy. For any privacy-related inquiries, you can contact us at: 
  <a href="mailto:maremmachesagra@gmail.com">maremmachesagra@gmail.com</a>.</p>

  <h2>Types of Data Collected</h2>
  <p>We collect personal data only if voluntarily provided by the user (e.g., via contact forms). 
  We do not collect sensitive data nor do we share data with third parties.</p>

  <h2>Purpose of Processing</h2>
  <p>The collected data is used exclusively to respond to user requests, improve the service offered, 
  and manage the delivery of advertising services (such as Google Ads).</p>

  <h2>Cookies</h2>
  <p>We use technical cookies to improve navigation and third-party cookies, such as Google Ads cookies, 
  to provide personalized advertising and monitor advertising performance.</p>

  <h1>Cookie Policy</h1>

  <p>Cookies are small text files stored on the user’s device to improve browsing experience and for advertising purposes.</p>

  <h2>Types of Cookies Used</h2>
  <ul>
    <li><strong>Technical Cookies:</strong> necessary for the proper functioning of the website.</li>
    <li><strong>Third-party Cookies:</strong> include advertising cookies from Google Ads and other external services.</li>
  </ul>

  <h2>Cookie Management</h2>
  <p>Users can manage and disable cookies via their browser settings. Disabling technical cookies may cause some features to not work properly. 
  Consent to the use of advertising cookies is explicitly required through the cookie banner.</p>

  <h2>Further Information</h2>
  <p>For more details, contact <a href="mailto:maremmachesagra@gmail.com">maremmachesagra@gmail.com</a>.</p>

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

