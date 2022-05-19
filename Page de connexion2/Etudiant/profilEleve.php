<?php
session_start();
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Consultation</title>
        <script type="text/javascript" src="app.js"></script>
        <link href="test.css" rel="stylesheet">
    </head>
    <body>

      <div class="bg-image"></div>

    <div class="tout">
    <div class="menu">

<ul>
    <li><a href="#profil">Profil</a></li>
    <li><a href="#resultats">Resultats</a></li>
    <li><a href="#option">Options</a></li>
    <li><a href="#">Messagerie</a></li>
    <li><a href="../PageConnexion.php">Deconnexion</a></li>

</ul>

</div>


<div id="profil" class="card-container">

	<h3><?php echo $_SESSION['nom']." ".$_SESSION['prenom'];?></p></h3>
	<?php echo "Numéro de telephone : ". $_SESSION['numero'];?></p>
  <?php echo "Adresse : ". $_SESSION['adresse'];?></p>
  <?php echo "Date de naissance : ". $_SESSION['naissance'];?></p>


</div>

<div id="resultats" class="card-container">
  <h2>Resultats</h2>
<?php echo "Votre moyenne générale: ". $_SESSION['moyenne'];?></p>
<?php echo "Votre compte ECTS: ". $_SESSION['ects'];?></p>
</div>

<div id="option" class="card-container">
  <h2>Choix d'options</h2>
  <?php echo $_SESSION['choix1']; ?></p>
  <?php echo $_SESSION['choix2'];?></p>
  <?php echo $_SESSION['choix3'];?></p>
  <?php echo $_SESSION['choix4'];?></p>
  <?php echo $_SESSION['choix5'];?></p>
  <?php echo $_SESSION['choix6'];?></p>

</div>


</div>





    </body>
</html>
