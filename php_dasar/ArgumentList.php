<?php

function sumAll(...$numbers): string
{
    $total = '';
    foreach ($numbers as $number) {
        $total .= $number['nama'];
    }
    return $total;
}
echo sumAll([
    'nama' => 'yoga'
], [
    'nama' => 'halo'
]);
