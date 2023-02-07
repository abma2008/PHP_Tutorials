<?php
/**
 * This is a tutorial to explain some of the basics about arrays in PHP.
 * we will be talking about:
 * - creating array => using array("val1", "val2",..etc) or ["val1","val2", ...etc]
 * - array_push() => adds a value or item to the end of an array 
 * - array_merge() => merges two arrays into one
 * - array_pop() => removes the last item orvalue inside an array
 * - array_shift() => removes the first item or value inside an array
 * - array_unshift() => adds a value  or item to the beginning of an array
 * - count() => return the total number of values inside an array
 * - array_count_values() => returning each value and how many times it got repeated
 */

//  Creating an Array:
$names = array(
    "Hello",
    "World",
    "Welcome",
    "Sayhi",
    "Salim");
print_r ($names);
echo "<br>";
// pushing a new value at the end of the array:
array_push($names, "last");
print_r($names);
echo "<br>";
// adding a new value at the start of the array:
array_unshift($names, "first");
print_r($names);
echo "<br>";
// Deleting the last value of an array:
array_pop($names);
print_r($names);
echo "<br>";
// Deleting the first value of an array:
array_shift($names);
print_r($names);
echo "<br>";
// Merging two arrays:
// we already have $names array, we will make a new array that contains: first, last

$new_names = ["first", "last"];

// Merging $new_names with $names:
$names = array_merge($names, $new_names);
print_r($names);
echo "<br>";

// This is the end of today lesson, please tell me if it is beneficial or not....
// More to come in the future

// Knowing the number of items inside an array:
echo "Total Values inside names array: ". count($names). "<br>";
// knowing the number of values repeated inside an array:
echo "Displaying the value and how many times it is repeated: <br>";
print_r(array_count_values($names)). "<br>";



?>