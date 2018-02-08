<?php

Function indexationFichier($fichier)
{
	echo "##### FONCTION FICHIER #####"; ?><br /><?php

	$termes = implode(' ', file($fichier));
	$termes = strtolower($termes);

	$words = array_count_values(str_word_count($termes, 1, ''));

	arsort($words);
	foreach ($words as $key => $value)
	{
		if (strlen($key) >= 3)
		{
			echo $key, " => " , $value, "</br>";
		}
	}
}

Function indexationPageWeb($url)
{
	echo "##### FONCTION PAGE WEB #####"; ?><br /><?php
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	$raw = curl_exec($ch);
	curl_close($ch);

	$html = new DOMDocument();
	@$html->loadHTML($raw);
	$xpath = new DOMXPath($html);
	$domExemple = $xpath->query("//div/a/@href");

	$i = 0;
	foreach ($domExemple as $exemple) {
	    echo $result[$i++] = $exemple->nodeValue;
	}

	/*$termes = implode('http:', $result);
	$termes = strtolower($termes);

	$words = array_count_values(str_word_count($termes, 1, ''));

	arsort($words);
	foreach ($words as $key => $value)
	{
		if (strlen($key) >= 3)
		{
			echo $key, " => " , $value, "</br>";
		}
	}*/
}

?>