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
                        Salut ! Je suis étudiant à Isart Digital et futur ingénieur logiciel spécialisé dans le jeu-vidéo.
                        J'aime beaucoup concevoir des systèmes et des outils (tooling) les plus soignés possibles, je trouve ça super satisfaisant 	&#10024;
                        (je crois que quelque part ça "met de l'ordre" dans mon cerveau, ça satisfait mon besoin de perfection).
                    </p>
                    <p>
                        Je ne pense étonner personne en disant que je suis un geek passionné de jeux-vidéos et de technologies &#128517;.
                        Quand j'étais (plus) jeune, je détournais un peu tout ce qui me passait par la main pour en faire un jeu.
                        Tout y est passé, même le logiciel "LDD" qui normalement permet juste de construire des Lego sur ordinateur...
                        Je pense que si, pendant le collège et le lycée, je n'avais pas découvert la programmation et plus généralement
                        l'informatique, j'aurais probablement voulu être game designer !
                    </p>
                    <p>
                        Je suis aussi un amateur de badminton et j'aime faire quelques ballades en vélo de temps en temps &#128513; donnez-moi un chat et je disparais avec.
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