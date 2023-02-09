<?php
/**
 * This is the second tutorial about arrays in PHP:
 * in this video, we will be talking about some of the string methods we can apply:
 * - explode() method
 * - implode() method, also known as join() method
 * - array_sum() method
 * - str_replace() method
 * - str_split() method
 */
// ===================================================================================

// using explode method:
$str_items = "item1 item2 item3 item4 item5 item6";

// explode is turnning a string to an array based on a specific separator.
// in this example, space is our separate to create an array called $arr_items:
$arr_items = explode(" ", $str_items);

// lets view the string $str_items and then, the array $arr_items:
echo "<u><h4> The line we want to convert to string: </h4></u>";
echo "$str_items";

echo "<u><h4> The line items after using explode() method to convert to an array: </h4></u>";
echo "<pre>";
print_r($arr_items);
echo "</pre>";

// using implode() method, join() method performs the same trick as well:
// for this purpose, we will create an array of members:
$members = array("Ahmed","Mohammed","Saeed","Faisal","Fahad");

// to turn the array items inside $members array to a string, we can use implode() method:
$str_members = implode(" ", $members); // " " is the separator
// or:
$str_members_join = join(" ", $members); // " " is the separator
// Viewing the array of members first and then, the $str_members we created using implode() method:
echo "<h4> Viewing the items inside the members Array:</h4>";
echo "<pre>";
print_r($members);
echo "</pre>";
echo "<h4> Viewing the str_members line after using implode() methods:</h4>";
echo $str_members. "<br>";
echo "<h4> viewing the str_members_join line after using join() methods: </h4>";
echo $str_members_join. "<br>";

// Using str_replace() Method:
/**
 * str_replace() method is extremely important and understanding how to apply is extremely important.
 * please view the following examples to form some comprehension of the concept.
 */
// using str_replace on a string:
$string = "I love PHP language because it is an interesting language to learn";
echo "<h4>Viewing the String before repalcing: </h4>";
echo $string."<br>";
// using str_replace to replace PHP with Python:
$string = str_replace("PHP", "Python", $string);
echo "<h4> Viewing the string after replacing PHP with Python</h4>";
echo $string. "<br>";

// using str_replace on an array:
$languages = array("PHP", "JavaScript", "Java", "Python", "C#", "GoLang", "Kotline", "MYSQL");
echo "<h4>Viewing the languages array before replacing:</h4>";
echo "<pre>";
print_r($languages);
echo "</pre>";
// replacing Java with @@@@:
$languages = str_replace("Java", "@@@@", $languages);
echo "<h4>Viewing the languages array after replacing:</h4>";
echo "<pre>";
print_r($languages);
echo "</pre>";


// using str_replace to replace certain values using an array:
$languages = array("PHP", "JavaScript", "Java", "Python", "C#", "GoLang", "Kotline", "MYSQL");
// we redefined $members array to its original format to work with:
echo "<h4>Viewing the languages array before replacing:</h4>";
echo "<pre>";
print_r($languages);
echo "</pre>";

// using a specific array to search through to replace:
$filter = array("H", "P", "J", "G", "K", "M", "C", "SQL"); // Capital letters
$replaceWith = array("h", "p", "j", "g", "k", "m", "c", "sql"); // small letters

$languages = str_replace($filter, $replaceWith, $languages); // str_replace will change Capital letters to Small

echo "<h4>Viewing the languages array after using filters array and replaceWith array:</h4>";
echo "<pre>";
print_r($languages);
echo "</pre>";


/**
 * Note:
 * str_replace can be used on both strings and arrays, whether indexed array or associative array.
 * It is used widely through applications designed by PHP language.
 * It is important to fully understand how it functions.
 */

//  Example of str_split() Method:
$str_to_split = "I am here";
$str_split_array= str_split($str_to_split); // str_split($array_name, length) => length stands for count. Default 1
echo "<pre>";
print_r($str_split_array);
echo "</pre>";
$str_split_array_2 = str_split($str_to_split, 5);
echo "<pre>";
print_r($str_split_array_2);
echo "</pre>";



?>