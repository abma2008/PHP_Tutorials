<?php
/**
 * This is a short Tutorial on how to use for loop in PHP...
 * The examples given are straight forward and explain how it works:
 * - looping over a string:
 * - looping over an array of numbers
 * - looping over an array with keys and values pairs
 */

//  Looping over a certain number:
echo "<h1>Starting looping Decendingly:</h1> <br>";
for($x = 0; $x <= 10; $x++){
    echo "Start Counter: $x <br>";
}
// using a reverse count down:
echo "<h1>Starting looping Acendingly:</h1> <br>";
for($x = 10; $x >= 0; $x--){
    echo "Start Count Down: $x <br>";
}

// looping over a string:
echo "<h1> Looping over a string value and displaying the index and the letter corresponding</h1>";
$mystring = "Hello World";
for($x=0; $x < strlen($mystring); $x++){
    echo "Counting: $x ". "String Char: $mystring[$x] <br>";
}

// looping over an array:
echo "<h1>Looping over an Array using the classical for loop</h1> <br>";
$names = array("Hello", "world", "Welcome", "New");
for($x=0; $x< count($names); $x++){
    echo "Count: $x  it corresponds to value: $names[$x] <br>";
}

echo "<h1>Using the foreach instead for classical for loop to display the array values</h1> <br>";
foreach($names as $name){
    echo "The Value: $name <br>";
}

echo "<h1>Using foreach to access the key and the value as a pair</h1>";
foreach($names as $key => $value){
    echo "The key: $key ---- The value: $value <br>";
}


?>