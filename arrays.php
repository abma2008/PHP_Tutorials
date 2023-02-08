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
 * - in_array() method => returns true or false if a value exists or not
 * - array_search() method => return the index in case if it is true
 * - array_key_exists() method => returns true or false if a value exists or not
 * - sort() method => sorts alphabetically 
 * - rsort() method => reverse the items inside the last making last first and first last
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
// using a nested array and foreach nested inside foreach:
// ======================================================================================
echo "<h4> Nested arrays and using foreach() and nested foreach() to loop:</h4>";
$countries = array(
    "OMAN" => array("Muscat", "Salalah"),
    "UAE"  => array("Dubai", "Alain"),
    "EGYPT" => array("Cairo", "Alexandari")

);
// Looping over the nested array of countries and formatting them in a way that displays them properly:
    foreach($countries as $country => $cities){
        echo "<strong> $country</strong><br>";
        foreach($cities as $city){
            echo "-$city<br>";
        }
    }
    echo "<br>";
// ======================================================================================
// This is the end of today lesson, please tell me if it is beneficial or not....
// More to come in the future

// Knowing the number of items inside an array:
echo "Total Values inside names array: ". count($names). "<br>";
// knowing the number of values repeated inside an array:
echo "Displaying the value and how many times it is repeated: <br>";
print_r(array_count_values($names)). "<br>";

echo "<br>";
echo "<h4><u>Using in_array() to check if `Welcome` exists in names array:</u></h4>";
// using in_array() to return true or false in case if an value exists, it should return index or key:
    if(in_array("Welcome", $names, true)){
        echo "The Value exists...<br>";
    }
    else{
        echo "The Value does not exist...<br>";
    }

// using array_search() method to search for a specific value and return its index:
    echo "<h4> detailed array_search() method, but not recommended:</h4>";
    if(array_search("Welcome", $names)){
        echo "The Value exists at index ".array_search("Welcome", $names)." and the value is ". $names[array_search("Welcome", $names)];
    }

// Another way is saving the return of array_search() to a variable and then using the if statement:
    echo "<h4> using the array_search() methods to return index of a value:</h4>";
    $search_welcome = array_search("Welcome", $names);
    if($search_welcome){
        echo "The value exists at index $search_welcome and the value is $names[$search_welcome]";
    }
    else{
        echo "The value does not exist";
    }
    echo "<br>";
// using array_key_exists() method, but we will be using $countries array since key and pair are defined:
if(array_key_exists("OMAN", $countries)){
    echo "The key OMAN exists in:<br>";
    echo "<pre>";
    print_r($countries);
    echo "</pre>";
}
// using sort() and rsort() on indexed arrays:
/**
 * for indexed array, and that means the arrays that are using auto indexing starting from zero.
 * in another word, arrays that are not composed manually defined key-value.
 * we will be using $names for this one:
 */
// before sorting:
    echo "<h4> Before Sorting the names array: </h4>";
    echo "<pre>";
    print_r($names);
    echo "</pre>";
// after sorting:
    sort($names, SORT_REGULAR); //we can replace SORT_REGULAR with SORT_STRING, but by default, it is SORT_REGULAR
    echo "<h4> After Sorting the names array: </h4>";
    echo "<pre>";
    print_r($names);
    echo "</pre>";
// reverse Sorting:
    rsort($names, SORT_REGULAR); // we can replace SORT_REGULAR with SORT_STRING, but by default, it is SORT_REGULAR
    echo "<h4> reverse Sorting the names array: </h4>";
    echo "<pre>";
    print_r($names);
    echo "</pre>";



?>