<?php
include('partials/_header.php');
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="asset/boutique.css">

    <script src="https://kit.fontawesome.com/4d8e7503ba.js" crossorigin="anonymous"></script>

  </head>
  <body>
    <div id="d-block">
      <div class="panier">
        <a class="facture" onclick="display();"><i class="fas fa-shopping-basket"></i> Facture</a>
      </div>

      <h1>Boutique :</h1>

      <div>
        <p id="articles">

        </p>
      </div>
    </div>

    <div id="d-none">
      <header>
        
        <h1>Bon de commande :</h1>
        <table class="entreprise">
          <tr>
            <td id="client">

              <!--<div><span>Nom</span></div>
              <div><span>Client</span></div>
              <div><span>Adresse</span> lens</div>
              <div><span>Email</span> <a href="antonymelefilm@gmail.com">antonymelefilm@gmail.com</a></div>-->
              <div><span>Date</span> <?php echo date("d-m-Y"); ?></div>


            </td>

            <td id="entreprise">

              <div>Antonyme le film</div>
              <div>Lens</div>
              <div>France</div>
              <div></div>
              <div>antonymelefilm@gmail.com</div>

            </td>
          </tr>
        </table>
      </header>

      <div class="facture">
          <table class="facture">
            <thead>
              <tr>
                <td>Description</td>
                <td class="text-center">Prix</td>
                <td class="text-center">Quantité</td>
                <td class="text-center">Total</td>
              </tr>
            </thead>
            <tbody id="panier">
              <!-- <tr>
                <td>Le bois est le meilleur matériel de construction !</td>
                <td class="text-center">40.00 €</td>
                <td class="text-center">1</td>
                <td class="text-center">40.00€</td>
              </tr>-->

            </tbody>
            <tfoot>
              <tr>
                <td class="text-right" colspan="3">Sous-total</td>
                <td class="text-center" id="sous_total">0.00€</td>
              </tr>
              <tr>
                <td class="text-right" colspan="3">Tax 20%</td>
                <td class="text-center" id="taxe">0.00€</td>
              </tr>
              <tr>
                <td class="text-right" colspan="3">Total</td>
                <td class="text-center" id="total">0.00€</td>
              </tr>
            </tfoot>
          </table>

          <a id="disabled" onclick="display2();"><i class="fas fa-sync-alt"></i> Afficher la boutique</a>
          <a id="print" onclick="print_page();"><i class="fas fa-print"></i> Imprimer</a>
      </div>
    </div>

    <script type="text/javascript" src="programme.js"></script>
  </body>
</html>
<?php
include('partials/_footer.php');
?>

