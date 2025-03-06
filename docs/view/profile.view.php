<?php
const INVENTORY_WIDTH = 4;
$missingEntriesCount = INVENTORY_WIDTH - (sizeof($inventoryItems) % INVENTORY_WIDTH);
?>
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
        <h2>Mon profil</h2>
        <div>
            <img class="avatar" src="/docs/img/avatar.png" alt="Avatar en pixel-art">
            <div class="inventaire" id="inventaire-principal">
                <?php foreach ($inventoryItems as $inventoryItem): ?>

                    <div class="<?= $inventoryItem->getRarityNominalClass() ?>-item <?= $inventoryItem->getId() ?>">
                        <img src="/docs/img/<?= $inventoryItem->getImageName() ?>"
                             alt="<?= $inventoryItem->getDesc() ?>">
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
                        Je m’appelle Eddy Francou. Étudiant en deuxième année de BUT informatique et diplômé du
                        baccalauréat, mon objectif est de
                        mettre la technique au service de logiciels de qualité, avec élégance et rigueur.
                    </p>
                    <?php // Je m’appelle Eddy Francou. Étudiant en informatique et diplômé du baccalauréat, j’ai pour vocation de raconter des histoires-interactives-dont-vous-êtes-le-héros, aussi appelées jeux-vidéos. Mon objectif ? Mettre la technique au service du divertissement, avec élégance et rigueur. ?>
                    <p>
                        A mes heures perdues, je suis (étonnamment) un geek passionné de jeux-vidéos, de technologies et
                        de
                        chats.
                    </p>
                </article>

                <?php foreach ($inventoryItems as $inventoryItem): ?>

                    <article class="<?= $inventoryItem->getRarityNominalClass() ?>-item" id="<?= $inventoryItem->getId() ?>">
                        <h3><?= $inventoryItem->getName() ?></h3>
                        <p>
                            Niveau : <?= $inventoryItem->getRarityLabel() ?><br>
                            Compétences : <?= $inventoryItem->getSkills() ?><br><br>
                            <?= $inventoryItem->getLongDesc() ?>
                        </p>
                    </article>

                <?php endforeach; ?>

            </section>
        </div>
    </article>
</main>
<script src="/docs/main.js"></script>
</body>

</html>