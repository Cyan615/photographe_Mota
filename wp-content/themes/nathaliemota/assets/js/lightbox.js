window.onload = () => {

// *** on cherche nos éléments ***
// ** l'overlay de la lightbox ->
const overlay = document.getElementById('boxContainer-overlay');
// ** le bouton de fermeture ->
const close = document.querySelector('.box__closeBtn');
// ** le bouton 'pleine écran' de chaque photo ->
const fullscreens = document.querySelectorAll('.iconfullscreen');
// *** Chargement de l'image sélectionné ***
// ** on cherche l'élément qui contient les data-information ->


const imgBox = overlay.querySelector('.lightbox__image');

function openLightbox(imgUrl, imgCategorie, imgReference) {
     
    // ** on ouvre la lightbox ->
 overlay.classList.add('show');
 imgBox.src = imgUrl;

 overlay.querySelector('.box__catPhoto').textContent= imgCategorie;
 overlay.querySelector('.box__refPhoto').textContent= imgReference;

}

// on met un écouteur sur les boutons 'fullscreen'
for(let fullscreen of fullscreens ){
   
    fullscreen.addEventListener("click", function() {
        //onrécupère l'url de la photo à afficher
        let imgUrl = this.closest('.frame-Overlay__fullscreen').getAttribute('data-photourl'); 
        // on récupère les informations: catégorie et référence 
        const imgCategorie = this.closest('.frame-Overlay__fullscreen').getAttribute('data-lightboxCat');  
        const imgReference = this.closest('.frame-Overlay__fullscreen').getAttribute('data-lightboxRef');  
       // ** on ouvre la lightbox ->
       openLightbox(imgUrl, imgCategorie, imgReference);
    });
};

// *** Fermeture de la lightbox avec un écouteur***
close.addEventListener("click", function(){
    overlay.classList.remove("show");
});


// *** Fonctionnement des flèches suivante et précédente

const prevArrow = overlay.querySelector('.box__prevArrow');
const nextArrow = overlay.querySelector('.box__nextArrow');

// initialise le tableau galeryPhoto , onrécupère les URLs des photos de fullscreens ->
const dataElements = document.querySelectorAll('.frame-Overlay__fullscreen');
let galeryPhoto = [];

dataElements.forEach(dataElement => {
    let imgUrl = dataElement.getAttribute('data-photoUrl');
    galeryPhoto.push(imgUrl);
    
});

// initialise la variable index de la photo affichée->
let currentindex = 0;

function showphotoprev(prevImgUrl, prevImgCategorie, prevImgReference, currentindex){
    imgBox.src = prevImgUrl;

 overlay.querySelector('.box__catPhoto').textContent= prevImgCategorie;
 overlay.querySelector('.box__refPhoto').textContent= prevImgReference;
}



// ecoute des flèches
prevArrow.addEventListener("click", function() {
    currentindex--;
    if (currentindex < 0) {
        currentindex = galeryPhoto.length - 1;
    }
    let prevImgUrl = galeryPhoto[currentindex];
    let prevImgCategorie = dataElements[currentindex].getAttribute('data-lightboxCat');
    let prevImgReference = dataElements[currentindex].getAttribute('data-lightboxRef');
    
    showphotoprev(prevImgUrl, prevImgCategorie, prevImgReference, currentindex);
});

function showphotonext(nextImgUrl, nextImgCategorie, nextImgReference, currentindex){
    imgBox.src = nextImgUrl;

 overlay.querySelector('.box__catPhoto').textContent= nextImgCategorie;
 overlay.querySelector('.box__refPhoto').textContent= nextImgReference;
}
nextArrow.addEventListener("click", function() {
    currentindex++;
    if (currentindex >= galeryPhoto.length) {
        currentindex = 0;
    }
    let nextImgUrl = galeryPhoto[currentindex];

    let nextImgCategorie = dataElements[currentindex].getAttribute('data-lightboxCat');

    let nextImgReference = dataElements[currentindex].getAttribute('data-lightboxRef');
    
    showphotonext(nextImgUrl, nextImgCategorie, nextImgReference, currentindex);
});

}






