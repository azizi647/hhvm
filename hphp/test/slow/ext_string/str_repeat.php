<?php


<<__EntryPoint>>
function main_str_repeat() {
$var = str_repeat('A', -1);
var_dump($var);
$var = str_repeat('A', 9223372036854775807);
var_dump($var);
}
