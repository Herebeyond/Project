<?php
session_start();
require 'db.php'; // Connexion à la base
?>



<html lang="fr">
<head>
    <link rel="stylesheet" href="../css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    
    <div id="global">
        <div id=Identification>
            <h1>
                <?php
                if (isset($_SESSION['user'])) {
                    // Récupérer le nom d'utilisateur depuis la base de données
                    $stmt = $pdo->prepare("SELECT username FROM users WHERE id = ?");
                    $stmt->execute([$_SESSION['user']]);
                    $user = $stmt->fetch();
                    echo "Welcome, " . htmlspecialchars($user['username']) . "!";
                } else {
                    echo '<a href="login.php">Sign In</a> | <a href="register.php">Register</a>';
                }
                ?>
            </h1>
        </div>
        <div id="englobe">
            <p>
                This is a page, a test page.<br>
                It's not very big but it's a start.<br>
                So there you go, this is what my page looks like for now.
            </p>
        </div>
            <?php
                if (isset($_SESSION['user'])) {
                    echo "<a href='logout.php'>Disconnect</a>";
                }
            ?>
    </div>
</body>
</html>