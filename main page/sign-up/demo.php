<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "testdb";

$mycon= mysqli_connect($servername,$username,$password,$database);

if(!$mycon){
    die("not connected: ".mysqli_connect_error());
}
else{
    echo "successful";
}



if(isset($_POST["mysubmit"])){
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["user"];
    $password = $_POST["password"];
    $gender = $_POST["RadioOption"];
    $address = $_POST["address"];

    $q1 = "INSERT INTO CREDENTIALS VALUES('$name','$email','$password','$phone','$address','$gender')";
    $res = mysqli_query($mycon,$q1);

    if($res){
        header("Location: sign-in\Food-item-list\index.php");
    }
    else{
        echo "values not inserted";
    }

    session_start();
    
    $_SESSION["username"]= $name;


}


?>