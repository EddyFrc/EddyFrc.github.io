<?php
const INVENTORY_WIDTH = 4;
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./main.css">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <script src="main.js"></script> 
  <title>Eddy Francou - Portfolio</title>
</head>

<body>
  <header>
    <h1>Eddy Francou</h1>
    <nav>
      <a href="." class="selected">Profil</a>
      <a href="succes">Succès</a>
      <a href="contact">Contact</a>
    </nav>
  </header>
  <main>
    <article>
      <h2>Mon profil</h2>
      <div>
        <img class="avatar" src="img/avatar.png" alt="Avatar en pixel-art">
        <div class="inventaire">
        <?php foreach ($inventoryItems as $inventoryItem): ?>

          <div class="<?= InventoryItem::RARITY_MAP[$inventoryItem->getRarity()] ?>-item" onmouseenter="onInventoryIn('<?= $inventoryItem->getId() ?>')" onmouseleave="onInventoryOut('<?= $inventoryItem->getId() ?>')">
            <img src="img/<?= $inventoryItem->getImageName() ?>" alt="<?= $inventoryItem->getDesc() ?>">
            <article id="<?= $inventoryItem->getId() ?>">
              <h3><?= $inventoryItem->getName() ?></h3>
              <p>
                Niveau : <?= InventoryItem::LEVEL_MAP[$inventoryItem->getRarity()] ?><br>
                Compétences : <?= $inventoryItem->getSkills() ?><br><br>
                <?= $inventoryItem->getLongDesc() ?>
              </p>
            </article>
          </div>

        <?php endforeach; ?>

        <?php for ($i = 0; $i < INVENTORY_WIDTH - (sizeof($inventoryItems) % INVENTORY_WIDTH); $i++): ?>
          <div></div>
        <?php endfor; ?>
        </div>
        <section>
          <h3>A propos de moi</h4>
          <p>
            Je m’appelle Eddy Francou. Étudiant en informatique et diplômé du baccalauréat, j’ai pour vocation de raconter des histoires-interactives-dont-vous-êtes-le-héros, aussi appelées jeux-vidéos. Mon objectif ? Mettre la technique au service du divertissement, avec élégance et rigueur.
          </p>
          <p>
            A mes heures perdues, je suis (étonnamment) un geek passionné de jeux-vidéos, de technologies et de chats.
          </p>
        </section>
      </div>
    </article>
  </main>
</body>

</html>