
<?php
  require('functionsProject.php');


    if (($handle = fopen("annex1.csv", "r")) !== FALSE) {
      while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
        if($_POST["login"] == $data[2]){
            echo "Votre moyenne générale est de : $data[4] <br>";
            echo "Votre score ECTS est : $data[3] <br>";
            echo "Vos choix d'option sont : $data[5] , $data[6] , $data[7] , $data[8] , $data[9] , $data[10], $data[11] , $data[12], $data[13] <br> <br>";
          }
        }
        fclose($handle);
      }


   // $newCsvData = array();
   // if (($handle = fopen("annex1.csv", "r")) !== FALSE) {
   //     while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
   //         $data[] = '';
   //         $newCsvData[] = $data;
   //     }
   //     fclose($handle);
   // }
   //
   // $handle = fopen('annex1.csv', 'w');
   //
   // foreach ($newCsvData as $line) {
   //    fputcsv($handle, $line);
   // }
   //
   // fclose($handle);
   //
   //
   ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Consultation</title>
    </head>
    <body>
      <fieldset>
        <legend>Informations personelles</legend>
      <label>modifier adresse postal</label>
      <input type="text" name="adresse" value="adresse">
      <input type="button" name="profil" value="Modifier" onclick="changerAdresse()">
      </fieldset>
	</body>
</html>
<script type="text/javascript" src="function.js"></script>
