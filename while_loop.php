<?php
/**
 * This is a short Tutorial for using while loop in PHP.
 * please make sure to view this example in the future in case if you need
 * to remember how it is done....
 * - while loop syntax
 * - do while loop syntax
 */

//  Looping over a specific range of numbers:
    echo "<h1> initializing a variable and then, while looping as long as the variable <= 10</h1>";
    $x = 0;
    while($x <=10){
        echo "Loop #: $x <br>";
        $x++;
    }

// using do while loop over the same example:
    echo nl2br("<h1> Initializing a variable and then, while looping as long as the variable <= 10</h1>
    <strong>USING DO WHILE LOOP</strong><br>");
    $x=0;
    do{
        echo "Loop #: $x <br>";
        $x++;
    } while($x <=10);

// Looping over a list of array using while loop, but this time, we will be using the count to get the total items
// inside an array:
echo "<h1> Looping over names array using while loop </h1>";
$names = ["ahmed", "faisal", "Mohammed", "Salim"];
$x = 0;
while($x < count($names)){
    echo "Displaying Name: $names[$x] <br>";
    $x++;
}

/**
 * This is the end of the while loop tutorial.
 * but it is not recommended to use a while loop to loop over an array.
 * usually, while loops can be infinite and if you are not writing them property,
 * it could result in an infinite loop causing the crush of the browser or the CPU.
 */
?>