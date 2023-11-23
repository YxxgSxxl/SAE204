/////////////////////////////
// JS pour la page des SAE //
/////////////////////////////

let slideL = document.querySelector("div.carousel-slideL svg");
let slideR = document.querySelector("div.carousel-slideR svg");
let slideAdd = document.querySelector("div.carousel-addsae svg");

// Affichage de la page (Ajout de la classe "show")
document.querySelector(".page_show").classList.add("show");

// Slide carousel DROITE button
let R = 0;
const carouselElements = document.querySelector(".carousel-elements");

slideR.addEventListener('click', () => {
    console.log(carouselElements.offsetWidth);
    if (Math.abs(R) > (carouselElements.scrollWidth - carouselElements.offsetWidth)) {
        return;
    }
    R -= 300;
    carouselElements.style.transform = "translateX(" + R.toString() + "px)";
})

// Slide carousel GAUCHE button
slideL.addEventListener('click', () => {
    console.log(carouselElements.offsetWidth);
    if (Math.abs(R) <= 0) {
        return;
    }
    R += 300;
    carouselElements.style.transform = "translateX(" + R.toString() + "px)";
})

// Slide Add SAE button
slideAdd.addEventListener('click', () => {
    document.getElementById("myModal").style.display="block";
    span.style.display = "block";
})


// MODAL SECTION

// Attraper la balise <span> pour fermer le modal
var span = document.getElementsByClassName("close")[0];

// Quand l'utilisateur clique sur la croix <span>, le modal ce ferme
span.addEventListener('click', () => {
    span.style.display = "none";
    document.getElementById("myModal").style.display = "none";
})

// Filtres
document.querySelectorAll("input").forEach(e=>{
    e.addEventListener("change", filtre);
})

function filtre(){
    document.querySelector(".carousel-elements").classList.toggle(this.name);
}