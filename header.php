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
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>

<header>
    <div class="logo">
        <a href="index.php" aria-label="Vai alla home">
            <img src="img/logo.jpg" alt="Logo Maremma Che Sagra" style="height: 60px;">
        </a>
    </div>

    <div class="menu-toggle" onclick="toggleMenu()" aria-label="Apri menu">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <nav class="navigation">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="eventi.php">Eventi</a></li>
            <li><a href="sponsor.php">Sponsorizzazioni</a></li>
            <li><a href="contatti.php">Contatti</a></li>
        </ul>
    </nav>
</header>

<script>
    function toggleMenu() {
        const menu = document.querySelector('.navigation');
        const toggle = document.querySelector('.menu-toggle');
        menu.classList.toggle('open');
        toggle.classList.toggle('open');
    }
</script>

</body>
</html>