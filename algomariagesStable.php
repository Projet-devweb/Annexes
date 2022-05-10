<!DOCTYPE html>
<html >
	<head>
		<meta charset="UTF-8">
		<title>Mariages stables</title>
		<script type="text/javascript" src="mariagesstables.js"></script>
	</head>

	<body>
    <?php
    //fonction qui prend en parametre un tab, le nb de colonnes de ce tab et la ligne qu'on veut copier et qui renvoie un tab contenant toute la ligne que l'on veut copier
    function copierligne($tab,$num,$ligne){
      for ($i=0; $i <$num ; $i++) {

      }

    }
    function triABulle($monTab,$num){
             $cpt=true;
             while ($cpt){
                   $cpt=false;
                   for ($i=0;$i<sizeof($monTab)-1;$i++){
                       if ($monTab[$i][4]> $monTab[$i+1][4]){
                          $temp=$monTab[$i+1][4];
                          $monTab[$i+1][4]=$monTab[$i][4];
                          $monTab[$i][4]=$temp;
                          $cpt=true;
    		    }
                   }
             }
             return $monTab;
    }

    $row = 1;
    $tab=array();
    if (($handle = fopen("choixEtudiantsParcours2.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
          $tab[]=$data;
            $num = count($data);// $data contient les lignes
            //echo "<p> $num champs à la ligne $row: <br /></p>\n";
            $row++;//nb colonnes
            for ($c=0; $c < $num; $c++) {
                //echo $data[$c] . "<br />\n";
            }

        }
        echo $tab[0][4]."<br>";
        $tabtrie=triABulle($tab,$num);
        for ($i=0; $i < $row; $i++) {
          for ($j=0; $j <$num; $j++) {
          echo $tabtrie[$i][$j]." ";
          }
          echo "<br>";

        }
        fclose($handle);
    }

    //utiliser array_multisort() et array_column()
    ?>

	</body>
</html>
