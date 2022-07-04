<?php
    echo "<hr/><b>Functions</b></br>";

    $x = 8; // globally scoped

    function myTest(){
        $y = 7; // local scope
        // using $x will throw an error because it is out of scope
        echo "global '$x', local $y";
    }
    myTest(); // call function

    echo "<br/>";

    $z = 9; // also global scope

    function myTestGlobal(){
        $y = 7; // local scope
        global $x, $z; // access multiple global variables inside function
        echo "global $x, global2 $z, local $y";
    }
    myTestGlobal();

    echo "<br/>";

    function myTestGlobalArray(){
        // php stores global variables in an array called $GLOBALS[index]. The index holds the name of the variable.
        $GLOBALS['combo'] = $GLOBALS['x'] + $GLOBALS['y'];
        // 1. create a new global variable with the name combo
        // 2. combine x & y global variables
    }
    myTestGlobalArray();

    echo $combo; // call combo after its created with myTestGlobalArray()

    echo "<br/>";

    function myTestStatic(){
        static $a = 0;
        echo $a;
        $a++; // increment $a
    }
    myTestStatic(); // 0
    echo "<br/>";

    myTestStatic(); // 1
    echo "<br/>";

    myTestStatic(); // 2
    echo "<br/>";

?>