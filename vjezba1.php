<?php

$ime = "Zahid"; $godine = 30;

echo "Pozdrav ja se zovem $ime, i imam $godine godina<br>" ; 


$number1 = 2; $number2 = 6;
$numbertotal =$number1 + $number2 ; 

echo "$numbertotal <br>";

$price = 200;
$tax = 0.17;

$totaltax = $price * $tax;

$totalprice = $price + $totaltax;

echo "Cijena $price KM<br>"; //prava cijena
echo "Porez $totaltax KM<br>"; //ukupna taxa na cijenu
echo "Ukupno $totalprice KM<br>"; // kad se sve izracuna, porez i cijen 


$solari = 1250;
$workday = 23;
$timework = 9;
$dnevnica = $solari / $workday;
$satnica = $dnevnica / $timework;

echo "Moja Dnevnica iznosi $dnevnica <br>";
echo "Moja satnica iznosi $satnica";

?>