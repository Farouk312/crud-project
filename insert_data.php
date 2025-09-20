<?php
include ('dbcon.php');
if(isset($_POST['add_students'])){
    $fname=$_POST['f_name'];
    $lname=$_POST['l_name'];
    $age=$_POST['age'];


    if(($fname=="" || empty($fname)) && ($lname=="" || empty($lname)) && ($age=="" || empty($age))){
        header('location:index.php?message= You need to fill the Categories!');
    }elseif ($fname=="" || empty($fname)){
        header('location:index.php?message= You need to fill the first name!');
    }
    else if($lname=="" || empty($lname)){
        header('location:index.php?message= You need to fill the last name!');
    }
    else if($age=="" || empty($age)){
        header('location:index.php?message= You need to fill the age!');
    }
    else{
        $query = "insert into `students` (`first_name`, `last_name`,`age`) values ('$fname','$lname','$age')";
        $result=mysqli_query($connection,$query);
        if(!$result){
            die("query failed: " . mysqli_error($connection));
        }
        else{
            header('location:index.php?insert_msg=Your data has been added succesfuly');
        }

        
    }

}


?>