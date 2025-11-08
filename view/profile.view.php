<?php
const INVENTORY_WIDTH = 4;
$missingEntriesCount = INVENTORY_WIDTH - (sizeof($inventoryItems) % INVENTORY_WIDTH);
?>
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
        <h2>Mon profil</h2>
        <div id="profile-container">
            <img class="avatar" src="/public/img/avatar.png" alt="Avatar en pixel-art">
            <div class="inventaire" id="inventaire-principal">
                <?php foreach ($inventoryItems as $inventoryItem): ?>

                    <div class="<?= $inventoryItem->getRarityNominalClass() ?>-item <?= $inventoryItem->id ?>">
                        <img src="/public/img/<?= $inventoryItem->imageName ?>"
                             alt="<?= $inventoryItem->desc ?>">
                    </div>

                <?php endforeach; ?>

                <?php for ($i = 0; $i < $missingEntriesCount; $i++): ?>
                    <div class="no-content"></div>
                <?php endfor; ?>
            </div>
            <section>
                <article>
                    <h3>A propos de moi</h3>
                    <p>
                        Je m’appelle Eddy Francou. Je suis étudiant en troisième année de BUT informatique, actuellement
                        en échange à l'Université du Québec à Chicoutimi ! Mon objectif : devenir développeur pour le
                        jeu-vidéo, et mettre la technique au service du divertissement, avec efficacité et rigueur.
                    </p>
                    <p>
                        A mes heures perdues, je suis (étonnamment) un geek passionné de jeux-vidéos et de technologies.
                        Ma grande spécialité a toujours été de détourner tout ce qui me passe par la main pour en
                        faire un jeu. Tout y est passé, même un logiciel conçu pour réaliser des designs Lego...
                        &#128517;
                    </p>
                    <p>
                        Je suis aussi un amateur de badminton et grand fan de chats &#128008;
                    </p>
                    <p>
                        Cliquez sur une technologie dans cet inventaire pour en savoir plus !
                    </p>
                </article>

                <?php foreach ($inventoryItems as $inventoryItem): ?>

                    <article class="<?= $inventoryItem->getRarityNominalClass() ?>-item" id="<?= $inventoryItem->id ?>">
                        <h3><?= $inventoryItem->name ?></h3>
                        <p>
                            Niveau : <?= $inventoryItem->getRarityLabel() ?><br>
                            Compétences : <?= $inventoryItem->skills ?><br><br>
                            <?= $inventoryItem->longDesc ?>
                        </p>
                    </article>

                <?php endforeach; ?>

            </section>
        </div>
    </article>
</main>
<?php require_once __DIR__ . '/block/loading.view.php' ?>
<script src="/public/js/main.js"></script>
</body>

</html>