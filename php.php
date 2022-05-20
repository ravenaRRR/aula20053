

<?php

$aumento = $_GET['aumento'];
$convenio = 100;

switch($aumento){

case 1: 
echo "Crianças com menos de 10 anos tem um adicional de R$80,00";
echo "O valor final será de ",80 +$convenio;
break;


case 2: 
echo "Entre 10 e 30 anos tem um adicional de R$50,00";
echo "O valor final será de ", 50+$convenio;
break;


case 3: 
echo "Entre 40 e 60 anos tem um adicional de R$95.00";
echo "O valor final será de", 95+$convenio;
break;


case 4:
echo "Acima de 60 tem o adicional de R$130,00";
echo "O valor final será de", 130+$convenio;
break;


    }


    ?>