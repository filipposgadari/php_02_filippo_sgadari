<!-- Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere -->

<?php

$users = [
    ['name' => 'Davide', 
    'surname' => 'Cariola', 
    'gender' => 'NB'],
];

foreach ($users as $user) {
    $gender = $user['gender'];

    if ($gender === 'M') {
        echo "Buongiorno Sign. " . $user["name"] . "\n";
    }elseif ($gender === 'F') {
        echo "Buongiorno Sign.ra " . $user["name"] . "\n";
    }else {
        echo "Buongiorno " . $user['name'] . " " . $user['surname'] . "\n";
    }
    
};