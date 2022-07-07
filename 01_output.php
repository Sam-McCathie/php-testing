<?php
// echo - outputs strings, numbers and html
echo 123, "hello", "<i>Heeey</i>"; // 123helloHeeey

// print - works like echo, but takes one arg
print("yes"); // yes 

// print_r - print single values and arrays
print_r([1,2,3]); // Array ( [0] => 1 [1] => 2 [2] => 3 )

// var_dump - Returns more info like data type and length
var_dump(true); // bool(true)

var_dump("heeeelllooo"); // string(11) "heeeelllooo"

// var_export() - similar to dump -> outputs a string representation of a variable.
var_export('Nice') // 'Nice'
?>