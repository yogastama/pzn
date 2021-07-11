<?php
$name = 'Yoga';
function sayHello()
{
    global $name;
    echo 'Halo ' . $name;
}
sayHello();
function sayHi()
{
    echo 'Hi ' . $GLOBALS['name'];
}
sayHi();
