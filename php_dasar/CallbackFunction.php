<?php
function sayHello($firstName, $lastName, callable $filter)
{
    $filterName = call_user_func($filter, $firstName, $lastName);
    return $filterName;
}
$name = sayHello('Yoga', 'Bagas', function ($firstName, $lastName) {
    return strtolower($firstName) . ' ' . strtolower($lastName);
});
// echo $name;

function sayHellos($firstName, $lastName, callable $filter)
{
    $filterName = call_user_func_array($filter, [$firstName, $lastName]);
    return $filterName;
}
$name = sayHellos('Yoga', 'Bagas', function ($firstName, $lastName) {
    return strtolower($firstName) . ' ' . strtolower($lastName);
});
echo $name;
