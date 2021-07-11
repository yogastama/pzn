<?php
function &sayHello()
{
    static $name = 'halo';
    return $name;
}
$say = &sayHello();
// $say = 'ok';
echo $say;
