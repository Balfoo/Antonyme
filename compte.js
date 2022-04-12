
function CompteARebours(){
    console.log("cocuvou")
  var date_actuelle = new Date(); // On déclare la date d'aujourd'hui.
  var annee = date_actuelle.getFullYear();

  var film = new Date(annee, 2, 2, 8, 0, 0); // On déclare la date de Noël.
              
   if (film.getTime() < date_actuelle.getTime()) // Si Noël est dépassé, on passe au Noël suivant !
   film = new Date(++annee, 2, 2, 8, 0, 0); // On re-déclare Noël pour qu'il ne soit pas passé.
      
   var tps_restant = film.getTime() - date_actuelle.getTime(); // Temps restant en millisecondes

   var s_restantes = tps_restant / 1000; // On convertit en secondes
    var i_restantes = s_restantes / 60;
    var H_restantes = i_restantes / 60;
    var d_restants = H_restantes / 24;


    s_restantes = Math.floor(s_restantes % 60); // Secondes restantes
    i_restantes = Math.floor(i_restantes % 60); // Minutes restantes
    H_restantes = Math.floor(H_restantes % 24); // Heures restantes
    d_restants = Math.floor(d_restants); // Jours restants
//==================
   var mois_fr = new Array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
   
   var /*texte = "Nous sommes le <strong>" +date_actuelle.getDate()+ " " +mois_fr[date_actuelle.getMonth()]+ " " +date_actuelle.getFullYear()+ "</strong>," +
               " et il est <strong>" +date_actuelle.getHours()+ "h" +date_actuelle.getMinutes()+ "</strong>.<br />";*/
   
       texte = "<strong>"+d_restants+ "jours</strong>, <strong>" +H_restantes+ " heures</strong>," +
            " <strong>" +i_restantes+ " minutes</strong> et <strong>" +s_restantes+ "s</strong> avant l'avant première";
   
   
   document.getElementById("affichage").innerHTML = texte;
}
setInterval(CompteARebours, 1000); // Rappel de la fonction toutes les 1000 millisecondes (toutes les secondes quoi !).