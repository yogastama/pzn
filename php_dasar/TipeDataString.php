<?php
// single quote
echo 'ini string di tulis pakai kutip satu';
// double quote
// - bisa menggunakan escape sequence
echo "\n";
echo "ini string pakai escape sequence \n";
echo "Nama : \t \"Yoga\" \n";

    // MULTILINE STRING
        // heredoc
        // digunakan untuk membuat string panjang tanpa escape sequence \n
        // bisa parsing variabel
        $name = 'YOGA';
        echo <<<YOGA

        Halo ini adalah perkenalan $name
        Yoga adalah web dev.


        YOGA;
        // nowdoc
        // sama seperti heredoc tapi beda di parsing variable
        // ngga bisa parsing variabel
        echo <<<'YOGA'

        Halo ini adalah perkenalan $name
        Yoga adalah web dev.


        YOGA;
