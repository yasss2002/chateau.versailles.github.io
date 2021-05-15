// creation des variables à partir d'id
var retour = document.getElementById('retour');
var nom = document.getElementById('nom');
var email = document.getElementById('email');
var texte = document.getElementById('question');
var valider = document.getElementById('valider');


// validation de l'email via une expression régulière entre 2 slash et \S etant tout caractère sauf espace
function formatEmail(mail) {
  return /\S+@\S+\.\S+/.test(mail);
};


// fonction pour valider les données
function validation() {
  // création de la variable message
  var message = '';

  // conditions
  if(nom.value.length < 2) {
    message = message + "Merci de completer votre nom <br />";
  }

  if(formatEmail(email.value) == false) {
    message = message + "Merci de completer un email valide <br />";
  }

  if(texte.value.length == 0) {
    message = message + "Le message est vide <br />";
  }

  
// si aucun message d'erreur n'est dans la variable message
  if(message.length == 0) {
    message = message + "votre message a été envoyé avec succès !";

    retour.style.color = 'white';


  } 

else {
  retour.style.color = 'white';
}


  // le message est inseré dans le html
  retour.innerHTML = message;
}


// Méthode qui écoute une evenement sur le bouton validation et déclenche la fonction validation
valider.addEventListener('click', validation); 