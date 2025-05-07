<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=style.css>

    <title>Connexion</title>
</head>
<body>
<div class = "container">
    <h1>Compléter le code <span class="php-highlight">PHP</span> suivant</h1>
    <form method="post" action="traitement.php">
        <div class="form">
            <p class="title">Remplir les champs ✍️</p>
        </div>
        <div class="form-group">
            <label for="login">Login</label>
            <input type="text" id="login" name="login" placeholder="Votre login">
            <label><input type="checkbox" name="admin" value="1"> Vous êtes admin 🔐</label>
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" placeholder="Votre mot de passe">
        </div>

        <button type="submit">Envoyer</button>
    </form>
</div>



<?php
# On vérifie si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    # Si la checkbox est cochée, et les autres champs sont remplies : true sinon, false
    $admin = isset($_POST['admin']) ? 1 : 0;

    print "<p>Valeur à enregistrer en base : " . $admin."</p>";
}
?>

</body>
</html>