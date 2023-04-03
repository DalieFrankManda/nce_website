<?php
include('../connection.php');


$firstname = $_POST['firstname'];
$surname = $_POST['surname'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$phone = $_POST['phone'];

if($password != $cpassword){
    echo '<script>
    alert("Password did not match");
    window.location="register.php";
    </script>';
}
else{
    $sql="insert  into `administrators` (firstname, surname, password, phone) values ('$firstname', '$surname', '$password', '$phone')";

    $result=mysqli_query($connect, $sql);
    if($result){
        echo '<script>
        alert("You have successfully registered as an admin for NACERS");
        window.location="login.php";
        </script>';
        }
    else{
        die(mysqli_error($connect));
    }


}


?>