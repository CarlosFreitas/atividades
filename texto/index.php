<?php 
$soma = 0;
$a = 0;
$b = 0;

$a = $_POST["a"];
$b = $_POST["b"];

while($a < $b - 1){
	$a = $a + 1 ;
	$soma = $soma + $a;
}

echo $soma;
?>
