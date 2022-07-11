<?php
/*-------- For Loop --------*/
/*
    for(initialise; condition; increment){
        // code to be executed
    }
*/

for ($x = 0; $x <= 10; $x++) {
    echo "Number: $x (for)<br>";
  }
  
  /* ------------ While Loop ------------ */
  
  /*
  ** While Loop Syntax
    while (condition) {
    // code to be executed
    }
  */
  
  $x = 1;
  
  while ($x <= 5) {
    echo "Number: $x (while)<br>";
    $x++;
  }
  
  /* ---------- Do While Loop --------- */
  
  /*
  ** Do While Loop Syntax
    do {
    // code to be executed
    } while (condition);
  do...while loop will always execute the block of code once, even if the condition is false.
  */
  
  do {
    echo "Number: $x <br>";
    $x++;
  } while ($x <= 5);
  
  /* ---------- Foreach Loop ---------- */
  
  /*
  ** Foreach Loop Syntax
    foreach ($array as $value) {
    // code to be executed
    }
  */
  
  // Loop through an array
  
  $numbers = [1, 2, 3, 4, 5];
  
  foreach ($numbers as $x) {
    echo "Number: $x (foreach)<br>";
  }
  
  // Use the indexes within the loop
  
  $posts = ['Post One', 'Post Two', 'Post Three'];
  
  foreach ($posts as $index => $post) {
    echo "${index} - ${post} (foreach)<br>";
  }
  // post - holds value of current value from posts
  // index - holds value of index of current post

  // Use the keys within the loop for an associative array
  
  $person = [
    'first_name' => 'Sam',
    'last_name' => 'McCathie',
    'email' => 'sam@gmail.com',
  ];
  
  // Get Keys
  foreach ($person as $key => $value) {
    echo "${key} - ${value} <br>";
  }