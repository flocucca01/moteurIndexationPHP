<?php 
include 'functions.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<title>Formulaire</title>
</head>
<body>
	<?php

		
		if ($_GET['fonction'] == "fichier") {
			indexationFichier($_GET['lien']);
		}

		if ($_GET['fonction'] == "page_web") {
			indexationPageWeb($_GET['lien']);
		}



		// switch ($_GET['fonction']) {
		// 	case 'Fichier':
		// 		indexationFichier($_GET['lien']);
		// 		break;
		// 	case 'Page web':
		// 		indexationPageWeb($_GET['lien']);
		// 		break;
		// 	default:
		// 		echo "ERREUR !";
		// }



		indexationFichier($_GET['lien'])

	?>
</body>
</html>
<?php ?>