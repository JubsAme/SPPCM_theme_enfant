console.log("JavaScript du carrousel chargé");

document.addEventListener("DOMContentLoaded", function () {

    const carousel = document.querySelector(".carousel-actualites");

    if (!carousel) return;

    const piste = carousel.querySelector(".carousel-piste");
    const slides = carousel.querySelectorAll(".carousel-slide");
    const pastilles = carousel.querySelectorAll(".carousel-pastille");

    if (!piste || slides.length === 0) return;

    let index = 0;
    let intervalle;


    // AFFICHER LA DIAPOSITIVE
   

    function afficherSlide() {

        piste.style.transform = `translateX(-${index * 100}%)`;

        pastilles.forEach(function (pastille, i) {

            pastille.classList.toggle("active", i === index);
            pastille.setAttribute("aria-current", i === index ? "true" : "false");

        });

    }


    // DÉFILEMENT AUTOMATIQUE
    

    function demarrerDefilement() {

        clearInterval(intervalle);

        intervalle = setInterval(function () {

            index = (index + 1) % slides.length;

            afficherSlide();

        }, 8000);

    }

   
    // CLIC SUR UNE PASTILLE


    pastilles.forEach(function (pastille, i) {

        pastille.addEventListener("click", function () {

            index = i;

            afficherSlide();

            // Réinitialiser le délai automatique
            demarrerDefilement();

        });

    });

    // Afficher la première actualité
    afficherSlide();

    // Démarrer le défilement automatique
    demarrerDefilement();

});