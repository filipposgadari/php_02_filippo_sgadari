<!-- Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array -->

<?php

$numbers = [3, 8, 10, 7, 12, 5, 4, 21, 9, 1];

$somma = 0;
$count = 0;

foreach ($numbers as $n) {
  if ($n % 2 === 0) {
    $somma += $n;
    $count++;
  }
}

if ($count === 0) {
  echo "Nessun numero pari nell'array.";
} else {
  $media = $somma / $count;
  echo "Media dei numeri pari: " . $media . "\n";
};