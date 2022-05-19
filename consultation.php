<?php
session_start();
$_SESSION['userName'] = 'Root';

$_SESSION["login"] = $_POST["login"];

  require('functionsProject.php');


//----------------------------------------------------------------------------------------------------------------------

if (($handle = fopen("annex2.csv", "r")) !== FALSE) {
  while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
    if($_POST["login"] == $data[2]){
      echo "Votre moyenne générale est de : $data[4]";
      echo "Votre score ECTS est : $data[3]";
      echo "Vos choix d'option sont : $data[5] , $data[6] , $data[7] , $data[8] , $data[9] , $data[10], $data[11] , $data[12], $data[13]";
    }
  }
       fclose($handle);
}
//----------------------------------------------------------------------------------------------------------------------







?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Consultation</title>
    </head>
    <body>
      <form id="formAdresse" name="formAdresse" method="POST">

        <p>Changez votre adresse ci-contre : <input type="text" name="adresse" /></p>


        <input type="submit" id="submit2" name="submit2" value="valider">
        <input type="reset">
      </form>


      <form id="formNumero" name="formNumero" action="conNumero.php" method="POST">

        <p>Changez votre numéro ci-contre : <input type="text" name="numero" /></p>

        <input type="submit" id="submit3" name="submit3" value="valider">
        <input type="reset">
      </form>


      <form id="formMdp" name="formMdp" action="conMdp.php" method="POST">

        <p>Changez votre mot de passe ci-contre : <input type="text" name="mdp" /></p>

        <input type="submit" id="submit3" name="submit3" value="valider">
        <input type="reset">
      </form>




	</body>
</html>
