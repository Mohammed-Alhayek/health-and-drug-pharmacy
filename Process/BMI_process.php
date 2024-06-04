<?php
    if(!empty($_GET)){
        $error="";
    
        if(empty($_GET['height']) || empty($_GET['weight'])){
            $error.="values can't be empty";
            header("location:../index.php?error=$error");
        }
        if (!empty($_GET)) {
            if(isset($_GET['calculate']))
            $weight = $_GET['weight'];
            $height = $_GET['height'];
        
            $bmi = $weight / ($height / 100) ** 2;
            $result="";
        
            if ($bmi <= 18.5) {
                $result.= "UNDERWEIGHT Range";
                header("location:../index.php?result=$result&bmi=$bmi");
                }
                else if ($bmi > 18.5 AND $bmi <= 24.9 ) {
                $result = "NORMAL Range";
                header("location:../index.php?result=$result&bmi=$bmi");
                }
                else if ($bmi > 24.9 AND $bmi <= 29.9) {
                $result = "OVERWEIGHT Range";
                header("location:../index.php?result=$result&bmi=$bmi");
                }
                else if ($bmi > 30.0) {
                $result = "OBESE Range";
                header("location:../index.php?result=$result&bmi=$bmi");
            }
        }
    }
?>