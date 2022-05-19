<!DOCTYPE html>
<html >
	<head>
		<meta charset="UTF-8">
		<title>Mariages stables</title>
		<script type="text/javascript" src="mariagesstables.js"></script>
	</head>

	<body>
    <?php

    $row = 1;
    $tab=array();
    if (($handle = fopen("../annex1.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
          $tab[]=$data;
            $num = count($data);// $data contient les lignes
            //echo "<p> $num champs à la ligne $row: <br /></p>\n";
            $row++;//nb colonnes
        }
				unset($tab[0]);// on enleve la premiere ligne correspondant a l'entete
				//$tab=array_reverse($tab);

        for ($i=0; $i < $row; $i++) {
          for ($j=0; $j <$num; $j++) {
          echo $tab[$i][$j]." ";
          }
          echo "<br>";
        }
        fclose($handle);
    }


    ?>

	</body>
</html>