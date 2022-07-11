<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

$fruits = ['apple', 'banana', 'orange'];

// Get array length
echo count($fruits);

// Search array
echo in_array('banana', $fruits);

// Add to the end of an array
$fruits[] = 'grape';

array_push($fruits, 'mango', 'raspberry'); // add multiple to end
array_unshift($fruits, 'kiwi'); // Adds to the beginning


// Remove from array
array_pop($fruits); // Removes last
array_shift($fruits); // Removes first
// Remove specific element
unset($fruits[2]);

// Split into chunks of 2
$chunkedArray = array_chunk($fruits, 2);
var_dump($chunkedArray); // array(2) { [0]=> array(2) { [0]=> string(5) "apple" [1]=> string(6) "banana" } [1]=> array(1) { [0]=> string(6) "orange" } }

// Concatenate arrays
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = array_merge($arr1, $arr2);
var_dump($arr3);
$arr4 = [...$arr1, ...$arr2]; // Use Spread
var_dump($arr4);

// Combine arrays (Keys & values)
$a = ['green', 'red', 'yellow']; // keys
$b = ['avocado', 'apple', 'banana']; // values
$c = array_combine($a, $b); //
var_dump($c); // array(3) { ["green"]=> string(7) "avocado" ["red"]=> string(5) "apple" ["yellow"]=> string(6) "banana" }

// Array of keys
$keys = array_keys($c);
var_dump($keys); // array(3) { [0]=> string(5) "green" [1]=> string(3) "red" [2]=> string(6) "yellow" }

// Flip keys with values -> values become keys and keys become values
$flipped = array_flip($c);
var_dump($flipped);

// Create array of numbers with range()
$numbers = range(1, 20);
var_dump($numbers); // array from 1 -> 20

// Map through array and create a new one
$newNumbers = array_map(function ($number) {
  return "Number ${number}";
}, $numbers);
var_dump($newNumbers); // e.g. [Number 1, Number 2, ..... , Number 20]

// Filter array
$lessThan10 = array_filter($numbers, fn($number) => $number < 10);
var_dump($lessThan10);

// Array Reduce
// "carry" holds the return value of the previous iteration
$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
var_dump($sum); // 210 ->  adds together the value of the array