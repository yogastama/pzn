<?php
function factorialRecursive($number)
{
    if ($number == 1) {
        return 1;
    } else {
        return $number * factorialRecursive($number - 1);
    }
}
echo factorialRecursive(5);
// problem factorial recursive adalah jika terlalu dalam, maka memory yang akan digunakan juga akan berlebih. jika semakin banyak memory yang digunakan, maka bisa menyebabkan error memory