'use strict';
console.log('OK modal js');

    const modalBtnOpen = document.querySelector('#menu-item-20 a');
    const modal = document.getElementById('contactModal');
    const btnOpen = document.querySelector('.open-popup');
// console.log('modal '+ modal);
// fonction d'ouverture de la modale contacte
    function openModal(e) {
        e.preventDefault();
// condition pour pré-remplir le champ référence
        let photoRef = btnOpen.getAttribute("data-reference");
        if (photoRef && e.target === modalBtnOpen) {

            document.getElementById("refFormId").value = "";
        } else { 
            document.getElementById("refFormId").value = photoRef;
        }
        modal.style.display = null ;
        
        //décalage pour l'éffet d'ouverture 
        setTimeout(() => {
            modal.classList.add('show');
        }, 200);
        // console.log(modal);
    }
// Fonction de fermeture de la modale
    function closeModal() {
        modal.style.display = "none";
        modal.classList.remove('show');
    }
    
    // Ouverture de la modale au clique sur le bouton Contact du menu 
    modalBtnOpen.addEventListener("click", openModal);

        // modalBtnOpen.addEventListener("click", function(){
        //     modal.style.display = null ;

        //     setTimeout(() => {
        //         modal.classList.add('show');
        //     }, 200);
        // });

  // Vérifier si le bouton "open-popup" est présent et le configurer
    if (btnOpen) {
        btnOpen.addEventListener("click", openModal);
      } else {
        console.log("Le bouton 'open-popup' n'est pas présent");
      }

    
    // Fermeture de la modale au clique sur le bouton fermeture
    document.getElementById('btnCloseContact').addEventListener("click", closeModal);

        



// *** Ouverture du menu burger

    const links = document.querySelectorAll("#nav li");
    // console.log(links);
    icones.addEventListener("click", () => {
        nav.classList.toggle("active");
        console.log('icons listener');
    });
//   console.log(icones);
    // fermeture au clique sur item
    links.forEach((link) => {
        link.addEventListener("click", () => {
            nav.classList.remove("active");
        })
    })

  

