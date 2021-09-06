<?php
$br = "<br/>";
//$age_du_visiteur = 17;
//echo 'le visiteur a ' . $age_du_visiteur . ' ans';
//
//$nombre = 2 + 4; // $nombre prend la valeur 6
//$nombre = 5 - 1; // $nombre prend la valeur 4
//$nombre = 3 * 5; // $nombre prend la valeur 15
//$nombre = 10 / 2; // $nombre prend la valeur 5
//$nombre = 5 * 2; // $nombre prend la valeur 10
//echo "<br>";
////$result = ($nombre + 5) * $nombre;
////echo $result;
//
//// Allez on rajoute un peu de difficulté
//$nombre = 3 * 5 + 1; // $nombre prend la valeur 16
//$nombre = (1 + 2) * 2; // $nombre prend la valeur 6
//
//$nombre = 10%5;
//$nombre = 10%3;
//echo $nombre;
//
//if ($nombre > 0){
//   echo 'il reste quelque chose';
//}
//
//$age = 8;
//if ($age <= 12){
//    echo "Salut gamin ! Bienvenido sur mon site !<br />";
//    $autorisation_entrer = "Oui";
//}else{
//    echo "Ceci est un site pour enfants, vous êtes trop vieux pour pouvoir  entrer. Au revoir !<br />";
//    $autorisation_entrer = "Non";
//}
//echo "Avez-vous l'autorisation d'entrer ? La réponse est : $autorisation_entrer";
//
//if ($autorisation_entrer == "Oui") // SI on a l'autorisation d'entrer
//{
//    echo  $autorisation_entrer;
//}
//elseif ($autorisation_entrer == "Non") // SINON SI on n'a pas l'autorisation d'entrer
//{
//    echo  $autorisation_entrer;
//}
//else // SINON (la variable ne contient ni Oui ni Non, on ne peut pas agir)
//{
//    echo "Euh, je ne connais pas ton âge, tu peux me le rappeler s'il te plaît ?";
//}

//$repetitions = 0;
//while ($repetitions < 100) {
//    echo 'Ceci est la ligne n°' . $repetitions . '<br />';
//    $repetitions++;
//}

//for ($repetitions = 1; $repetitions < 10; $repetitions++) {
//    echo 'Ceci est la ligne n°' . $repetitions . '<br />';
//
//}

//$prenoms = ['francois', 'joe', 'jacquie', 'michel'];
//for ($numero = 0; $numero<=count($prenoms);$numero++){
//    echo $prenoms[$numero].$br;
//}
//foreach ($prenoms as $cle => $prenom){
//    echo "<p>Ceci est la ligne $cle pour $prenom </p>".$cle * strlen($prenom);
//
//    echo $br;
//}

$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

echo '<pre>';
print_r($coordonnees);
echo '</pre>';

//    echo '<table><tbody>';
//foreach ($coordonnees as $key => $value){
//        echo '<tr style="border:gray;"><td>'.$key.'</td><td>'.$value.'</td></tr>';
//    }
//    echo '</tbody></table>';
