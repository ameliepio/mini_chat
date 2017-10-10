<?php

// Effectuer ici la requête qui insère le message
try

{
  $bdd = new PDO('mysql:host=localhost;dbname=minichat','', '', array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));

}
catch(Exception $e)

{
        die('Erreur : '.$e->getMessage());
}
// si tableau vide recommenccer

if (!empty($_POST["pseudo"]) AND !empty($_POST["message"])){

  // requête preparé
          $req = $bdd->prepare('INSERT INTO mini_chat (pseudo, message) VALUES( ?,?)');

          $req->execute(array($_POST["pseudo"],$_POST["message"]));
}
          // Puis rediriger vers minichat.php comme ceci :
header('Location: minichat.php');
 ?>
