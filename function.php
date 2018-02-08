<?php

Function ouvrirFichier($fichier)
{
	$fichier = fopen('lemonde.html', 'r+');
	return $fichier;
}

?>