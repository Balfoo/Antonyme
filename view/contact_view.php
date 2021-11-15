<?php
include('partials/_header.php');
?>
<body>

<div class='titre_contact'>
  <h1> Nous Contacter </h1>
</div>

<div class="corp_contact">
  <div class="row">
      <form class="col-12" action="" method="post">
        <div class="form-group">
          <label for="objet">Votre Nom</label>
          <input type="text" name="objet" class="form-control" id="objet" placeholder="Exemple: Jean lefebvre">
        </div>
        <div class="row">
          <div class="col-12 col-md-6">
            <div class="form-group">
              <label for="auteur">Votre mail</label>
              <input type="text" name="auteur" class="form-control" id="auteur" placeholder="Votre mail">
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="form-group">
              <label for="tel">Votre Numéro de Téléphone</label>
              <input type="tel" name="tel" class="form-control" id="tel" placeholder="Exemple : 06 45 25 18 75">
            </div>
          </div>
          <div class="col-12">
            <label for="message">Votre message</label>
            <textarea name="message" rows="8" cols="80" id="message" class="form-control"></textarea>

            <input id="envoyer" type="submit" name="Envoyer" value="Envoyer" class="btn btn-default d-block ml-auto mt-3">
          </div>
        </div>
    </div>
</div>
</body>
<?php
include('partials/_footer.php');
?>

