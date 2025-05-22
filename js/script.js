document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.getElementById('menuToggle');
    const navigation = document.getElementById('main-navigation');
    const navLinks = document.querySelectorAll('#main-navigation a');

    // Gestisci il click sul toggle per aprire/chiudere il menu
    menuToggle.addEventListener('click', function () {
        const isOpen = menuToggle.classList.toggle('open');
        navigation.classList.toggle('open');
        menuToggle.setAttribute('aria-expanded', isOpen);
    });

    // Chiudi il menu quando clicchi fuori
    document.addEventListener('click', function(e) {
        if (!menuToggle.contains(e.target) && !navigation.contains(e.target)) {
            menuToggle.classList.remove('open');
            navigation.classList.remove('open');
            menuToggle.setAttribute('aria-expanded', 'false');
        }
    });

    // Chiudi il menu e fai scroll fluido alla sezione
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);

            if (targetSection) {
                e.preventDefault();

                // Chiudi il menu
                menuToggle.classList.remove('open');
                navigation.classList.remove('open');
                menuToggle.setAttribute('aria-expanded', 'false');

                // Scroll fluido
                targetSection.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});
