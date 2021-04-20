<?php
$array = [1, 2, 3]; // tablica z trzema elementami
$secondElement = $array[1]; // pierwszy element jest pod indeksem 0!
$anotherArray = ['alice', 3, $array]; // różne typy w tablicy
$animals = ['Rex' => 'dog', 'Fluff' => 'cat']; // tablica asocjacyjna
$rexType = $animals['Rex']; // wartość $rexType to 'dog'
echo "Rex is a $animals[Rex]\n"; // wewnątrz stringów pomijamy apostrofy
$animalsCount = count($animals); // liczba elementów tablicy
foreach ($animals as $name => $type) {
 echo "$name: $type\n";
}