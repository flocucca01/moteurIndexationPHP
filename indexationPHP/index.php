<?php ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<title>Compteage</title>
</head>
<body>
	<?php

		$termes = implode(' ', file('fichier.txt'));
		$termes = strtolower($termes);

		$words = array_count_values(str_word_count($termes, 1, ''));

		// $words = arsort($words);

		arsort($words);
		foreach ($words as $key => $value)
		{
			if (strlen($key) >= 3)
			{
				echo $key, " => " , $value, "</br>";
			}

		}

	?>
</body>
</html>
<?php ?>