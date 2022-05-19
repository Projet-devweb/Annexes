<?php
//choses a faire si trop de messages (500 par exemple, supprimer )
//changer le separateru du messagerie csv
session_start();
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Messagerie</title>
        <script type="text/javascript" src="app.js"></script>
        <link href="messagerie.css" rel="stylesheet">
    </head>
    <body>

    -  <form action="ajoutmessage.php" method="post">
        <h1>Bienvenue</h1>
        <input type="text" name="destinataire" placeholder="Destinataire" required><br>
        <input type="text" name="message" placeholder="Message" required><br>
        <input type="submit" value="Connexion"><br>
      </form>

      <?php
      $row2 = 1;
      $tab2=array();
      if (($handle2 = fopen("../annex1.csv", "r")) !== FALSE) {
          while (($data2 = fgetcsv($handle2, 1000, ",")) !== FALSE) {
            $tab2[]=$data2;
              $num2 = count($data2);// $data contient les lignes

              $row2++;//nb colonnes
          }
          unset($tab2[0]);

          echo $tab2[1][0];
}

    $row = 1;
    $tab=array();
    if (($handle = fopen("messagerie.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, "*")) !== FALSE) {
          $tab[]=$data;
            $num = count($data);// $data contient les lignes
            //echo "<p> $num champs à la ligne $row: <br /></p>\n";
            $row++;//nb colonnes
        }
				unset($tab[0]);// on enleve la premiere ligne correspondant a l'entete
				//$tab=array_reverse($tab);


        for ($i=0; $i < $row; $i++) {
          if (==) {
            // code...
          }

          if ($_SESSION["login"]===$tab[$i][0]){ //pour voir les messages envoyés
            echo "</br>"."Moi : ".$tab[$i][2];
          }
          if ($_SESSION["login"]===$tab[$i][1]){ //pour voir les messages reçus
            echo "</br>".$tab[$i][0]. ":".$tab[$i][2];
          }
              }




        /*for ($i=0; $i < $row; $i++) {
          for ($j=0; $j <$num; $j++) {

          echo $tab[$i][$j]." ";
          }
          echo "<br>";
        }*/
        fclose($handle);
    }else{
      echo "ERRREUUUUUUR";
    }


    ?>

    </body>
</html>
