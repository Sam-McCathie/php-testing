<?php
/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */
/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */
$time = 15;
print($time);

if($time < 12){ 
  echo "Good morning";
} else {
  echo "Good evening";
}

// shorthand for above
if($time < 12) echo "Good morning";
else echo "Good evening";

/* -------- Ternary Operator -------- */
echo $time < 12 ? "Good Morning" : "Good evening";

/* -------- Switch Statements ------- */
$favColor = "red";

switch($favColor){
  case "red":
    echo "hello r";
    break;
  case "green":
    echo "hello g";
    break;  
  case "blue":
    echo "hello b";
    break;
  default:
    echo "hello";
  }