<?php
require('partials/_header.php');
?>

<div class="container">
  <h1 class="text-center m-5">Antonyme</h1>
  <?php include('partials/_flash.php'); ?>
</div>
<section class=" text-center p-5 mt-4">
  <div class="container p-3">
    <img class="img" src="assets/image/Logo.png">
    <h3 class="text-white mb-3">Souscrire à la Newsletter</h3>
    <form action="#" method="Post">
      <input type="email" name="email" class="form-control" placeholder="Entrer un mail valide">
      <input type="submit" name="send_new_client" class="btn btn-default mt-3" value="Souscrire">
    </form>
    <form id="site" name="site," action="../index.php" method="Post">
      <input type="submit" class="btn btn-default mt-3" value="Retour au Site">
    </form>
  </div>
</section>

<?php
require('partials/_footer.php');
?>
