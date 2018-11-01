<?php 

$solicitud = fopen("texto.txt", "r") or die("no se pudo abrir para leer.");

while (!feof($solicitud)) {
	$leer = fgets($solicitud);
	$ver = nl2br($leer);
	echo $ver;


}



?>