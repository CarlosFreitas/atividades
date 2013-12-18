<?php 
$codigoProduto = 0;

$codigoProduto = $_POST["codigoProduto"];

switch($codigoProduto){
	case 1:
		echo " caneta 1.20 ";
		break;
	case 2:
		echo " lapis 0.80 ";
		break;
	case 3:
		echo " caderno 4.50 ";
		break;
	defaul:
		echo " produto não cadastrado";

	
}

?>
