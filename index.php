<?php
$student_1 = "Darien";
$darien_m1 = "74";
$darien_m2 = "60";
$darien_m3 = "80";


$student_2 = "Toto";
$toto_m1 = "13";
$toto_m2 = "88";
$toto_m3 = "70";


$student_3 = "Jose";
$jose_m1 = "90";
$jose_m2 = "50";
$jose_m3 = "60";


$student_4 = "Gladness";
$gladness_m1 = "90";
$gladness_m2 = "50";
$gladness_m3 = "60";

function display($name, $m1, $m2, $m3)
{
	echo "<h3>$name</h3>";
	echo "Mark 1: $m1 </br>";
	echo "Mark 2: $m2 </br>";
	echo "Mark 3: $m3 </br>";
}

display($student_1, $darien_m1, $darien_m2, $darien_m3);
display($student_2, $toto_m1, $toto_m2, $toto_m3);
display($student_3, $jose_m1, $jose_m2, $jose_m3);
display($student_4, $gladness_m1, $gladness_m2, $gladness_m3);
