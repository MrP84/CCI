//invitation pour connaitre le nombre de parties à jouer (5 maxi)
var repetition = window.prompt("Combien de partie voulez vous jouer ?\nChoississez de 1 à 5 parties maximum");

//si l'utilisateur ne respecte pas les consignes, il recommence
if ((repetition <= 0) || (repetition > 5)) {
	repetition = window.prompt("On a dit entre 1 et 5, c'est pas compliqué !!\nRECOMMENCE!");
} else {

//si tout va bien, on boucle
	for(var i = 0; i <= repetition - 1; i++){

	//Déclaration des variables	
var demande = window.prompt("Choississez une valeur parmi\npierre, feuille ou ciseau :");
var resultat = "";
var game = ["pierre", "feuille", "ciseau"];
var scoreJoueur = 0;
var scoreOrdi = 0;

//mise en minuscule pour attribution de l'index dans le tableau des valeurs possibles
choixJoueur = demande.toLowerCase();
var battleValue = game.indexOf(choixJoueur);

//valeur entière comprise entre 0 et 2
choixOrdi = Math.floor(Math.random()*3);
/*
console.log("choixJoueur = " + choixJoueur);
console.log("choixOrdi = " + choixOrdi);
console.log("battleValue = " + battleValue);*/

//test basé sur la position des valeurs via leur index dans le tableau car la veleur de droite l'emporte sur son voisin de gauche directe
//sauf pour les cas extrêmes où c'est le 1er index qui gagne
if (battleValue == choixOrdi) {
	resultat = "egalite";
	} 
else if (battleValue == choixOrdi + 1) {
		resultat = "joueur";
		}
else if (battleValue == choixOrdi + 2 ) {
	resultat = "joueur";
	}
else {
		resultat = "ordinateur";
		}

//switch sur la valeur de la variable retenu lors du test précédent
switch (resultat) {
	case "egalite":
		document.write("<p>Vous avez choisi tous les deux " + demande + "</p>");
		break;

	case "ordinateur":
		document.write("<p>Vous avez choisi " + demande + "<br/> et l'ordinateur a choisi <strong>" + game[choixOrdi] + "</strong><br/> Donc vous avez perdu! (Loooooser...)");
		scoreOrdi++;
		break;

	case "joueur":
		document.write("<p>Vous avez choisi <strong>" + demande + "</strong><br/> et l'ordinateur a choisi " + game[choixOrdi] + "<br/> Donc vous avez gagné! (POPOPOOOOOO!!!)");
		scoreJoueur++;
		break;

	default:
		window.prompt("Veuillez choisir parmi pierre, feuille ou ciseau");
		break;
}
console.log(scoreOrdi);
console.log(scoreJoueur);

	}
// affichage du score et des étapes de la bataille
	document.write("<h2>" + scoreJoueur + " - " + scoreOrdi + "</h2>");
	if (scoreJoueur == scoreOrdi) {
		document.write("<p>Egalité parfaite!! Fallait le faire!</p>");
	} else if (scoreOrdi > scoreJoueur) {
		document.write("<p>Tu t'es fait démonter mon pote !!</p>");
	} else {
		document.write("<p>Bien joué!! T'es le meilleur!!!</p>");
	}

}






