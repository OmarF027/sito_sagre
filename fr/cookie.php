<style>
  #cookie-banner {
    position: fixed;
    bottom: 0;
    left: 0; right: 0;
    background: #222;
    color: white;
    padding: 15px 20px;
    font-size: 14px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 9999;
    box-shadow: 0 -2px 8px rgba(0,0,0,0.3);
  }
  #cookie-banner button {
    margin-left: 10px;
    background: #4caf50;
    border: none;
    color: white;
    padding: 8px 12px;
    border-radius: 4px;
    cursor: pointer;
  }
  #cookie-banner button.reject {
    background: #f44336;
  }
  #cookie-banner a {
    color: #81d4fa;
    text-decoration: underline;
  }
</style>

<div id="cookie-banner" role="region" aria-label="Bannière de consentement aux cookies">
  <div>
    Ce site utilise des cookies techniques pour améliorer votre expérience. 
    <a href="privacy.php" target="_blank" rel="noopener">Lisez notre politique de confidentialité</a>.
  </div>
  <div>
    <button id="accept-cookies">Accepter</button>
    <button id="reject-cookies" class="reject">Refuser</button>
  </div>
</div>

<script>
  // Funzione per salvare scelta in cookie
  function setCookie(name, value, days) {
    const d = new Date();
    d.setTime(d.getTime() + (days*24*60*60*1000));
    document.cookie = name + "=" + value + ";path=/;expires=" + d.toUTCString();
  }

  // Funzione per leggere cookie
  function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
  }

  // Funzione per caricare Google AdSense
  function loadAdSense() {
    var adsenseScript = document.createElement('script');
    adsenseScript.async = true;
    adsenseScript.src = "https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js";
    adsenseScript.setAttribute('data-ad-client', 'tuo-client-id-google'); // Sostituisci con il tuo client ID AdSense
    document.head.appendChild(adsenseScript);
  }

  // Controlla se cookie consenso esiste già
  window.addEventListener('load', () => {
    const consent = getCookie('cookie_consent');
    if(consent === 'accepted') {
      loadAdSense();
      document.getElementById('cookie-banner').style.display = 'none';
    } else if (consent === 'rejected') {
      document.getElementById('cookie-banner').style.display = 'none';
    }
  });

  // Eventi sui bottoni
  document.getElementById('accept-cookies').addEventListener('click', () => {
    setCookie('cookie_consent', 'accepted', 365);
    document.getElementById('cookie-banner').style.display = 'none';
    loadAdSense();
  });

  document.getElementById('reject-cookies').addEventListener('click', () => {
    setCookie('cookie_consent', 'rejected', 365);
    document.getElementById('cookie-banner').style.display = 'none';
    // Non caricare AdSense
  });
</script>