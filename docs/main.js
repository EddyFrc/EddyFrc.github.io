// let itemSound = new Audio("/docs/sounds/item.ogg");
let tabSound = new Audio("/docs/sounds/tab.ogg");

const inventaire = document.getElementById("inventaire-principal");
if (inventaire !== null) {
    for (const item of inventaire.children) {
        // Si l'item a la class "no-content", c'est une case vide : on l'oublie et on passe directement au prochain élément
        if (item.classList[0] === "no-content") continue;

        item.addEventListener(
            "mouseenter",
            (evenement) => {
                // itemSound.play();
                document.getElementsByTagName("section")[0].firstElementChild.style.display = "none";
                let rightView = document.getElementById(evenement.target.classList[1])
                rightView.style.display = "unset";
                document.getElementsByTagName("section")[0].classList.add(rightView.classList[0]);
            }
        );

        item.addEventListener(
            "mouseleave",
            (evenement) => {
                document.getElementsByTagName("section")[0].classList = [];
                document.getElementsByTagName("section")[0].firstElementChild.style.display = "unset";
                document.getElementById(evenement.target.classList[1]).style.display = "none";
            }
        );
    }
}

// Son pour les onglets
document.getElementById("nav-profil").addEventListener("click", () => {
    tabSound.play();
})

document.getElementById("nav-succes").addEventListener("click", () => {
    tabSound.play();
})

document.getElementById("nav-contact").addEventListener("click", () => {
    tabSound.play();
})

// Récupération de la valeur de "page" dans la query string
const urlParams = new URLSearchParams(window.location.search);
const page = urlParams.get("page");

// Affecter la classe "selected" selon la page
// Les deux autres instructions "remove" permettent de s'assurer que seule un des trois boutons est marqué.
if (page === "contact") {
    document.getElementById("nav-contact").classList.add("selected");
    document.getElementById("nav-succes").classList.remove("selected");
    document.getElementById("nav-profil").classList.remove("selected");
} else if (page === "succes") {
    document.getElementById("nav-succes").classList.add("selected");
    document.getElementById("nav-contact").classList.remove("selected");
    document.getElementById("nav-profil").classList.remove("selected");
} else {
    document.getElementById("nav-profil").classList.add("selected");
    document.getElementById("nav-succes").classList.remove("selected");
    document.getElementById("nav-contact").classList.remove("selected");
}