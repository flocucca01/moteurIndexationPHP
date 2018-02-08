<?php 
include 'functions.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<title>Index</title>
</head>
<body>

	<form method="get" action="traitement.php">
	<p>
		<input type="text" name="lien" /><br />
		<input type="radio" name="fonction" value="fichier" id="fichier" />Fichier local<br />
       	<input type="radio" name="fonction" value="page_web" id="page_web" />URL Page web<br />
		<input type="submit">
	</p>
	</form>

</body>
</html>
<?php ?>