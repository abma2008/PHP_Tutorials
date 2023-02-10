<?php
/**********************************************************************************

Function Tutorial in PHP:
=========================
This tutorial will be talking briefly about functions and how to:
- create a function
- call a function
- classic functions
- arrow functions

we will keep this tutorial simple and straight forward to avoid complexity
have fun!!!!!!!!!!!!!!!!! :)

 *********************************************************************************/

// Creating  simple function that returns hello World:
function HelloWorld(){
    echo "Hello World". "<br>";
}
// calling the function HelloWorld();
echo HelloWorld(). "<br>";

// Creating a function that returns a value passed as a parameter:
function Greeting($name){
    return "Hello $name"."<br>";
}

// calling the function Greeting():
echo Greeting("Ahmed");

// another function with two parameters, setting the datatype, using arrow function:
$addition = fn($val1, $val2) => $val1 + $val2;
echo $addition(2,4)."<br>";

// a function that accepts unlimited parameters:
function SumContent(...$nums){
    $total = 0;
    foreach($nums as $num):
        $total += $num;
    endforeach;
    echo "The type of the parameter is: ".gettype($nums)."<br>";
    return $total;
}
echo "The sum of 1,2,3,4,5 equals ".SumContent(1,2,3,4,5)."<br>";

// Writing the same function using arrow function:
$sumArrow = fn(...$nums) => array_sum($nums)." ===> Type of the parameter is: ".gettype($nums)."<br>";
echo "The sum of 1,2,3,4,5 using arrow function equal ".$sumArrow(1,2,3,4,5)."<br>";

// Using arrow function in array_map and array_filter:
// array filter:
$numbers = array(1,2,3,4,5,6,7,8,9,10);
// create a new array that takes only the even numbers and calls the new array even numbers:
$evenNumbers = array_filter($numbers, fn($i) => $i % 2 === 0 ? $i : "");
print_r($evenNumbers);
echo "<br>";
// create a new array that takes only the odd numbers an calls the new array odd numbers:
$oddNumbers = array_filter($numbers, fn($i) => $i % 2 !== 0 ? $i : "");
print_r($oddNumbers);
echo "<br>";

// using arrow functions with array_map() method:
/**
 * Main Difference between array_map and array_filter is that array_map always returns a value when comparing.
 * unlike array_filter(), it returns only based on the condition given. we will create a new array using 
 * array_map where we will return the item multiplied by itself: 
**/
$doubleNumbers = array_map(fn($item) => $item * $item, $numbers);
echo "<h4>Displaying the doubleNumbers Array after using array_map method to create it </h4>";
print_r($doubleNumbers);
echo "<br>";

// One line condition using ? and : instead of a function or if else statments:
// we will assign both values random numbers using random() method:
$x = rand(1,300);
$y = rand(1,300);
echo "<h4>Using Rand() method to compare $x and $y </h4>";
echo $x > $y ? "Yes, <b style=\"color:red\">$x</b> is more than $y": 
"No, $x is not more than <b style=\"color:red\">$y</b>";


// This is the end of this tutorial regarding basic syntax of functions whether classic or arrow functions.
// for more to come in the future.

?>