<?php
require('partials/_header.php');
?>
<!-- Partie Administrateur -->

<div class="container">
  <h1 class="text-center m-5">Partie Administrateur</h1>
   <?php include('partials/_flash.php'); ?>

  <div class="row">
    <form class="col-12" action="" method="post">
      <div class="form-group">
        <label for="objet">Objet du mail</label>
        <input type="text" name="objet" class="form-control" id="objet" placeholder="De quoi va parler votre news ?">
      </div>
      <div class="row">
        <div class="col-12 col-md-6">
          <div class="form-group">
            <label for="auteur">Auteur du mail</label>
            <input type="text" name="auteur" class="form-control" id="auteur" placeholder="Exemple : Florent Hode">
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="form-group">
            <label for="tel">N° Tel</label>
            <input type="tel" name="tel" class="form-control" id="tel" placeholder="Exemple : 06 00 00 00 00">
          </div>
        </div>
        <div class="col-12">
          <label for="message">Votre message</label>
          <textarea name="message" rows="8" cols="80" id="message" class="form-control"></textarea>

          <input type="submit" name="send_newsletter" value="Envoyer" class="btn btn-default d-block ml-auto mt-3">
        </div>
      </div>
    </form>
    <form name="Logout" action="logout.php" method="Post"style="margin-left: 15px";>
      <input type="submit" class="btn btn-default mt-3" value="Logout">
    </form>
  </div>
</div>
