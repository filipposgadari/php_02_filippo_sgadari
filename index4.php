<!-- Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere -->

<?php

$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
    ['name' => 'Filippo', 'surname' => 'Rossi', 'gender' => 'M'],
    ['name' => 'Francesca', 'surname' => 'Verdi', 'gender' => 'F'],
];

foreach ($users as $user) {
    $gender = $user['gender'];

    if ($gender === 'M') {
        echo "Buongiorno Sign. " . $user["name"] . " " . $user["surname"] . "\n";
    }elseif ($gender === 'F') {
        echo "Buongiorno Sign.ra " . $user["name"] . " " . $user["surname"] . "\n";
    }else {
        echo "Buongiorno " . $user['name'] . " " . $user['surname'] . "\n";
    }
};