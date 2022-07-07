<?php
/* --------- Variable Rules --------- */
// - Variables must be prefixed with $
// - Variables must start with a letter or the underscore character
// - variables can't start with a number
// - Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
// - Variables are case-sensitive ($name and $NAME are two different variables)


/* --------- PHP Data Types --------- */
// - String - A string is a series of characters surrounded by quotes
$name = "Sammy";

// - Integer - Whole numbers
$age = 26;

// Float - Decimal numbers
$approxAge = 26.5;

// Boolean - true or false
$isCool = false;

// Array - An array is a special variable, which can hold more than one value
$numbers = [1,2,3,4,5];

// Object - A class
class foo
{
    function do_foo()
    {
        echo "Hello from foo."; 
    }
}

$bar = new foo; // create new object
$bar->do_foo(); // call method inside class -> Hello from foo.

// NULL - Empty variable
$ohNo = null;

// Resource - A special variable that holds an external resource


/* --------- Using Variables --------- */
echo "Hello my name is $name and I am $age years old."; // Hello my name is Sammy and I am 26 years old.

echo $age + 10; // 36
