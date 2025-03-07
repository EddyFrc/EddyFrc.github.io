/* let itemSound = new Audio("/docs/sounds/item.ogg");
let clickSound = new Audio("/docs/sounds/tab.ogg"); */

let sidePanel = document.getElementsByTagName("section")[0];
const inventaire = document.getElementById("inventaire-principal");

const navProfil = document.getElementById("nav-profil");
const navSucces = document.getElementById("nav-succes");
const navContact = document.getElementById("nav-contact");

function hideAllSideInfos() {
    for (const sideInfo of sidePanel.children) {
        sideInfo.style.display = "none";
        sidePanel.classList = [];
        // Reset les classes "selected" des items
        for (const item of inventaire.children) {
            item.classList.remove("selected");
        }
    }
}

function resetSelectedTab() {
    navSucces.classList.remove("selected");
    navProfil.classList.remove("selected");
    navContact.classList.remove("selected");
}

function onTabClick(tabEvent) {
    resetSelectedTab();
    tabEvent.target.classList.add("selected");
    clickSound.play();
}

function switchSelectedTab(page) {
    // Affecter la classe "selected" selon la page
    // Les deux autres instructions "remove" permettent de s'assurer que seule un des trois boutons est marqué.
    switch (page) {
        case "contact":
            navContact.classList.add("selected");
            navSucces.classList.remove("selected");
            navProfil.classList.remove("selected");
            break;

        case "succes":
            navSucces.classList.add("selected");
            navContact.classList.remove("selected");
            navProfil.classList.remove("selected");
            break;

        default:
            navProfil.classList.add("selected");
            navSucces.classList.remove("selected");
            navContact.classList.remove("selected");
            break;
    }
}

if (inventaire !== null) {
    for (const item of inventaire.children) {
        // Si l'item a la class "no-content", c'est une case vide : on l'oublie et on passe directement au prochain élément
        if (item.classList[0] === "no-content") continue;

        /* item.addEventListener(
            "mouseenter",
            () => itemSound.play()
        ); */

        item.addEventListener(
            "click",
            () => {
                // Jouer le son du clic
                /* clickSound.play(); */
                // Cacher tous les panels d'info pour ne garder que celui qu'on veut
                hideAllSideInfos();
                // Récupérer le panel correspondant à l'item qu'on vient de cliquer
                sidePanel.firstElementChild.style.display = "none";
                let rightView = document.getElementById(item.classList[1])
                // Afficher à nouveau ce panel (via unset)
                rightView.style.display = "unset";
                // Je suis plus sûr mais je crois que c'est pour ajouter la rareté au conteneur (pour la couleur)
                sidePanel.classList.add(rightView.classList[0]);
                // Cet item est maintenant sélectionné
                item.classList.add("selected");
            }
        );
    }

    document.addEventListener(
        "click",
        evenement => {
            // Si la cible du clic est en dehors de l'inventaire...
            if (!(inventaire.contains(evenement.target) || sidePanel.contains(evenement.target))) {
                // ...cacher tous les panels d'info pour ne garder que le premier.
                hideAllSideInfos();
                sidePanel.firstElementChild.style.display = "unset";
            }
        }
    );

    // document.getElementsByClassName("avatar")[0].addEventListener("mouseenter")
    hideAllSideInfos();
    sidePanel.firstElementChild.style.display = "unset";
}

navProfil.addEventListener("click", onTabClick);
document.getElementById("nav-succes").addEventListener("click", onTabClick);
document.getElementById("nav-contact").addEventListener("click", onTabClick);

// Récupération de la valeur de "page" dans la query string
const urlParams = new URLSearchParams(window.location.search);
const page = urlParams.get("page");

switchSelectedTab(page);