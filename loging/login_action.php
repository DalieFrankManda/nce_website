<?php

include('../connection.php');


session_start();


$surname=$_POST['surname'];
$password=$_POST['password'];
$phone=$_POST['phone'];

$sql="SELECT * FROM `administrators` WHERE surname='$surname' and password='$password' and phone='$phone'";


$result=mysqli_query($connect, $sql);
if(mysqli_num_rows($result)>0){

    // creating the session to for the admin
    $data=mysqli_fetch_array($result);
    $_SESSION['id']=$data['id'];
    $_SESSION['data']=$data;

    // $data=mysqli_fetch_array($result);
    // $_SESSION['id']=$data['id'];
    // $_SESSION['name']=$data['name'];
    // $_SESSION['photo']=$data['photo'];
    // $_SESSION['data']=$data;


    echo '<script>
        alert("Welcome to NACERS");
        window.location="../dashboard/engLal.php";
       
    </script>';
}


else{
    echo '<script>
        alert("Invalid Credentials");
        window.location="login.php";
    </script>';
}



?>