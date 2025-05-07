<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'] ?? '';
    $password = $_POST['password'] ?? '';
    $estAdmin = isset($_POST['admin']);

    echo "<h2>Informations que vous avez saisies :</h2>";
    echo "<p>Login : " . htmlspecialchars($login) . "</p>";
    echo "<p>Mot de passe : " . htmlspecialchars($password) . " (pour info)</p>";
    echo "<p>Admin : " . ($estAdmin ? 1 : 0) . "</p>";
    echo "<p><a href='index.php'>Retour</a></p>";
} else {
    echo "<p>Veuillez soumettre le formulaire.</p>";
    echo "<p><a href='index.php'>Retour</a></p>";
}

?>