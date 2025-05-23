document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.getElementById('menuToggle');
    const navigation = document.getElementById('main-navigation');
    const navLinks = document.querySelectorAll('#main-navigation a');
    const body = document.body;

    // Toggle menu apertura/chiusura
    menuToggle.addEventListener('click', function () {
        const isOpen = menuToggle.classList.toggle('open');
        navigation.classList.toggle('open');
        menuToggle.setAttribute('aria-expanded', isOpen);
        
        // Blocca lo scrolling del body quando il menu è aperto
        if (isOpen) {
            body.style.overflow = 'hidden';
        } else {
            body.style.overflow = 'auto';
        }
    });

    // Chiudi menu cliccando fuori
    document.addEventListener('click', function(e) {
        if (!menuToggle.contains(e.target) && !navigation.contains(e.target)) {
            menuToggle.classList.remove('open');
            navigation.classList.remove('open');
            menuToggle.setAttribute('aria-expanded', 'false');
            body.style.overflow = 'auto'; // Riabilita scrolling
        }
    });

    // Scroll fluido e chiusura menu cliccando su link
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);

            if (targetSection) {
                e.preventDefault();

                menuToggle.classList.remove('open');
                navigation.classList.remove('open');
                menuToggle.setAttribute('aria-expanded', 'false');
                body.style.overflow = 'auto'; // Riabilita scrolling

                targetSection.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});