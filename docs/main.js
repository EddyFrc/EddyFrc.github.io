function onInventoryIn(id) {
    // Je met la souris dans la zone -> une bulle apparait
    document.getElementById(id).style.display = "unset";
}

function onInventoryOut(id) {
    // Je sors la souris de la zone -> la bulle disparait
    document.getElementById(id).style.display = "none";
}

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