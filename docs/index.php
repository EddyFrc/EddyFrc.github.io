<?php

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="main.css">
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
          <?php
          $file = fopen("inventory.csv", "r");
          $inventaire = array();
          
          fgets($file);
          do {
            $temp = explode(";", rtrim(fgets($file)));
            print("<a href=\"#".$temp[0]."\" class=\"".$temp[1]."-item\"");
          } while (!feof($file));
          
          var_dump($inventaire);
          ?>
          <a href="#python" class="epic-item" onmouseenter="onInventoryIn('python')" onmouseleave="onInventoryOut('python')">
            <img src="img/python.png" alt="Langage de programmation Python">
            <article id="python">
              <h3>Python</h2>
              <p>
                Niveau : Avancé<br>
                Compétences : Syntaxe et concepts de base; <abbr title="Programmation Orientée Objet">POO</abbr><br><br>
                J'ai commencé à apprendre ce langage au lycée en spécialité <abbr title="Numérique et Sciences de l'Informatique">NSI</abbr>. J'ai fait du Python pendant quelques années pour un de mes projets (voir <a href="succes/#sloubi">Succès</a>) si bien que mon expérience pour ce langage de programmation est considérable. C'est ainsi le langage que je maîtrise le plus en terme général.
              </p>
            </article>
          </a>
          <a href="#linux" class="epic-item" onmouseenter="onInventoryIn('linux')" onmouseleave="onInventoryOut('linux')">
            <img src="img/linux.svg" alt="Système d'exploitation GNU/Linux">
            <article id="linux">
              <h3>Linux</h2>
              <p>
                Niveau : Avancé<br>
                Compétences : Commandes de base; administration et commandes avancées; déploiement de services tels que des serveurs HTTP, PostgreSQL, Minecraft...; installation à partir d'une clé USB bootable; utilisation de gestionnaire de paquets<br><br>
                J'ai commencé à prendre en main Linux en apprenant les commandes de base en spécialité <abbr title="Numérique et Sciences de l'Informatique">NSI</abbr>, au lycée. J'en ai appris plus sur le système de fichiers et son fonctionnement au travers du jeu pédagogique GameShell. Depuis que j'ai pris en main les environnements graphiques tels que KDE Plasma en première année de première année de <abbr title="Bachelor Universitaire de Technologie">BUT</abbr> informatique, j'ai énormément apprécié la grande liberté offerte et les fonctionnalités supplémentaires. J'ai ainsi décidé d'installer la distribution Debian sur mon ordinateur d'études pour en profiter, ce qui m'a appris à installer un système à partir d'une clé USB bootable.
              </p>
            </article>
          </a>
          <a href="#java" class="rare-item" onmouseenter="onInventoryIn('java')" onmouseleave="onInventoryOut('java')">
            <img src="img/java.png" alt="Langage de programmation Java">
            <article id="java">
              <h3>Java</h2>
              <p>
                Niveau : Confirmé<br>
                Compétences : Syntaxe et concepts de base; <abbr title="Programmation Orientée Objet">POO</abbr>; interfaces JavaFX et SceneBuilder<br><br>
                J'ai commencé à apprendre ce langage au première année de <abbr title="Bachelor Universitaire de Technologie">BUT</abbr> informatique. Ce langage a été utilisé pour quelques projets pédagogiques faisant partie du cadre de mes études (voir <a href="succes/">Succès</a>)
              </p>
            </article>
          </a>
          <a href="#html" class="rare-item" onmouseenter="onInventoryIn('html')" onmouseleave="onInventoryOut('html')">
            <img src="img/html.svg" alt="Langage de description HTML">
            <article id="html">
              <h3>HTML 5</h2>
              <p>
                Niveau : Confirmé<br>
                Compétences : Syntaxe et concepts de base<br><br>
                J'ai commencé à apprendre ce langage au lycée en spécialité <abbr title="Numérique et Sciences de l'Informatique">NSI</abbr>. Cela a été complété par ma formation de <abbr title="Bachelor Universitaire de Technologie">BUT</abbr> informatique. De ce fait, j'en possède une compréhension accrue.
              </p>
            </article>
          </a>
          <a href="#css" class="rare-item" onmouseenter="onInventoryIn('css')" onmouseleave="onInventoryOut('css')">
            <img src="img/css.svg" alt="Langage de style CSS">
            <article id="css">
              <h3>CSS 3</h2>
              <p>
                Niveau : Confirmé<br>
                Compétences : Syntaxe et concepts de base; positionnement flex; notions de responsive<br><br>
                Tout comme l'HTML, j'ai commencé à apprendre ce langage au lycée en spécialité <abbr title="Numérique et Sciences de l'Informatique">NSI</abbr>, complété par ma formation de <abbr title="Bachelor Universitaire de Technologie">BUT</abbr> informatique. Le CSS étant rattaché au HTML, mes compétences sont aussi similaires.
              </p>
            </article>
          </a>
          <a href="#git" class="rare-item" onmouseenter="onInventoryIn('git')" onmouseleave="onInventoryOut('git')">
            <img src="img/git.svg" alt="Outil de versioning Git">
            <article id="git">
              <h3>Git</h2>
              <p>
                Niveau : Confirmé<br>
                Compétences : Syntaxe et concepts de base; utilisation de clés SSH; fusion de branches; fusion de fichiers<br><br>
                J'ai commencé à apprendre l'utilisation de Git seul en lisant la <a href="https://git-scm.com/book/en/v2/Getting-Started-About-Version-Control">documentation</a> sous forme de "livre". Cela a été complété par ma formation de <abbr title="Bachelor Universitaire de Technologie">BUT</abbr> informatique. Ainsi, j'ai une bonne compréhension générale de cet outil.
              </p>
            </article>
          </a>
          <a href="#psql" class="uncommon-item" onmouseenter="onInventoryIn('psql')" onmouseleave="onInventoryOut('psql')">
            <img src="img/psql.png" alt="PostgreSQL">
            <article id="psql">
              <h3>PostgreSQL</h2>
              <p>
                Niveau : Habitué<br>
                Compétences : Syntaxe et concepts de base; administration de base de données distante; gestion des transactions & optimisations<br><br>
                J'ai commencé à apprendre la syntaxe générale du langage SQL en spécialité <abbr title="Numérique et Sciences de l'Informatique">NSI</abbr>, au lycée. J'ai appris l'utilisation du SGBD PostgreSQL en 1ère année de <abbr title="Bachelor Universitaire de Technologie">BUT</abbr> informatique.
              </p>
            </article>
          </a>
          <a href="#68k" class="common-item" onmouseenter="onInventoryIn('68k')" onmouseleave="onInventoryOut('68k')">
            <img src="img/68k.png" alt="Langage Assembleur Motorola 68000">
            <article id="68k">
              <h3>Assembleur Motorola 68000</h2>
              <p>
                Niveau : Débutant<br>
                Compétences : Syntaxe et concepts de base; spécificités du processeur; notion de pile et de sous-programmes<br><br>
                J'ai commencé à apprendre le langage assembleur Motorola 68000 en première année de <abbr title="Bachelor Universitaire de Technologie">BUT</abbr> informatique.
              </p>
            </article>
          </a>
          <a href="#cpp" class="uncommon-item" onmouseenter="onInventoryIn('cpp')" onmouseleave="onInventoryOut('cpp')">
            <img src="img/68k.png" alt="Langage C++">
            <article id="cpp">
              <h3>C++</h2>
              <p>
                Niveau : Habitué<br>
                Compétences : Syntaxe et concepts de base; Syntaxe orientée objet<br><br>
                J'ai commencé à apprendre ce langage dès la deuxième année de BUT.
              </p>
            </article>
          </a>
          <a href="#php" class="common-item" onmouseenter="onInventoryIn('php')" onmouseleave="onInventoryOut('php')">
            <img src="img/68k.png" alt="Langage PHP">
            <article id="php">
              <h3>PHP</h2>
              <p>
                Niveau : Débutant<br>
                Compétences : Syntaxe et concepts de base; Syntaxe orientée objet<br><br>
                J'ai commencé à apprendre ce langage dès la deuxième année de BUT.
              </p>
            </article>
          </a>
          <a href="#javascript" class="common-item" onmouseenter="onInventoryIn('javascript')" onmouseleave="onInventoryOut('javascript')">
            <img src="img/68k.png" alt="Langage Javascript">
            <article id="javascript">
              <h3>Javascript</h2>
              <p>
                Niveau : Débutant<br>
                Compétences : Syntaxe et concepts de base<br><br>
                J'ai commencé à apprendre ce langage dès la deuxième année de BUT.
              </p>
            </article>
          </a>
          <div></div>
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