<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Maremma Che Sagra</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" />
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/home.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/eventi.css" />
    <link rel="stylesheet" href="css/contatti.css" />
    <link rel="stylesheet" href="css/mediaqueries.css" />
    <style>
        header {
            display: flex;
            align-items: center;
            padding: 10px 20px;
        }
        .logo-language {
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .language-selector select {
            font-family: 'Kumbh Sans', sans-serif;
            font-weight: 700;
            font-size: 14px;
            padding: 6px 30px 6px 10px;
            border: 1.5px solid #ccc;
            border-radius: 4px;
            background: white url('data:image/svg+xml;utf8,<svg fill="%23666" height="10" viewBox="0 0 20 20" width="10" xmlns="http://www.w3.org/2000/svg"><polygon points="0,0 20,0 10,10"/></svg>') no-repeat right 10px center;
            cursor: pointer;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            transition: border-color 0.3s ease;
            max-width: 160px;
            box-sizing: border-box;
            color: #333;
        }
        .language-selector select:focus {
            outline: none;
            border-color: #5a67d8;
            box-shadow: 0 0 0 2px rgba(90,103,216,0.4);
        }
        .language-selector select option[disabled] {
            color: #999;
        }
        .menu-toggle {
            margin-left: auto;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo-language">
            <div class="logo">
                <a href="index.php" aria-label="Vai alla home">
                    <img src="img/logo2.jpg" alt="Logo Maremma Che Sagra" style="height: 60px;" />
                </a>
            </div>

            <div class="language-selector" aria-label="Selettore lingua">
                <select name="language" id="language-select" onchange="if(this.value) location = this.value;">
                    <option value="" disabled selected hidden>🌍 Lingua</option>
                    <option value="index.php">Italiano</option>
                    <option value="index.php?lang=en">English</option>
                    <option value="index.php?lang=es">Español</option>
                    <option value="index.php?lang=de">Deutsch</option>
                    <option value="index.php?lang=fr">Français</option>
                    <option value="index.php?lang=ru">Русский</option>
                </select>
            </div>
        </div>

        <div
            class="menu-toggle"
            id="menuToggle"
            aria-label="Apri menu"
            aria-expanded="false"
            aria-controls="main-navigation"
        >
            <span></span>
            <span></span>
            <span></span>
        </div>

        <nav class="navigation" id="main-navigation">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#eventi">Eventi</a></li>
                <li><a href="#contatti">Sponsorizzazioni</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>

