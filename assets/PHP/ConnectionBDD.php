<?php
 try {
    $pdo = new PDO('mysql:host=db5000190279.hosting-data.io;dbname=dbs185105','dbu299318','2184$WpW');
  }
  catch(exception $e) {
    die('Erreur '.$e->getMessage());
  }

?>