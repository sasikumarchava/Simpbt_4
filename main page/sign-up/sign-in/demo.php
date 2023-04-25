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

if(isset($_POST["mylogin"])){
    $mail = $_POST["email1"];
    $pass = $_POST["password1"];


    $q1 = "SELECT * FROM CREDENTIALS";
    $res = mysqli_query($mycon,$q1);

    $numrows=mysqli_num_rows($res);

    while($numrows>0){
        $onerow = mysqli_fetch_assoc($res);
        $numrows--;

        $chmail = $onerow["email"];
        $chpass = $onerow["password"];
        $chname = $onerow["name"];

        echo $chmail;
        echo $chpass;

        if($mail == $chmail && $pass == $chpass){
            header("Location: Food-item-list\index.php");
            $query1 = "INSERT INTO MYUSER VALUES('$chname')";
            $res1 = mysqli_query($mycon,$query1);
            
        }
        else{
            echo "Enter correct login credentials";
        }
    }
    
    
    
    
    

    

}

?>