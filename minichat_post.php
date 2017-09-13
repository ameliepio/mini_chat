<?php

// Effectuer ici la requête qui insère le message

// Puis rediriger vers minichat.php comme ceci :


$bdd = new PDO('mysql:host=localhost;dbname=minichat', 'root', 'root', array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));

$pseudo=$_POST["pseudo"];

$message=$_POST["message"];

    if (empty($_POST["pseudo"]) AND empty($_POST["message"])){

     echo "recommencer";

     }else{

        $req = $bdd->prepare('INSERT INTO mini_chat (pseudo, message) VALUES(:pseudo, :message)');

       $req->execute(array(

           'pseudo' => $pseudo,

           'message' => $message,));

           $reponse=$bdd ->query('SELECT * FROM mini_chat ORDER BY ID DESC LIMIT 10');
         }

           while($donnees =$reponse->fetch()) {

           echo '<p>'.$donnees['ID'] .'-'. $donnees ['pseudo'].'-' .$donnees ['message'] . '</p>';
           }

 ?>
