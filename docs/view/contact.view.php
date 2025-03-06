<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/docs/main.css">
    <link rel="shortcut icon" href="/docs/img/favicon.ico" type="image/x-icon">
    <title>Eddy Francou - Portfolio</title>
</head>

<body>
<?php require_once __DIR__ . '/navbar.view.php'; ?>
<main>
    <article>
        <h2>Me contacter</h2>
        <div>
            <form action="null">
                <div>
                    <label for="email">Votre adresse e-mail</label>
                    <input type="text" name="email" id="email" placeholder="john.doe@exemple.com">

                    <label for="objet">Objet</label>
                    <input type="text" name="objet" id="objet" placeholder="Offre d'emploi">

                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="50" rows="10"></textarea>
                </div>
                <input type="submit" name="submit" id="submit">
            </form>
        </div>
    </article>
    <article class="contact">
        <h3>Informations de contact</h3>
        <p>
            <a href="https://github.com/EddyFrc"><img src="/docs/img/github-mark.svg" alt="Logo de Github"></a>
        </p>
        <p>
            Adresse mail universitaire : <a
                    href="mailto:eddy.francou@etu.univ-grenoble-alpes.fr">eddy.francou@etu.univ-grenoble-alpes.fr</a>
        </p>
        <p>
            Numéro de téléphone : <a href="tel:0635026244">06 35 02 62 44</a>
        </p>
    </article>
</main>
<script src="/docs/main.js"></script>
</body>

</html>