<?php
define('LOCATION', 'LOCALE');

define('DB_HOST', 'localhost');

if(LOCATION == "LOCALE") {
  define('DB_NAME', 'antonyme');
  define('DB_USERNAME', 'root');
  define('DB_PASSWORD', '');
  define('WEBSITE_URL', "http://localhost/antonyme");
}


try{
  $db = new PDO("mysql:host=" . DB_HOST . ";dbname=". DB_NAME, DB_USERNAME, DB_PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

  // Activation du mode déboggage
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Exception = die alors que WARNING affiche l'alerte et le reste


} catch(PDOException $e){
  die('Erreur - Impossible de se connecter à la base de donnée : '. $e->getMessage());
}

?>
