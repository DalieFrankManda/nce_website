<?php
include('../connection.php');


$surname = $_POST['surname'];
$othername = $_POST['othername'];
$combi = $_POST['combi'];
$yearofstudy = $_POST['yearofstudy'];
$regnum = $_POST['regnum'];

$code1 = $_POST['code1'];
$code2 = $_POST['code2'];
$code3 = $_POST['code3'];
$code4 = $_POST['code4'];
$code5 = $_POST['code5'];
$code6 = $_POST['code6'];
$code7 = $_POST['code7'];
$code8 = $_POST['code8'];
$code9 = $_POST['code9'];
$code10 = $_POST['code10'];

$course1 = $_POST['course1'];
$course2 = $_POST['course2'];
$course3 = $_POST['course3'];
$course4 = $_POST['course4'];
$course5 = $_POST['course5'];
$course6 = $_POST['course6'];
$course7 = $_POST['course7'];
$course8 = $_POST['course8'];
$course9 = $_POST['course9'];
$course10 = $_POST['course10'];
$address = $_POST['address'];
$phone = $_POST['phone'];

$image=$_FILES['photo']['name'];
$tmp_name=$_FILES['photo']['tmp_name'];





if($combi == "Mat Agr"){

    $query_regnum = "SELECT * FROM `mat_agr` WHERE regnum = '$regnum'";
    $result=mysqli_query($connect, $query_regnum);

    if(mysqli_num_rows($result) > 0){
        echo '<script>
        alert("You have already registered");
        window.location="registration_form.php";
        </script>';
    }
    else {

        move_uploaded_file($tmp_name,"../signatures/$image");

        $sql="insert  into `mat_agr` (surname, othername, combi, yearofstudy, regnum, code1, code2, code3, code4, code5, code6, code7, code8, code9, code10, code11, code12, course1, course2, course3, course4, course5, course6, course7, course8, course9, course10, course11, course12, address, phone, photo) values ('$surname', '$othername', '$combi', '$yearofstudy', '$regnum', '$code1', '$code2', '$code3', '$code4', '$code5', '$code6', '$code7', '$code8', '$code9', '$code10', '$code11', '$code12', '$course1', '$course2', '$course3', '$course4', '$course5', '$course6', '$course7', '$course8', '$course9', '$course10', '$address', '$phone', '$image')";

        $result=mysqli_query($connect, $sql);
        if($result){
            echo '<script>
            alert("Registration successful as MAT AGR student");
            window.location="../website/departments.php";
            </script>';
            }
        else{
            die(mysqli_error($connect));
        }
        
    }

    
}

elseif ($combi == "Mat Bio") {
    $query_regnum = "SELECT * FROM `mat_bio` WHERE regnum = '$regnum'";
    $result=mysqli_query($connect, $query_regnum);

    if(mysqli_num_rows($result) > 0){
        echo '<script>
        alert("You have already registered");
        window.location="registration_form.php";
        </script>';
    }
    else {

        move_uploaded_file($tmp_name,"../signatures/$image");

        $sql="insert  into `mat_bio` (surname, othername, combi, yearofstudy, regnum, code1, code2, code3, code4, code5, code6, code7, code8, code9, code10, code11, code12, course1, course2, course3, course4, course5, course6, course7, course8, course9, course10, course11, course12, address, phone, photo) values ('$surname', '$othername', '$combi', '$yearofstudy', '$regnum', '$code1', '$code2', '$code3', '$code4', '$code5', '$code6', '$code7', '$code8', '$code9', '$code10', '$code11', '$code12', '$course1', '$course2', '$course3', '$course4', '$course5', '$course6', '$course7', '$course8', '$course9', '$course10', '$address', '$phone', '$image')";

        $result=mysqli_query($connect, $sql);
        if($result){
            echo '<script>
            alert("Registration successful as MAT BIO student");
            window.location="../website/departments.php";
            </script>';
            }
        else{
            die(mysqli_error($connect));
        }
        
    }

}

elseif ($combi == "Mat Chem") {
    $query_regnum = "SELECT * FROM `mat_chem` WHERE regnum = '$regnum'";
    $result=mysqli_query($connect, $query_regnum);

    if(mysqli_num_rows($result) > 0){
        echo '<script>
        alert("You have already registered");
        window.location="registration_form.php";
        </script>';
    }
    else {

        move_uploaded_file($tmp_name,"../signatures/$image");

        $sql="insert  into `mat_chem` (surname, othername, combi, yearofstudy, regnum, code1, code2, code3, code4, code5, code6, code7, code8, code9, code10, code11, code12, course1, course2, course3, course4, course5, course6, course7, course8, course9, course10, course11, course12, address, phone, photo) values ('$surname', '$othername', '$combi', '$yearofstudy', '$regnum', '$code1', '$code2', '$code3', '$code4', '$code5', '$code6', '$code7', '$code8', '$code9', '$code10', '$code11', '$code12', '$course1', '$course2', '$course3', '$course4', '$course5', '$course6', '$course7', '$course8', '$course9', '$course10', '$address', '$phone', '$image')";

        $result=mysqli_query($connect, $sql);
        if($result){
            echo '<script>
            alert("Registration successful as MAT CHEM student");
            window.location="../website/departments.php";
            </script>';
            }
        else{
            die(mysqli_error($connect));
        }
        
    }

}

elseif ($combi == "Mat Com") {
    $query_regnum = "SELECT * FROM `mat_com` WHERE regnum = '$regnum'";
    $result=mysqli_query($connect, $query_regnum);

    if(mysqli_num_rows($result) > 0){
        echo '<script>
        alert("You have already registered");
        window.location="registration_form.php";
        </script>';
    }
    else {

        move_uploaded_file($tmp_name,"../signatures/$image");

        $sql="insert  into `mat_com` (surname, othername, combi, yearofstudy, regnum, code1, code2, code3, code4, code5, code6, code7, code8, code9, code10, code11, code12, course1, course2, course3, course4, course5, course6, course7, course8, course9, course10, course11, course12, address, phone, photo) values ('$surname', '$othername', '$combi', '$yearofstudy', '$regnum', '$code1', '$code2', '$code3', '$code4', '$code5', '$code6', '$code7', '$code8', '$code9', '$code10', '$code11', '$code12', '$course1', '$course2', '$course3', '$course4', '$course5', '$course6', '$course7', '$course8', '$course9', '$course10', '$address', '$phone', '$image')";

        $result=mysqli_query($connect, $sql);
        if($result){
            echo '<script>
            alert("Registration successful as MAT COM student");
            window.location="../website/departments.php";
            </script>';
            }
        else{
            die(mysqli_error($connect));
        }
        
    }

}

elseif ($combi == "Mat Hec") {
    $query_regnum = "SELECT * FROM `mat_hec` WHERE regnum = '$regnum'";
    $result=mysqli_query($connect, $query_regnum);

    if(mysqli_num_rows($result) > 0){
        echo '<script>
        alert("You have already registered");
        window.location="registration_form.php";
        </script>';
    }
    else {

        move_uploaded_file($tmp_name,"../signatures/$image");

        $sql="insert  into `mat_hec` (surname, othername, combi, yearofstudy, regnum, code1, code2, code3, code4, code5, code6, code7, code8, code9, code10, code11, code12, course1, course2, course3, course4, course5, course6, course7, course8, course9, course10, course11, course12, address, phone, photo) values ('$surname', '$othername', '$combi', '$yearofstudy', '$regnum', '$code1', '$code2', '$code3', '$code4', '$code5', '$code6', '$code7', '$code8', '$code9', '$code10', '$code11', '$code12', '$course1', '$course2', '$course3', '$course4', '$course5', '$course6', '$course7', '$course8', '$course9', '$course10', '$address', '$phone', '$image')";

        $result=mysqli_query($connect, $sql);
        if($result){
            echo '<script>
            alert("Registration successful as MAT HEC student");
            window.location="../website/departments.php";
            </script>';
            }
        else{
            die(mysqli_error($connect));
        }
        
    }

}

elseif ($combi == "Mat Phy") {
    $query_regnum = "SELECT * FROM `mat_phy` WHERE regnum = '$regnum'";
    $result=mysqli_query($connect, $query_regnum);

    if(mysqli_num_rows($result) > 0){
        echo '<script>
        alert("You have already registered");
        window.location="registration_form.php";
        </script>';
    }
    else {

        move_uploaded_file($tmp_name,"../signatures/$image");

        $sql="insert  into `mat_phy` (surname, othername, combi, yearofstudy, regnum, code1, code2, code3, code4, code5, code6, code7, code8, code9, code10, code11, code12, course1, course2, course3, course4, course5, course6, course7, course8, course9, course10, course11, course12, address, phone, photo) values ('$surname', '$othername', '$combi', '$yearofstudy', '$regnum', '$code1', '$code2', '$code3', '$code4', '$code5', '$code6', '$code7', '$code8', '$code9', '$code10', '$code11', '$code12', '$course1', '$course2', '$course3', '$course4', '$course5', '$course6', '$course7', '$course8', '$course9', '$course10', '$address', '$phone', '$image')";

        $result=mysqli_query($connect, $sql);
        if($result){
            echo '<script>
            alert("Registration successful as MAT PHY student");
            window.location="../website/departments.php";
            </script>';
            }
        else{
            die(mysqli_error($connect));
        }
        
    }

}

elseif ($combi == "Hec Agr") {
    $query_regnum = "SELECT * FROM `hec_agr` WHERE regnum = '$regnum'";
    $result=mysqli_query($connect, $query_regnum);

    if(mysqli_num_rows($result) > 0){
        echo '<script>
        alert("You have already registered");
        window.location="registration_form.php";
        </script>';
    }
    else {

        move_uploaded_file($tmp_name,"../signatures/$image");

        $sql="insert  into `hec_agr` (surname, othername, combi, yearofstudy, regnum, code1, code2, code3, code4, code5, code6, code7, code8, code9, code10, code11, code12, course1, course2, course3, course4, course5, course6, course7, course8, course9, course10, course11, course12, address, phone, photo) values ('$surname', '$othername', '$combi', '$yearofstudy', '$regnum', '$code1', '$code2', '$code3', '$code4', '$code5', '$code6', '$code7', '$code8', '$code9', '$code10', '$code11', '$code12', '$course1', '$course2', '$course3', '$course4', '$course5', '$course6', '$course7', '$course8', '$course9', '$course10', '$address', '$phone', '$image')";

        $result=mysqli_query($connect, $sql);
        if($result){
            echo '<script>
            alert("Registration successful as HEC AGR student");
            window.location="../website/departments.php";
            </script>';
            }
        else{
            die(mysqli_error($connect));
        }
        
    }

}


elseif ($combi == "Hec Bio") {
    $query_regnum = "SELECT * FROM `hec_bio` WHERE regnum = '$regnum'";
    $result=mysqli_query($connect, $query_regnum);

    if(mysqli_num_rows($result) > 0){
        echo '<script>
        alert("You have already registered");
        window.location="registration_form.php";
        </script>';
    }
    else {

        move_uploaded_file($tmp_name,"../signatures/$image");

        $sql="insert  into `hec_bio` (surname, othername, combi, yearofstudy, regnum, code1, code2, code3, code4, code5, code6, code7, code8, code9, code10, code11, code12, course1, course2, course3, course4, course5, course6, course7, course8, course9, course10, course11, course12, address, phone, photo) values ('$surname', '$othername', '$combi', '$yearofstudy', '$regnum', '$code1', '$code2', '$code3', '$code4', '$code5', '$code6', '$code7', '$code8', '$code9', '$code10', '$code11', '$code12', '$course1', '$course2', '$course3', '$course4', '$course5', '$course6', '$course7', '$course8', '$course9', '$course10', '$address', '$phone', '$image')";

        $result=mysqli_query($connect, $sql);
        if($result){
            echo '<script>
            alert("Registration successful as HEC BIO student");
            window.location="../website/departments.php";
            </script>';
            }
        else{
            die(mysqli_error($connect));
        }
        
    }

}


elseif ($combi == "Eng Lal") {
    $query_regnum = "SELECT * FROM `eng_lal` WHERE regnum = '$regnum'";
    $result=mysqli_query($connect, $query_regnum);

    if(mysqli_num_rows($result) > 0){
        echo '<script>
        alert("You have already registered");
        window.location="registration_form.php";
        </script>';
    }
    else {

        move_uploaded_file($tmp_name,"../signatures/$image");

        $sql="insert  into `eng_lal` (surname, othername, combi, yearofstudy, regnum, code1, code2, code3, code4, code5, code6, code7, code8, code9, code10, code11, code12, course1, course2, course3, course4, course5, course6, course7, course8, course9, course10, course11, course12, address, phone, photo) values ('$surname', '$othername', '$combi', '$yearofstudy', '$regnum', '$code1', '$code2', '$code3', '$code4', '$code5', '$code6', '$code7', '$code8', '$code9', '$code10', '$code11', '$code12', '$course1', '$course2', '$course3', '$course4', '$course5', '$course6', '$course7', '$course8', '$course9', '$course10', '$address', '$phone', '$image')";

        $result=mysqli_query($connect, $sql);
        if($result){
            echo '<script>
            alert("Registration successful as ENG LAL student");
            window.location="../website/departments.php";
            </script>';
            }
        else{
            die(mysqli_error($connect));
        }
        
    }

}



?>