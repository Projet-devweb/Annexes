<!DOCTYPE html>
<html >
	<head>
		<meta charset="UTF-8">
		<title>Mariages stables</title>
		<script type="text/javascript" src="mariagesstables.js"></script>
	</head>

	<body>
    <?php
/*
    function triABulle($tab,$num){
             $cpt=true;
             while ($cpt){
                   $cpt=false;
                   for ($i=0;$i<sizeof($tab)-1;$i++){
                       if ($tab[$i][4]> $tab[$i+1][4]){
                          $temp=$tab[$i+1][4];
                          $tab[$i+1][4]=$tab[$i][4];
                          $tab[$i][4]=$temp;
                          $cpt=true;
    		    }
                   }
             }
             return $tab;
    }*/
    $row = 1;
    $tab=array();
    if (($handle = fopen("choixEtudiantsParcours3.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
          $tab[]=$data;
            $num = count($data);// $data contient les lignes
            //echo "<p> $num champs à la ligne $row: <br /></p>\n";
            $row++;//nb colonnes
            for ($c=0; $c < $num; $c++) {
                //echo $data[$c] . "<br />\n";
            }

        }
				unset($tab[0]);// on enleve la premiere ligne correspondant a l'entete
				$cpt=true;
				while ($cpt){
							$cpt=false;
							for ($i=0;$i<sizeof($tab)-1;$i++){
									if ((float)$tab[$i][4]> (float)$tab[$i+1][4]){
										 $temp=$tab[$i+1];
										 $tab[$i+1]=$tab[$i];
										 $tab[$i]=$temp;
										 $cpt=true;

			 }
							}
				}

				$cpt=true;
				while ($cpt){
							$cpt=false;
							for ($i=0;$i<sizeof($tab)-1;$i++){//si les moyennes sont les memes on trie selon les ectcs
									if ((float)$tab[$i][4]== (float)$tab[$i+1][4]&& (float)$tab[$i][3]> (float)$tab[$i+1][3] ){
										 $temp=$tab[$i+1];
										 $tab[$i+1]=$tab[$i];
										 $tab[$i]=$temp;
										 $cpt=true;

			 }
							}
				}
				$tab=array_reverse($tab);
				$premiere=$tab[0];//la premiere ligne cause probleme donc on la trie manuelement

				//print_r($tab);

        /*for ($i=0; $i < $row; $i++) {
          for ($j=0; $j <$num; $j++) {
          echo $tab[$i][$j]." ";
          }
          echo "<br>";

        }*/
        fclose($handle);
    }

		function mariagesstables($tab,$num,$row){//row doit etre le nb de colonnes du tab
			$options=array();
			switch ($num) {
				case 11:
				$options[0][0]='CS';//nom des filieres
				$options[1][0]=70;//places disponibles

				$options[0][1]='IAC';
				$options[1][1]=50;

				$options[0][2]='VISUA';
				$options[1][2]=35;

				$options[0][3]='ICC';
				$options[1][3]=35;

				$options[0][4]='INEM';
				$options[1][4]=35;

				$options[0][5]='BI';
				$options[1][5]=20;

				$options[0][6]='HPDA';
				$options[1][6]=18;

				$options[0][7]='IAP';
				$options[1][7]=17;



				for ($i=0; $i <2 ; $i++) {
					for ($j=0; $j <8 ; $j++) {
						echo $options[$i][$j]." ";
					}
					echo "<br>";
				}
				$fin=false;
					for ($i=0; $i <$row ; $i++) {
						for ($j=0; $j <$num ; $j++) {
							echo $tab[$i][$j]." ";

						}
						echo "<br>";
					}



					break;

				default:
					break;
			}

		}
		//echo $num;
		mariagesstables($tab,$num,$row);


    ?>

	</body>
</html>
