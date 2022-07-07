<?php
// simple arrays
$numbers = [1,2,3];
$fruits = ['apple', 'orange', 'pear'];

echo $fruits[1]; // orange

// Associative array
$colors = [
    'red' => '#f00',
    'green' => '#0f0',
    'blue' => '#00f'
];

echo $colors['green']; // #0f0

$person = [
    'name' => "Sam",
    'age' => 26
];
echo $person['name']; // Sam

// Multidimensional arrays -> arrays inside arrarys

$people = [
[
        'name' => "Sam",
        'age' => 26
    ],
    [
        'name' => "Kacy",
        'age' => 24
    ],
    [
        'name' => "Bob",
        'age' => 30
    ]
];
echo $people[2]['age']; //30

var_dump(json_encode($people)); // convert multi to json
// result = string(74) "[{"name":"Sam","age":26},{"name":"Kacy","age":24},{"name":"Bob","age":30}]"