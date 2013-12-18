<?php 
$numero = 0;

$numero = $_POST["numero"];

if ($numero%2 == 0) {
	echo " o numero é par ";
}
else{
	echo " o numero é impar";
}

?>
