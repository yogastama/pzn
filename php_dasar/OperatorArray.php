<?php

// operator union +
// untuk menggabungkan array

$nama = [
    'name' => 'yoga'
];
$alamat = [
    'city' => 'bekasi'
];
var_dump($nama + $alamat);

// operator equality ==
// cek key dan valuenya sama apa ngga 
$a = [
    'nama' => 'yoga',
    'umur' => 20
];
$b = [
    'umur' => 20,
    'nama' => 'yoga',
];
var_dump($a == $b);

// cek identity ===
// cek dia punya data yg sama apa ngga
// cek posisinya sama apa ngga
var_dump($a === $b);

// operator ineuqality != 
// cek apakah datanya beda
var_dump($a != $b);

// operator nonidentity !==
var_dump($a !== $b);
