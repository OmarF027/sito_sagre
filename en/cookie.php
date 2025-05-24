<?php
// Puoi inserire qui eventuali logiche PHP se serve, per ora solo il banner.
?>

<!-- Banner Cookie -->
<div id="cookie-banner" style="position: fixed; bottom: 0; width: 100%; background: #222; color: white; padding: 15px; text-align: center; z-index: 9999;">
   This site uses technical cookies to improve your browsing experience. <a href="privacy.php" style="color: #4FC3F7; text-decoration: underline;">Read our privacy policy</a>. 
  <button id="accept-cookies" style="margin-left: 10px; padding: 8px 15px; cursor: pointer;">Accept</button>
</div>

<script>
  function checkCookieConsent() {
    if(localStorage.getItem('cookieConsent') === 'true') {
      document.getElementById('cookie-banner').style.display = 'none';
    } else {
      document.getElementById('cookie-banner').style.display = 'block';
    }
  }

  document.getElementById('accept-cookies').addEventListener('click', function() {
    localStorage.setItem('cookieConsent', 'true');
    document.getElementById('cookie-banner').style.display = 'none';
  });

  window.onload = checkCookieConsent;
</script>