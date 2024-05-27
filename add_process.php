<?php
session_start();
echo $_SESSION['userName'];
include("../Config/db_config.php");

if(!empty($_GET)){
    $Error="";

    if(empty($_GET['name']) || empty($_GET['type']) || empty($_GET['price']) || empty($_GET['id'])){
        $Error.="you must enter a value <br>";
        header("location:../addItems.php?Error=$Error");
    }
    else{
        $name=$_GET['name'];
        $type=$_GET['type'];
        $price=$_GET['price'];
        $id=$_GET['id'];

        $query="INSERT INTO item (name, type, price, branchID) VALUES('$name', '$type', '$price', '$id')";
        if(mysqli_query($connection, $query)){
            header("location:../addItems.php?message='Done'");
        }
        else{
            echo "Error".$query.mysqli_error($connection);
        }
    }
}

?>