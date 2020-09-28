<?php
$s = rand(0, 5000);
echo $s. "<br>";
if ($s > 4000)
echo 'A';
elseif ($s == 0 || $s == 1000)
echo 'B';
elseif ($s % 2 == 0 && $s < 3000)
echo 'C';
else echo 'D';




//1. Jos luku on yli 4000 tulosta “A”
//2. Jos luku on nolla tai 1000 tulosta “B”
//3. Jos luku on parillinen ja alle 3000 tulosta “C”
//4. Muutoin tulosta “D”
