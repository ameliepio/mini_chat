<?php

// Effectuer ici la requête qui insère le message



try

{

  $bdd = new PDO('mysql:host=localhost;dbname=minichat','root', 'root', array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));


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

// $pseudo=$_POST["pseudo"];

// $message=$_POST["message"];

    // if (empty($_POST["pseudo"]) AND empty($_POST["message"])){
    //
    //  echo "recommencer";
    //
    //  }

// requête preparé
        // $req = $bdd->prepare('INSERT INTO mini_chat (pseudo, message) VALUES( pseudo,message)');
        //
        // $req->execute(array($_POST["pseudo"],$_POST["message"]));


          //  'pseudo'=> $pseudo,
           //
          //  'message'=> $message,));
        //

          //  $reponse=$bdd ->query('SELECT * FROM mini_chat ORDER BY ID DESC LIMIT 10');
           //
          //  while($donnees =$reponse->fetch()) {
           //
          //  echo '<p>'.$donnees['ID'] .'-'. $donnees ['pseudo'].'-' .$donnees['message'] . '</p>';
          //  }

          // Puis rediriger vers minichat.php comme ceci :
header('Location: minichat.php');
 ?>
