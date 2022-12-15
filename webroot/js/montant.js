
//Recup. champs de contrôle
var offre = document.getElementById('offre');
var prix = document.getElementById('prix');
var periode = document.getElementById('periode');
var nbmois = document.getElementById('nbmois');
//var taxe = document.getElementById('taxe');
var montant = document.getElementById('montant');

var datefin = document.getElementById('datefin');

// Recup. des valeurs
//var valoffre = parseInt(prix.value) || 0;
//var valtaxe = parseInt(taxe.value) || 0;

/* periode.addEventListener('change', function () {
    // On affiche le contenu de l'élément <option> ciblé par la propriété selectedIndex
    // alert(periode.options[periode.selectedIndex].innerHTML);
    if (periode.selectedIndex === 1) {
		offre.addEventListener('change', function(){
			//lorsqu'on select offre
			if(offre.selectedIndex===1){
				montant.value = 20000*3;
			}
			if(offre.selectedIndex===2){
				montant.value = 30000*3;
			}
			if(offre.selectedIndex===3){
				montant.value = 40000*3;
			}			
		},true);
		
		
    }
    if (periode.selectedIndex === 2) {
        offre.addEventListener('change', function(){
			if(offre.selectedIndex===1){
				montant.value = 20000*6;
			}
			if(offre.selectedIndex===2){
				montant.value = 30000*6;
			}
			if(offre.selectedIndex===3){
				montant.value = 40000*6;
			}			
		},true);
    }
    if (periode.selectedIndex === 3) {
        offre.addEventListener('change', function(){
			if(offre.selectedIndex===1){
				montant.value = 20000*12;
			}
			if(offre.selectedIndex===2){
				montant.value = 30000*12;
			}
			if(offre.selectedIndex===3){
				montant.value = 40000*12;
			}			
		},true);
    }
	
		
}, true); */

offre.addEventListener('change', function () {
    if (offre.selectedIndex === 1) {
		prix.value = 20000;
    }
    if (offre.selectedIndex === 2) {
		prix.value = 30000;   
    }
    if (offre.selectedIndex === 3) {
        prix.value = 40000;
    }	
		
}, true);


periode.addEventListener('change', function () {    
    if (periode.selectedIndex === 1) {
		montant.value = prix.value*3;
    }
    if (periode.selectedIndex === 2) {
        montant.value = prix.value*6;
    }
    if (periode.selectedIndex === 3) {
        montant.value = prix.value*12;
    }
		
}, true);

//Nombre de Mois
periode.addEventListener('change', function () {    
    if (periode.selectedIndex === 1) {
		nbmois.value = 3;
    }
    if (periode.selectedIndex === 2) {
        nbmois.value = 6;
    }
    if (periode.selectedIndex === 3) {
        nbmois.value = 12;
    }
		
}, true);


