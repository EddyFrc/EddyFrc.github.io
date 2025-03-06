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
        <h2>Mes succès</h2>
        <div>
            <div class="succes"> <!--Grille des succès-->
                <a href="#sloubi" class="gold">
                    <img src="/docs/img/trophy-gold.png" alt="Trophée en or">
                    <p>Programmer un jeu sur calculatrice Numworks</p>
                </a>
                <a href="#s2-01256" class="gold">
                    <img src="/docs/img/trophy-gold.png" alt="Trophée en or">
                    <p>Planifier, concevoir et développer une application complète</p>
                </a>
                <a href="#s1-012" class="silver">
                    <img src="/docs/img/trophy-silver.png" alt="Trophée en argent">
                    <p>Réaliser un programme d’apprentissage par renforcement</p>
                </a>
                <a href="#s1-03" class="silver">
                    <img src="/docs/img/trophy-silver.png" alt="Trophée en argent">
                    <p>Installer un poste pour le développement</p>
                </a>
                <a href="#s1-04" class="bronze">
                    <img src="/docs/img/trophy-bronze.png" alt="Trophée en bronze">
                    <p>Créer et analyser une base de données</p>
                </a>
                <a href="#s1-056" class="bronze">
                    <img src="/docs/img/trophy-bronze.png" alt="Trophée en bronze">
                    <p>Réaliser un site web simple</p>
                </a>
            </div>
            <!-- <section>
              <div></div>
              <p>Période : Mois Année</p>
              <div></div>
              <div>
                <div>
                  <h3>Titre</h3>
                  <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore saepe molestias reprehenderit vel laboriosam quae iure doloremque, soluta culpa nesciunt deleniti quaerat officiis neque praesentium? Quas harum aperiam asperiores neque.
                  </p>
                </div>
                <img src="img/succes-numworks.png" alt="Calculatrice numworks">
              </div>
            </section> -->
        </div>
    </article>
    <article class="details-succes" id="sloubi">
        <div>
            <div class="tags">
                <a href="/docs#python" class="tag epic-item">Python</a>
            </div>
            <p>Période : Lycée, première année de <abbr title="Bachelor Universitaire de Technologie">BUT</abbr>
                informatique</p>
            <h3>Programmer un jeu sur calculatrice Numworks</h3>
            <p>
                L'objectif du projet était de réaliser un jeu d'arcade en Python en utilisant les librairies fournies
                par la
                calculatrice Numworks. J'ai d'abord utilisé l'éditeur en ligne sur le site officiel, puis j'ai utilisé
                les
                modules <a href="https://pypi.org/project/kandinsky/">kandinsky-numworks</a> et <a
                        href="https://pypi.org/project/ion-numworks/">ion-numworks</a> qui émulent le comportement de la
                calculatrice sous forme d'une fenêtre sur le bureau d'un PC. Ainsi, j'ai pu utiliser un IDE pour gagner
                en
                efficacité. C'est le projet sur lequel j'ai acquis le plus d'expérience pour le langage Python.<br><br>
                Liens : <a href="https://github.com/EddyFrc/Sloubi">Github</a>, <a
                        href="https://my.numworks.com/python/eddy-francou/sloubi_2_latest">Numworks</a>
            </p>
        </div>
        <img class="illustration" src="/docs/img/succes-numworks.png" alt="Calculatrice numworks">
    </article>
    <article class="details-succes" id="s2-01256">
        <div>
            <div class="tags">
                <a href="/docs#java" class="tag rare-item">Java</a>
                <a href="/docs#java" class="tag rare-item">JavaFX</a>
                <a href="/docs#git" class="tag rare-item">Git</a>
                <div class="tag uncommon-item">En équipe</div>
            </div>
            <p>Période : Deuxième semestre du <abbr title="Bachelor Universitaire de Technologie">BUT</abbr>
                informatique
            </p>
            <h3>Planifier, concevoir et développer une application de bureautique complète à destination de
                professionnels
            </h3>
            <p>
                Le projet consiste à développer une application de bureau qui permet à un organisateur de marchés,
                brocantes,
                marchés de Noël de simplifier son organisation. L’utilisateur peut ainsi gérer les différents aspects de
                son
                événement dans une interface graphique. Le logiciel est adapté pour des professionnels qui doivent faire
                le
                lien entre les participants au marché et les données stockées dans l’application.
            </p>
        </div>
        <img class="illustration" src="/docs/img/succes-brocante.jpeg" alt="Illustration de brocante">
    </article>
    <article class="details-succes" id="s1-012">
        <div>
            <div class="tags">
                <a href="/docs#java" class="tag rare-item">Java</a>
                <a href="/docs#git" class="tag rare-item">Git</a>
                <div class="tag uncommon-item">En équipe</div>
            </div>
            <p>Période : Premier semestre du <abbr title="Bachelor Universitaire de Technologie">BUT</abbr> informatique
            </p>
            <h3>Réaliser un programme d’apprentissage par renforcement</h3>
            <p>
                L'objectif du projet était de réaliser un programme permettant de trier automatiquement des dépêches
                dans des
                catégories données. Pour cela, nous avons réparti les tâches pour gagner en productivité totale. Nous
                avons
                tous utilisé des <abbr title="Environnements de Développement Intégrés">IDE</abbr> (intelliJ et Visual
                Studio
                Code) pour écrire le code source en langage Java.
                De manière individuelle, chaque membre de l'équipe a travaillé sur une partie du code source et des
                données
                nécessaires au fonctionnement du programme. Au départ, je me suis principalement concentré sur la
                création
                manuelle de lexiques (ceux utilisés par l'algorithme pour classer les dépêches) et le programme
                principal, qui
                utilise l'ensemble des méthodes utilitaires pour fournir le résultat. J'ai aussi ajouté les touches
                finales
                telles qu'une légère optimisation des algorithmes, un formatage du code, l'ajout d'une documentation
                intégrée.
            </p>
        </div>
        <img class="illustration" src="/docs/img/succes-depeche.jpg" alt="Illustration de journaux">
    </article>
    <article class="details-succes" id="s1-03">
        <div>
            <div class="tags">
                <a href="/docs#linux" class="tag epic-item">Linux</a>
            </div>
            <p>Période : Premier semestre du <abbr title="Bachelor Universitaire de Technologie">BUT</abbr> informatique
            </p>
            <h3>Installer un poste pour le développement</h3>
            <p>
                La tâche donnée était de créer un guide d'installation du système d'exploitation GNU/Linux sur une
                machine
                virtuelle, puis des logiciels qui permettent de constituer un environnement de développement complet.
                J'ai
                configuré les options pendant l'installation pour personnaliser le système selon des indications
                spécifiques.
                J'ai utilisé des outils en ligne de commande sur un terminal, le tout dans un environnement bash.<br>
                J'ai ainsi réalisé une carte mentale qui indique les étapes, éléments à prendre en compte afin d'obtenir
                le
                même résultat. J'ai ajouté des "trucs et astuces" dans la carte mentale pour que le lecteur potentiel
                puisse
                pousser plus loin la personnalisation.
            </p>
        </div>
        <img class="illustration" src="/docs/img/succes-installation.png" alt="Écran d'installation de Debian">
    </article>
    <article class="details-succes" id="s1-04">
        <div>
            <div class="tags">
                <a href="/docs#psql" class="tag uncommon-item">PostgreSQL</a>
            </div>
            <p>Période : Premier semestre du <abbr title="Bachelor Universitaire de Technologie">BUT</abbr> informatique
            </p>
            <h3>Créer et analyser une base de données</h3>
            <p>
                L'objectif était de créer une base de données portant sur le naufrage du Titanic, à des fins d'analyse.
                Pour
                cela, nous avons réparti équitablement la quantité de travail pour chaque type de tâche. Ainsi, j'ai
                récupéré
                et compilé des informations trouvées sur internet afin de valider la viabilité et l'utilité d'une telle
                base
                de données. Puis, j'ai réalisé un schéma représentant la structures des données à analyser. Enfin et à
                l'aide
                d'un éditeur de texte, j'ai utilisé le langage SQL pour rendre la base effective.
            </p>
        </div>
        <!-- <img class="illustration" src="/docs/img/succes-installation.png" alt="Calculatrice numworks"> -->
    </article>
    <article class="details-succes" id="s1-056">
        <div>
            <div class="tags">
                <a href="/docs#html" class="tag rare-item">HTML</a>
                <a href="/docs#css" class="tag rare-item">CSS</a>
            </div>
            <p>Période : Premier semestre du <abbr title="Bachelor Universitaire de Technologie">BUT</abbr> informatique
            </p>
            <h3>Réaliser un site web simple</h3>
            <p>
                L'objectif était de créer un site web sobre écologiquement à destination d'une entreprise.
            </p>
        </div>
        <!-- <img class="illustration" src="/docs/img/succes-installation.png" alt="Calculatrice numworks"> -->
    </article>
</main>
<script src="/docs/main.js"></script>
</body>

</html>