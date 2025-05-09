<?php
$frutas = [1 => 'Banana', 1 => 'Maçã', 1 => 'Uva'];

$key = array_search('Uvsa', $frutas);

if($key == 1){
	echo 'Está presente';
} else {
	echo 'Não está presente';
}
?>