<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil | Letecode</title>
    <meta name="description" content="Letecode est une grande communauté">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
</head>


<meta property="og:title" content="Accueil | Letecode" />
<meta propert="og:description" content="Letecode est une grande communauté">
<meta property="og:type" content="website" />
<meta property="og:image" content="https://fabonk.github.io/Letecode/images/logo.png" />
<meta property="og:url" content="https://fabonk.github.io/Letecode/" />
<body>
    <nav class="navigation">
        <div class="container">
            <a href="" class="branding">
                <img src="images/logo.png" alt="logo">
                <span>Letecode</span>
            </a>
            
            <ul class="menu">
                <div class="menu-fermer" onclick="closeMenuMobil()">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                      </svg>                  
                </div>
                <li class="menu-item active">
                    <a href="index.php">Accueil</a>
                </li>
                <li class="menu-item">
                    <a href="community.php">Communauté</a>
                </li>
                <li class="menu-item">
                    <a href="cours.php">Cours</a>
                </li>
                <li class="menu-item">
                    <a href="contact.php">Contacts</a>
                </li>
            </ul>
            
            <div class="menu-burger" onclick="openMenuMobil()">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </div>
            
        </div>
    </nav>
