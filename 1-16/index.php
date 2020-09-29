<?php
$firstNames = [
    'Matti',
    'Saara',
    'Timo'
];

$lastNames = [
    'Mallikas',
    'Esimerkkinen',
    'Testinen'
];
foreach($firstNames as $etu) {
    foreach($lastNames as $suku) {
        echo $etu . " ". $suku . "<br>";
    }
}