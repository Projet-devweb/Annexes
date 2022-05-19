<?php
session_start();
$pseudo=$_POST["pseudo"];
$mdp=$_POST["password"];


if (($handle = fopen("annex1.csv", "r"))) {
    while (($data = fgetcsv($handle, 1000, ","))) {

        $pass=$data[2];

        $log=$data[14];

        if ($pass==$pseudo && $log==$mdp){
          $role=$data[17];

			$_SESSION["nom"]=$data[0];
	  	$_SESSION["prenom"]=$data[1];
      $_SESSION["login"]=$data[2];
      $_SESSION["moyenne"]=$data[4];
      $_SESSION["ects"]=$data[3];
      $_SESSION["choix"]=$data[5];
      $_SESSION["choix2"]=$data[6];
      $_SESSION["choix3"]=$data[7];
      $_SESSION["choix4"]=$data[8];
      $_SESSION["choix5"]=$data[9];
      $_SESSION["naissance"]=$data[15];
      $_SESSION["adresse"]=$data[17];
      $_SESSION["numero"]=$data[16];


    }
  }
    fclose($handle);
}
if ($role=='Etudiant') {
  header('Location: Etudiant/accueil.php');
  exit();
} else if ($role=='Responsable') {
  header('Location: Responsable/profilResponsable.php');
exit();
}
else if ($role=='Admin') {
  header('Location: Etudiant/profilAdmin.php');
exit();
}

header('Location: PageConnexion.php?error=wrong');



?>
