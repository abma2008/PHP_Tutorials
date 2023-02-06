<?php
/**
 * In this tutorial, we will be given some examples about the different data types 
 * and also walk through some examples on how to view datatypes and more practical
 * work to familiarize you with php data types:
 * - how to create a variable
 * - how to view its datatype
 */

// ================================================================================

/* datatypes are mainly:
1- integer
2- double -- also known as float
3- boolean
4- string
5- null
 */

// Integer:
$x = 5;
echo "Value: ".$x." and datatype: ".gettype($x)."<br>";
// Double or Float:
$y = 10.5;
echo "Value: ".$y." and datatype: ".gettype($y)."<br>";
// string:
$s = 'Hello World';
echo "Value: ".$s." and datatype: ".gettype($s)."<br>";
// boolean:
$b = true; // it should return 1. if you write false, it will return 0
echo "Value: ".$b." and datatype: ".gettype($b)."<br>";
// null:
$n = null;
echo "Value: ".$n." and datatype: ".gettype($n)."<br>";

// ========================================================
// we can use var_dump() to check for the datatype:
// ========================================================

echo var_dump($y)."<br>";
echo var_dump($s)."<br>";
echo var_dump($b)."<br>";
echo var_dump($n)."<br>";
echo var_dump($x)."<br>";

// This is the end of this lesson:


?>