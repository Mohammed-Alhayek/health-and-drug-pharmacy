<?php

include("../Config/db_config.php");

if(!empty($_POST)){
    $Error="";

    if(empty($_POST['enterName']) || empty($_POST['phoneNumber']) || empty($_POST['Question'])){
        $Error.="you must enter a value <br>";
        header("location:../index.php?Error=$Error");
    }
    else{
        $enterName=$_POST['enterName'];
        $phonenumber=$_POST['phoneNumber'];
        $Question=$_POST['Question'];

        $query="INSERT INTO question (userName, userPhoneNumber, Title) VALUES('$enterName', '$phonenumber', '$Question')";
        if(mysqli_query($connection, $query)){
            header("location:../index.php?message='Done'");
        }
        else{
            echo "Error".$query.mysqli_error($connection);
        }
    }
}

?>