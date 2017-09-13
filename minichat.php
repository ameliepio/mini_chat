
  <link rel="stylesheet" href="main.css">


  <form action="minichat_post.php" method="post">

  <p>
  Pseudo : <input type="text" name="pseudo" /><br />
  Message :  <input type="text" name="message" /><br />

  <input type="submit" value="Envoyer" />
  </p>

  </form>

<!-- faire l'affichage des chat et la boucle foreach -->

<!-- <?php

// $reponse=$bdd ->query('pseudo * message mini_chat');
//
// while($donnees =$reponse->fetch()) {
//
// echo '<p>' . $donnees ['pseudo']. '</p>';
// }
 // ?>
