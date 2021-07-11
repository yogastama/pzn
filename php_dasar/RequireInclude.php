<?php

// require berfungsi untuk load file php
    // file phpnya harus ada
    // kalau tidak ada, program akan berhenti
// include berfungsi untuk load file php
    // jika file phpnya tidak ada
    // program akan diberi warning
// require_once
    // dia sama fungsinya kayak require
    // hanya saja once memastikan jika filenya pernah diload, jika diload kembali dia akan aman
    // tidak memunculkan kasus seperti redeclare function
// include_once
    // dia fungsinya sama seperti include
    // once memastikan jika filenya pernah diload, dan kemudian diload kembali dikodenya, maka dia tidak akan di include