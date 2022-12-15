
//Recup. champs de contrôle
var prix = document.getElementById('prix');
var periode = document.getElementById('periode');
var nmois = document.getElementById('nbmois');
var taxe = document.getElementById('taxe');
var montanttotal = document.getElementById('montanttotal');

var datefin = document.getElementById('datefin');

// Recup. des valeurs
var valprix = parseInt(prix.value) || 0;
var valtaxe = parseInt(taxe.value) || 0;

periode.addEventListener('change', function () {
    // On affiche le contenu de l'élément <option> ciblé par la propriété selectedIndex
    // alert(periode.options[periode.selectedIndex].innerHTML);
    if (periode.selectedIndex === 1) {
        nmois.value = 3;
        valtotal = (valprix * 3)+(valprix*3)*valtaxe/100;
		/* valtotal = valprix * 3; */
        montanttotal.value = valtotal.toFixed(2);
        
         /* alert(montanttotal.value); */
    }
    if (periode.selectedIndex === 2) {
        nmois.value = 6;
        valtotal = (valprix * 6)+(valprix*6)*valtaxe/100;
		/* valtotal = valprix * 6; */
         montanttotal.value = valtotal.toFixed(2);
         
        // alert(montanttotal);
    }
    if (periode.selectedIndex === 3) {
        nmois.value = 12;
        valtotal = (valprix * 12)+(valprix*12)*valtaxe/100;
		/* valtotal = valprix * 12; */
         montanttotal.value = valtotal.toFixed(2);
         
        // alert(montanttotal);
    }
}, true);

