<?php
    include('./dbconnection.php');

if(isset($_POST['create'])){
        $name=mysqli_real_escape_string($con,$_POST['name']);
        $regno=mysqli_real_escape_string($con,$_POST['regno']);
        $city=mysqli_real_escape_string($con,$_POST['city']);

        $sql="INSERT INTO student(name,regno,city) VALUES('$name','$regno','$city')";
        $res=mysqli_query($con,$sql);

        if($res){
            header('location:home.php');
        }else{
            echo "Failed to add student.";
        }
    }

    //update script
    if(isset($_POST['update'])){
        $id=mysqli_real_escape_string($con,$_POST['id']);
        $name=mysqli_real_escape_string($con,$_POST['name']);
        $regno=mysqli_real_escape_string($con,$_POST['regno']);
        $city=mysqli_real_escape_string($con,$_POST['city']);
        
        $sql="UPDATE student SET name='$name',regno='$regno',city='$city' WHERE id='$id'";
        $res=mysqli_query($con,$sql);

        if($res){
            header('location:home.php');
        }else{
            echo "Failed to update student.";
        }
    }

?>