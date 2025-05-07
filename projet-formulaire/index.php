<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=css/style.css>

    <title>Connexion</title>
</head>
<body>
<div class = "container">
    <h1>Compléter le code <span class="php-highlight">PHP</span> suivant</h1>
    <form method="post" action="controller/controller.php">
        <div class="form">
            <p class="title">Remplir les champs ✍️</p>
        </div>
        <div class="form-group">
            <label for="login">Login 🛜</label>
            <input type="text" id="login" name="login" placeholder="Votre login">
            <label><input type="checkbox" name="admin" value="1"> Vous êtes admin 🔐</label>
        </div>
        <div class="form-group">
            <label for="password">Mot de passe 🔑</label>
            <input type="password" id="password" name="password" placeholder="Votre mot de passe">
        </div>

        <button type="submit">Envoyer 📨 </button>
    </form>
</div>



<?php
?>

</body>
</html>