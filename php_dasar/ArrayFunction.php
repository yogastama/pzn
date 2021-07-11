<?php

$dataNilai = [
    80,
    90,
    100,
    70
];

$dataTextNilai = array_map(function ($value) {
    if ($value >= 90) {
        return 'Anda lulus : ' . $value;
    } elseif ($value >= 70) {
        return 'Anda remedial : ' . $value;
    } else {
        return 'Anda tidak lulus : ' . $value;
    }
}, $dataNilai);
// var_dump($dataTextNilai);

sort($dataNilai);
rsort($dataNilai);
var_dump($dataNilai);
