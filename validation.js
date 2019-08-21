/////////////////////////////////////
// Validation des données saisies //
////////////////////////////////////
var form=document.querySelector("form");
var titre=document.getElementById("titre");
var serie=document.getElementById("serie");
var tome=document.getElementById("tome");
var scenariste=document.getElementById("scenariste");
var dessinateur=document.getElementById("dessinateur");
var edition=document.getElementById("edition");
// Gestionnaire d'événement
form.addEventListener("submit",function(e){
	if(titre.value===""){ 
		alert("Titre non précisé !");
	    e.preventDefault(); 
	}
	else if (serie.value===""){
		alert("Série non précisée ! Si l'album ne fait pas partie d'une série, tu dois alors saisir le caractère '/'");
		e.preventDefault();
	}
	else if (tome.value===""){
		alert("Tome non précisé !");
		e.preventDefault();
	}
	else if (scenariste.value===""){
		alert("Scénariste non précisé !");
		e.preventDefault();
	}
	else if (dessinateur.value===""){
		alert("Dessinateur non précisé !");
		e.preventDefault();
	}
	else if (edition.value===""){
		alert("Maison d'édition non précisée !");
		e.preventDefault();
	}
});