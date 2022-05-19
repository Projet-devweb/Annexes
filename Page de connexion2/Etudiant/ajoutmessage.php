<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Enregistrer Élèves</title>
</head>
<body>

	<?php
		$fp = fopen('messagerie.csv', 'a+');
		$monEtudiant= array(
			array($_SESSION["login"],
					$_POST["destinataire"],
					$_POST["message"],
				)
		);
		foreach ($monEtudiant as $fields) {
			fputcsv($fp, $fields,"*");
		}

		fclose($fp);

	?>

</body>
</html>
