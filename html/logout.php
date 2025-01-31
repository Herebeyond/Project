<?php
session_start();
session_destroy(); // Détruit toutes les données de session
echo "<span> You have been disconnected </span><br>";
echo "<a href=page.php> Home </a>"; // Redirige l'utilisateur vers la page d'accueil
exit; // Assurez-vous que le script s'arrête après la redirection
?>

