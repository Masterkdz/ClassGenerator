<?php
//$a (0-7)
$atout1=array("Pa d'atout 1","C4 x2", "Grenades Sp&eacute;ciales x3", "RPG7 x2", "Claymores x2", "Frag x3", "Cartouchiè&egrave;re", "Unit&eacute; de D&eacute;minage");

//$b (0-6)
$atout2=array("Force d'Opposition", "Mastodonte", "Tour de Passe-passe", "Double Coup", "Surarmement", "Brouilleur de Drone", "Onde de choc");

//$c (0-7)
$atout3=array("Conditions Extremes", "Vis&eacute;e Solide", "Baroud d'Honneur", "Martyre", "Impact Lourd", "Poumons d'Acier", "Silence de Mort", "Ecoute aux Portes");

//$d (0-21)
$principale=array("MP5", "Skorpion", "Mini-Uzi", "AK-74u", "P90", "M249 SAW", "RPD", "M60E4", "M16A4", "AK-47", "Carabine M4", "G3", "G36C", "M14", "MP44", "W1200", "Benelli M4", "M40A3", "M21", "Dragunov", "R700", "Barret 50");

//$e
$secondaire=array("M9", "USP 45", "Colt 1911", "Desert Eagle", "Desert Eagle dor&eacute;");

//$f (0-5)
$accessoire1=array("Poign&eacute;e","Lance-Grenade","Silencieux","Viseur Laser","Sans accessoires","Viseur ACOG");

//$g
$accessoire2=array("Sans Accessoires", "Silencieux");

//$h (0,2)
$grenade=array("Grenade Flash", "Grenade Fumigene", "Grenade Paralysante");

function arme1($principale,$accessoire1){
$d=mt_rand(0,7); //arme principale
if ($d=!13) {
	elseif ($d=15 || $d=16) { //si pompe

	}
	elseif ($d>7 && $d <14/*entre 8 et 13 incl */){ //fusil d'assault

	}
	elseif($d=5 || $d=6){ //batteuse

	}
	elseif ($d>16) { //sniper
		# code...
	}
	elseif ($d<5) { //pm
		# code...
	}
}
else{$f=4;} //si mp44 alors pas d'accessoire.
return $principale[$d]." ".$accessoire1[$f];
}



$h=mt_rand(0,2); // grenade

//choix atout 1

//choix atout2

//choix atout 3



	echo $principale[$d]."<br>";
	echo $accessoire1[$f]."<br>";
	echo $secondaire[$e]."<br>";
	echo $accessoire2[$g]."<br>";
	echo $atout1[$a]."<br>";
	echo $atout2[$b]."<br>";
	echo $atout3[$c]."<br>";

?>



