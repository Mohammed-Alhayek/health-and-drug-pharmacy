<?php

if(isset($_GET['ID'])){
    include("../Config/db_config.php");

    $items_id= $_GET['ID'];
    $items_query= "DELETE FROM item WHERE ID ='$items_id'";
    if(mysqli_query($connection, $items_query)){
        $msg="item deleted successfully";
        header("location:../deleteItems.php?msg=$msg");
    }
    else
        echo "Error".$items_query." ".mysqli_error($connection);
}
else
    echo "error";
?>