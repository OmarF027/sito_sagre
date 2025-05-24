<div id="cookie-banner" style="position: fixed; bottom: 0; left: 0; width: 100%; background: #222; color: #fff; padding: 15px; text-align: center; z-index: 9999; font-family: sans-serif;">
    Ce site utilise des cookies techniques pour améliorer votre expérience de navigation. <a href="privacy.php" style="color: #4FC3F7; text-decoration: underline;">Lisez notre politique de confidentialité</a>.
    <button id="accept-cookies" style="margin-left: 10px; padding: 8px 15px; cursor: pointer;">Accepter</button>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const banner = document.getElementById('cookie-banner');
    const acceptBtn = document.getElementById('accept-cookies');

    if (localStorage.getItem('cookiesAccepted')) {
        banner.style.display = 'none';
    }

    acceptBtn.addEventListener('click', function() {
        localStorage.setItem('cookiesAccepted', 'true');
        banner.style.display = 'none';
    });
});
</script>
