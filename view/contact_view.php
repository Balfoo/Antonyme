<?php
include('partials/_header.php');
?>
<body >

<div class="contact-flex">
  <div class="contact-fond contact-flex1">
    <div class="container">
      <div class='titre_contact'>
        <h1> Nous Contacter </h1>
      </div>

      <div class="corp_contact">
        
            <form action="" method="post">
              
                <label for="objet">Votre Nom</label>
                <input type="text" name="objet" class="form-control" id="objet" placeholder="Exemple: Jean lefebvre">
            
              
                
                
                    <label for="auteur">Votre mail</label>
                    <input type="text" name="auteur" class="form-control" id="auteur" placeholder="Votre mail">
              
                
                
            
                    <label for="tel">Votre Numéro de Téléphone</label>
                    <input type="tel" name="tel" id="tel" placeholder="Exemple : 06 45 25 18 75">
              
              
                
                  <label for="message">Votre message</label>
                  <textarea name="message" rows="8" cols="80" id="message" ></textarea>

                  <input class="bouton" id="envoyer" type="submit" name="Envoyer" value="Envoyer" >
        
      </div>
    </div>
  </div>

  <div class="container contact-flex2">

      <div class="contact-réseaux">
        <h1>Contactez-nous sur les réseaux sociaux</h1>
        <a href="https://www.facebook.com/AntonymeCourtMetrage" target="_blanc"><img class="contact-fb" src="asset\img\fb.png" alt="fb"></a>
        <a href="https://www.instagram.com/antonymecourtmetrage/" target="_blanc"><img class="contact-insta" src="asset\img\insta.png" alt="insta"></a>

        <h1 class="conatct-email-titre">Adresse email</h1>
        <span class="conatct-email">antonymelefilm@gmail.com</span>
      </div>

  </div>
</div>
</body>
<?php
include('partials/_footer.php');
?>

