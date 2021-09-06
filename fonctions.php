<?php
function br()
{
    echo "<br>";
}
$phrase = 'Bonjour tout le monde ! Je sui une phrase !';

echo strlen($phrase) . " caracteres dans ".$phrase;
br();
echo str_replace('sui', 'suis', $phrase);
br();
echo str_shuffle($phrase);
br();
echo strtoupper($phrase);
br();
echo strtolower($phrase) . date('H:i d-m-Y');
br();
br();
function direBonjour($nom)
{
    echo "bonjour " .strtoupper($nom);
}

direBonjour('corbier');
br();
direBonjour('ravit');
br();
br();
// Calcul du volume d'un cône de rayon 5 et de hauteur 2
$volume52 = 5 * 5 * 3.14 * 2 * (1/3);
echo 'Le volume du cône de rayon 5 et de hauteur 2 est : ' . $volume52 . ' cm<sup>3</sup><br />';
br();
// Calcul du volume d'un cône de rayon 3 et de hauteur 4
$volume34 = 3 * 3 * 3.14 * 4 * (1/3);
echo 'Le volume du cône de rayon 3 et de hauteur 4 est : ' . $volume34 . ' cm<sup>3</sup><br />';
br();

function VolumeCone($rayon, $hauteur)
{
    // calcule du volume
    return $rayon * $rayon * 3.14 * $hauteur * (1/3);
}
$volume = VolumeCone(3, 1);
echo 'Le volume d\'un cône de rayon 3 et de hauteur 1 est de ' . $volume;
