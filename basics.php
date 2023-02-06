<?php
/*
This is a basic for all the php language basics. The goal is to upload and keep a recorded version
of all the exercises tried and learned over the time in github as a backup.
please view and always write a basic and straight-forward code.

*/
// ================================================================================================

// how to write and output a message on the page:
echo "Hello World ! using echo";
echo "<br>";


// if you want to output using a different syntax, we can use print:
print "Hello World ! using print";
print "<br>";


// some functions to know about string that can be extremely useful:
// - strlen()
// - str_word_count()
// we will be using the previous examples to count:
$myline = "Hello World ! using echo";
echo "$myline =>". "Total Characters => ".strlen($myline). "<br>";
echo "$myline =>". "Total Words => ".str_word_count($myline);

// Creating an empty array:
print "<br>";
$mywords = ["Ahmed", "Mohammed", "Faisal", "saeed"]; // this is an array with values
// displaying the content of an array raw:
print_r($mywords);

// displaying the previous array in a more format using <pre></pre> html tags:
echo "<pre>";
print_r($mywords);
echo "</pre>";


// an array can be in a form of key and value pair:
$mywords = ["Ahmed", "Mohammed", "Faisal", "Saeed"];

// using foreach() to loop over the keys and values of $mywords:
foreach($mywords as $key => $value):
    echo "$key- $value <br>";
endforeach;

// using array_push():
// Suppose, we want to add another name to the $mywords array above:
array_push($mywords, "Almashani");
// viewing the $mywords array after pushing a key and value pair into it:
echo "<pre>";
print_r($mywords);
echo "</pre>";

// This is the end of the PHP
?>
