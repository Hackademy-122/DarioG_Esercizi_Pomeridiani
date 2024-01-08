<?php

//! Esercizio Uno
//! Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array

$numeri = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];

$sommaPari = 0;
$conteggioPari = 0;


foreach ($numeri as $numero) {
    if ($numero % 2 == 0)
    {
        $sommaPari = $sommaPari + $numero;
        $conteggioPari++;
    }
}


if ($conteggioPari > 0) {
    $mediaPari = $sommaPari / $conteggioPari;
    echo "La media dei numeri pari è: {$mediaPari} \n" ;
} else {
    echo "Nessun numero pari.";
}

//! Es.2
//!Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome”  o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere

$users = 
[
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'M'],
    ['name' => 'James', 'surname' => 'Hetfield', 'gender' => 'M'],
    ['name' => 'Juliette', 'surname' => 'Lewis', 'gender' => 'F'],
    ['name' => 'Margot', 'surname' => 'Robbie', 'gender' => 'F'],
];

foreach($users as $user)
{   
    if ($user["gender"] == "M")
    {
        echo "Salve Sig. {$user['name']} {$user['surname']} \n";
    }
    elseif ($user["gender"] == "F")
    {
        echo "Salve Sig.ra {$user['name']} {$user['surname']} \n";
    }
}


//! Es.3
//! Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero è multiplo di 3 stampare “PHP” al posto del numero; se multiplo di 5 stampare “JAVASCRIPT”; se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY122".



$numeri = [];

for ($i = 1; $i <= 100; $i++)
{
    $numeri[] = $i;
}

foreach ($numeri as $num) {
    if ($num % 5 === 0 && $num % 3 === 0) {
        echo "HACKADEMY122 \n";
    } elseif ($num % 3 === 0) {
        echo "PHP \n";
    } elseif ($num % 5 === 0) {
        echo "JS \n";
    }
}

?>
