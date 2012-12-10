<?php

$atout1;
$atout2;
$atout3;
$principale;
$secondaire;
$accessoire1;
$accessoire2;




//$a
$atout1=array("C4 x2", "Grenades Sp&eacute;ciales x3", "RPG7 x2", "Claymores x2", "Frag x3", "Cartouchiè&egrave;re", "Unit&eacute; de D&eacute;minage");
//$b
$atout2=array("Force d'Opposition", "Mastodonte", "Tour de Passe-passe", "Double Coup", "Surarmement", "Brouilleur de Drone", "Onde de choc");
//$c
$atout3=array("Conditions Extremes", "Vis&eacute;e Solide", "Baroud d'Honneur", "Martyre", "Impact Lourd", "Poumons d'Acier", "Silence de Mort", "Ecoute aux Portes");
//$d
$principale=array("MP5", "Skorpion", "Mini-Uzi", "AK-74u", "P90", "M249 SAW", "RPD", "M60E4", "M16A4", "AK-47", "Carabine M4", "G3", "G36C", "M14", "MP44", "W1200", "Benelli M4", "M40A3", "M21", "Dragunov", "R700", "Barret 50");
//$e
$secondaire=array("M9", "USP 45", "Colt 1911", "Desert Eagle", "Desert Eagle dor&eacute;");
//$f
$accessoire1=array("Lance-Grenade", "Viseur Laser", "Silencieux","Poign&eacute;e", "Viseur ACOG", "Sans accessoires");
//$g
$accessoire2=array("Sans Accessoires", "Silencieux");
//$h
$grenade=array("Grenade Flash", "Grenade Fumigene", "Grenade Paralysante");


$a=mt_rand(0,6);
$b=mt_rand(0,6);
$c=mt_rand(0,7);
$d=mt_rand(0,21);
$e=mt_rand(0,4);
$f=mt_rand(0,5);
$g=mt_rand(0,1); 
$h=mt_rand(0,2);
while (
  	($f<4 && $d>16)
		|| (($f!=3 || $f!=5) && ($d>4 && $d<8))
 		|| ($f!=3 && ($d>4 && $d<8)) 
 		|| (($f==0 OR $f==3)&& $d<4)
 		|| ($f!=5 && $d==14)
 		) {
	$f=mt_rand(0,5);
	
}

if ($b=4){
	echo $principale[$d]."<br>";
	echo $accessoire1[$f]."<br>";
	
	echo $principale[$d]."<br>";
	echo $accessoire1[$f]."<br>";
}
else {
	echo $principale[$d]."<br>";
	echo $accessoire1[$f]."<br>";
	echo $secondaire[$e]."<br>";
	echo $accessoire2[$g]."<br>";
}
if ($f==0 || $f==3){
	echo "Pas d'atout 1 <br>";
	echo $atout2[$b]."<br>";
	echo $atout3[$c]."<br>";
}
else{
	echo $atout1[$a]."<br>";
	echo $atout2[$b]."<br>";
	echo $atout3[$c]."<br>";
}

?>



