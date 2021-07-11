<?php
$name = 'Yoga Bagas';

$otherName = &$name;

var_dump($otherName);

function increment(&$counter)
{
    $counter++;
}
$count = 1;
increment($count);
// increment($count);
var_dump($count);
