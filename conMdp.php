<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Adresse</title>
    </head>
    <body>
      <h1>Votre mot de passe a bien été modifiée</h1>
      <?php
      session_start();
      if(isset($_SESSION['userName'])) {
        echo "Your session is running " . $_SESSION['userName'];}
      if (($handle1 = fopen("annex1.csv", "r")) !== FALSE) {
        if (($handle2 = fopen("annex2.csv", "w")) !== FALSE) {
          while (($data = fgetcsv($handle1, 1000, ",")) !== FALSE) {
            if($data[2] == $_SESSION["login"])
            {
              $data[13] =  $_POST["mdp"];
            }

            // Write back to CSV format
            fputcsv($handle2, $data);
          }
          fclose($handle2);
        }
        fclose($handle1);
      }

      header('Location: consultation.php');
    ?>
	</body>
</html>
