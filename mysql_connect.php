<?php
/*************************************************************************************************
 
Connecting to mysql:
====================
This is a short lesson to illustrate how to connect to the database using mysqli in two different ways:
    1- using Object-Oriented mysqli
    2- using Procedural-Oriented mysqli
This is a very basic tutorial taken from w3school.com official website

**************************************************************************************************/

// Procedural mysqli:

$conn = mysqli_connect("localhost", "ahmed", "ahmed", "phptutorial");
if($conn){
    echo " mysqli procedural The connection is successfull<br>";
    $sql = "select count(*) from users";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "The total Users = ".mysqli_num_rows($result). "<br>";
    }
}
else{
    echo mysqli_connect_error();
}


// using mysqli object-oriented:
$conn2 = new mysqli("localhost", "ahmed", "ahmed", "phptutorial");
if ($conn2){
    echo "mysqli object-oriented The connection is successfull <br>";
    $sql = "select count(*) from users";
    $result = $conn2->query($sql);
    if($result){
        echo "The total Users = $result->num_rows". "<br>";
    }
}
else{
    echo $conn1->connect_error;
}
?>
