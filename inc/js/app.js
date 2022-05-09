 jQuery(document).ready(function($){
 	//au clic sur le btn-menu
 	$('.btn-menu').click(function() {
 		//j'ajoute et je supprime la class menu-collapse sur .menu
 		$('.menu').toggleClass('menu-collapse');
 	});
 	//retour haut de page au click sur totop
 	$('.totop').click(function() {
 		$('html, body').animate({scrollTop:0},400);
 	});
  });



var texte = "L'univers de Robine";
var msg = '';
//espace entre chaque répétition du texte
var blanc = '          ';
//nombre de répétition du texte, doit être >= 1
var nbTexte = 6;

for(i=0;i<nbTexte;i++)
  msg += texte + blanc;

var timerID = null;
var delaiScroll = 100;

function startScroll() {
  document.formScroll.textScroll.value = msg;
  window.status = msg;
  msg = msg.substring(1, msg.length) + msg.substring(0, 1)
  timerID = setTimeout("startScroll()", delaiScroll);
}

function stopScroll() {
  clearTimeout(timerID);
}

