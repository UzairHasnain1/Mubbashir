<?php
include_once 'newcon.php';
if(isset($_POST['save']))
{
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $city_name = $_POST['city_name'];
    $email = $_POST['email'];
    $sql = "INSERT INTO users (first_name,last_name,city_name,email)
    VALUES ('$first_name','$last_name','$city_name','$email')";
    if(mysqli_query($conn,$sql))  {
        echo "New record created  successfully !";
    }

}




?>