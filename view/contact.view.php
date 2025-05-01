<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/public/style/main.css">
    <link rel="shortcut icon" href="/public/img/favicon.ico" type="image/x-icon">
    <title>Eddy Francou - Portfolio</title>
</head>

<body>
<?php require_once __DIR__ . '/block/navbar.view.php'; ?>
<main>
    <article>
        <h2>Me contacter</h2>
        <!-- <div>
            <?php // TODO: Gérer le formulaire ?>
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
        </div> -->
    </article>
    <article class="contact">
        <h3>Informations de contact</h3>
        <p>
            Adresse mail universitaire :
            <a href="mailto:eddy.francou@etu.univ-grenoble-alpes.fr">eddy.francou@etu.univ-grenoble-alpes.fr</a>
        </p>
        <p>
            Numéro de téléphone : <a href="tel:0635026244">06 35 02 62 44</a>
        </p>
        <h3>Autres liens</h3>
        <p>
            CV : <a href="/public/cv.pdf" target="_blank">Consulter mon CV</a>
        </p>
        <p>
            Github : <a href="https://github.com/EddyFrc">Consulter mon profil</a>
        </p>
        <p>
            Linkedin : <a href="https://www.linkedin.com/in/eddy-francou-963599349">Consulter mon profil</a>
        </p>
        <p>
            Portfolio : <a href="https://github.com/EddyFrc/EddyFrc.github.io/tree/prod">Voir le dépôt Github</a>
        </p>
    </article>
</main>
<?php require_once __DIR__ . '/block/loading.view.php' ?>
<script src="/public/js/main.js"></script>
<script src="/public/js/theme.js"></script>
</body>

</html>