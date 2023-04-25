<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "testdb";


$mycon= mysqli_connect($servername,$username,$password,$database);


$que2 = "DELETE FROM MYUSER";
$resultt2 = mysqli_query($mycon,$que2);

header('Location: http://localhost:8081/mybootstrap/food-exploria/main%20page/sign-up/sign-in/index.php');

?>