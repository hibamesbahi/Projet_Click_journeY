<?php
session_start(); // Active la gestion des sessions
$estConnecte = isset($_SESSION['user']);
$estAdmin = $estConnecte && ($_SESSION['user']['role'] === 'admin');
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wander7-Se Connecter</title>
    <link rel="icon" href="assets/Logo_Wander7_Favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="seconnecter.css" />
  </head>

  <body>
    <header>
      <img class="logo" src="assets/LogoWander7.png" alt="logo">
      <nav>
        <ul class="nav_links">
          <li><a href="index.html">Accueil</a></li>
          <li><a href="aproposdenous.html">À propos de nous</a></li>
          <li><a href="explorer.html">Explorer</a></li>
          <li><a href="profil.html">Mon profil</a></li>
          <li><a href="admin.html">Admin</a></li>
          <li><a href="seconnecter.html">Se connecter</a></li>
        </ul>
      </nav>
    </header>

 
    <div class="login-main-container">
      <div class="login-inner-container">
        <div class="login-col1">
          <h1 class="login-h1">Vous avez déjà un compte</h1>
          <p class="login-p">
            Déjà membre ? Identifiez-vous et accédez aux informations de votre espace.
          </p>
          

        <div class="login-col2">
          <label for="email" class="login-email">  Email </label><br />
          <input type="text" id="email" name="email" /><br />
          <label for="password"> Mot de passe </label><br />
          <input type="password" id="password" name="password" /><br />
          <button class="login-button"> Je me connecte </button>
          <p class="login-a">Vous n'avez pas de compte ?
            <a href="sinscrire.html" class="underline-link">Inscrivez vous </a>
            </p>
        </div>
      </div>
    </div>
    

      
    </main>

  <footer>
    <p>&copy; 2025 Wander7. Tous droits réservés.</p>
  </footer>

  </body>
</html>
