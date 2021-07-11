<?php

function increment()
{
    static $count = 1;
    echo $count . PHP_EOL;
    $count++;
}
increment();
increment();
increment();
increment();
