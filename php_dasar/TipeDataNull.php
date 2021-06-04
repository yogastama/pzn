<?php
// sifatnya incase sensitive
$name = 'Yoga';
$name = null;
var_dump($name, is_null($name));
unset($name);
var_dump(isset($name));