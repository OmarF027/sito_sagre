<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Maremma Che Sagra</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/eventi.css">
    <link rel="stylesheet" href="css/contatti.css">
    <link rel="stylesheet" href="css/mediaqueries.css">

</head>
<body>

<header>
    <div class="logo">
        <a href="index.php" aria-label="Vai alla home">
            <img src="img/logo2.jpg" alt="Logo Maremma Che Sagra" style="height: 60px;">
        </a>
    </div>

    <!-- Menu Toggle sempre visibile -->
    <div class="menu-toggle" id="menuToggle" aria-label="Apri menu" aria-expanded="false" aria-controls="main-navigation">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <!-- Menu di navigazione -->
    <nav class="navigation" id="main-navigation">
        <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#eventi">Eventi</a></li>
        <li><a href="#contatti">Sponsorizzazioni</a></li>
        </ul>
    </nav>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const menuToggle = document.getElementById('menuToggle');
        const navigation = document.getElementById('main-navigation');
        const navLinks = document.querySelectorAll('#main-navigation a');

        menuToggle.addEventListener('click', function () {
            const isOpen = menuToggle.classList.toggle('open');
            navigation.classList.toggle('open');
            menuToggle.setAttribute('aria-expanded', isOpen);
        });

        // Chiudi menu cliccando fuori
        document.addEventListener('click', function(e) {
            if (!menuToggle.contains(e.target) && !navigation.contains(e.target)) {
                menuToggle.classList.remove('open');
                navigation.classList.remove('open');
                menuToggle.setAttribute('aria-expanded', 'false');
            }
        });

        // Chiudi menu e fai scroll alla sezione
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
</script>
