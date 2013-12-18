<?php

echo "<h3>Hora Certa</h3>";
echo "<title>Relogio</title>";
echo "<fieldset>";

date_default_timezone_set("Brazil/East");
echo '<meta http-equiv= "refresh" content="1">';

$dataAtual = getdate ();
echo $dataAtual["mday"];
echo "/";
echo $dataAtual["mon"];
echo "/";
echo $dataAtual["year"];
echo " ";
echo $dataAtual["hours"]-1;
echo ":";
echo $dataAtual["minutes"];
echo " ";
echo $dataAtual["seconds"];
echo " ";
switch ($dataAtual["wday"]){
	case 0;
		echo "Domingo";
		break;
	case 1;
		echo "Segunda";
		break;
	case 2; 
		echo "Terça";
		break;
	case 3;
		echo "Quarta";
		break;
	case 4;
		echo "Quinta";
		break;
	case 5;
		echo "Sexta";
		break;
	case 6;
		echo "Sábado";
		break;
}
echo "</fieldset>";
?>

