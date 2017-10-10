
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mini-chat</title>
    </head>
    <body>

    <link rel="stylesheet" href="main.css"/>


  <form action="minichat_post.php" method="post">

  <p>
  Pseudo : <input type="text" name="pseudo" /><br />
  Message :  <input type="text" name="message" /><br />

  <input type="submit" value="Envoyer" />
  </p>

  </form>
</header>
<?php

// connexion a la base de donnees


try

{

  $bdd = new PDO('mysql:host=localhost;dbname=minichat','root', 'root', array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));

}

catch(Exception $e)
{

        die('Erreur : '.$e->getMessage());
}

// récupération des messages
  $reponse=$bdd ->query('SELECT * FROM mini_chat ORDER BY ID DESC LIMIT 10');



// sinon afficher message

  while($donnees =$reponse->fetch()) {

  echo '<p>'. htmlspecialchars($donnees['ID']) .'-'. htmlspecialchars($donnees ['pseudo']).'-' . htmlspecialchars($donnees['message']) . '</p>';

}

 ?>


</body>

</html>
