<?php

// BELAJAR BILANGAN INTEGER
echo 'Bilangan desimal : ';
var_dump(1234);

echo 'Bilangan octal : ';
var_dump(011232);

echo 'Bilangan hexadesimal : ';
var_dump(0x123);

echo 'Bilangan biner : ';
var_dump(0b111);


echo 'Bilangan integer tapi pakai underscore biar mudah dibaca : ';
var_dump(1_218_929_121);

// convert octal to decimal dan sebaliknya
// $octal = 0123;
// // var_dump(decoct(octdec($octal)));

// function is_octal($octalNumber) {
//     return decoct(octdec($octalNumber)) == $octalNumber;
// }
// echo is_octal(014567);

// BELAJAR FLOATING POINT

echo 'Bilangan floating point : ';
var_dump(1.123);

echo 'Bilangan floating point dengan E notation : ';
var_dump(1e3);

echo 'Bilangan floating point dengan E notation minus : ';
var_dump(1e-3);

echo 'Bilangan floating point dengan underscore : ';
var_dump(1_123.123);

// BELAJAR INTEGER OVERFLOW
// - batas maksimum execute integer php di os 32bit dan 64bit
// - jika sudah melewati batas, maka dia akan di ubah menjadi desimal
echo 'Bilangan integer overflow';
// max buat 32 bit
var_dump(2147483647);
// max buat 64 bit
var_dump(9223372036854775807);