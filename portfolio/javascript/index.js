// $(document).ready(function() {
//   $('.has-animation').each(function(index) {
//     $(this).delay($(this).data('delay')).queue(function(){
//       $(this).addClass('animate-in');
//     });
//   });
// });


// scroll-top = a la valeur en haut du scroll de l'écran
var dictionnaire_element = [];


window.onload = function () {
  list_element = $(".has-animation");
  list_element.each(function () {
    var nom_champ = $(this).position().top;
    var div_size = $(this).height();
    nom_champ = nom_champ + div_size;
    var ligne = {
      [nom_champ]: this
    }
    dictionnaire_element.push(ligne);
  });
  console.log(dictionnaire_element);
  affichage_style();
};

window.onscroll = function () {
  affichage_style();
}

function affichage_style() {
  var body = $('body');
  // console.log("scroll = " + body.scrollTop());
  // if (body.scrollTop() > 50) {
  //   $('.has-animation').addClass('animate-in');
  // }
  for (const ligne of dictionnaire_element) {
    var cle = Object.keys(ligne)[0];
    var zone_affichage = body.scrollTop() + window.innerHeight;
    console.log(cle);
    console.log(body.scrollTop() + window.innerHeight);
    if (cle < zone_affichage) {
      $(ligne[cle]).addClass('animate-in');
    }
  }
}