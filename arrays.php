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


// Some of the important array Methods you must be familiar with:

// in_array():
/*
in_array is a method that loops and return either true or fase based on the condition. For example,
if we check the array names for a value and want to know if it is exists or not, we can use in_array(). The following 
example shows how: 
*/
echo "<br>";
if(in_array("Welcome", $names, false)){ //false is optional, but if we turn it to true, it means it will check value and datatype
    echo "The word exists.<br>";
}
else{
    echo "The word does not exist.<br>";
}

// array_search():
/**
 * This method is another important method to learn and be aware of in PHP.
 * It searches a specified array and returns either true or false based on the checking.
 * please check the following example:
 */
$search_welcome = array_search("Welcome", $names, true);
if($search_welcome){
    echo "The Word exists and its index is: $search_welcome and its value: $names[$search_welcome] <br>";
}

// array_key_exists()  method:
/**
 * This is most useful when we have key-value pair array.
 * Meaning, the index is not auto numbering starting from zero.
 * since $names array is indexed, we will create a new array with key
 * and value pairs and implement to see how array_key_exists() method
 * works:
 */
$countryCodes = array(
    "EGYPT" => "+22",
    "SUDAN" => "+24",
    "OMAN"  => "+968",
    "UAE"   => "+971",
    "Kuwait" => "+965"
);

// Checking to know if Oman as a key exists in the array or not:
// array methods are case-sensitive, meaning, if they dont match exactly, they return false
if(array_key_exists("oman", $countryCodes)){
    echo "Yes, Oman Area Code exist in the array"."<br>";
}
else{
    echo "NO, Oman area code does not exist in the array"."<br>";
}

?>