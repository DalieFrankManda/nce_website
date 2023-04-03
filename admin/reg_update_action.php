<?php

session_start();

require '../connection.php';

$student_id = mysqli_real_escape_string($connect, $_POST['student_id']);

        
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

if(isset($_POST['mat_com_update'])){

    move_uploaded_file($tmp_name,"../signatures/$image");

    $query = "UPDATE mat_com SET  surname='$surname', othername='$othername', combi='$combi', yearofstudy='$yearofstudy', regnum='$regnum', code1='$code1', code2='$code2', code3='$code3', code4='$code4', code5='$code5', code6='$code6', code7='$code7', code8='$code8', code9='$code9', code10='$code10', code11='$code11', code12='$code12', course1='$course1', course2='$course2', course3='$course3', course4='$course4', course5='$course5', course6='$course6', course7='$course7', course8='$course8', course9='$course9', course10='$course10', address='$address', phone='$phone', photo='$image' WHERE id='$student_id'";

    $query_run = mysqli_query($connect, $query);
    if($query_run){
        echo '<script>
            alert("Registration update successful (MAT COM)");
            window.location="mat_com.php";
        </script>';
    }
    else{
        $_SESSION['message'] = "Student update failed!";
        header("Location:mat_com.php");
        exit(0);
    }

    

}

elseif(isset($_POST['eng_lal_update'])){

    move_uploaded_file($tmp_name,"../signatures/$image");

    $query = "UPDATE eng_lal SET  surname='$surname', othername='$othername', combi='$combi', yearofstudy='$yearofstudy', regnum='$regnum', code1='$code1', code2='$code2', code3='$code3', code4='$code4', code5='$code5', code6='$code6', code7='$code7', code8='$code8', code9='$code9', code10='$code10', code11='$code11', code12='$code12', course1='$course1', course2='$course2', course3='$course3', course4='$course4', course5='$course5', course6='$course6', course7='$course7', course8='$course8', course9='$course9', course10='$course10', address='$address', phone='$phone', photo='$image' WHERE id='$student_id'";

    $query_run = mysqli_query($connect, $query);
    if($query_run){
        echo '<script>
            alert("Registration update successful (ENG LAL)");
            window.location="eng_lal.php";
        </script>';
    }
    else{
        $_SESSION['message'] = "Student update failed!";
        header("Location:eng_lal.php");
        exit(0);
    }   

}

elseif(isset($_POST['hec_agr_update'])){

    move_uploaded_file($tmp_name,"../signatures/$image");

    $query = "UPDATE hec_agr SET  surname='$surname', othername='$othername', combi='$combi', yearofstudy='$yearofstudy', regnum='$regnum', code1='$code1', code2='$code2', code3='$code3', code4='$code4', code5='$code5', code6='$code6', code7='$code7', code8='$code8', code9='$code9', code10='$code10', code11='$code11', code12='$code12', course1='$course1', course2='$course2', course3='$course3', course4='$course4', course5='$course5', course6='$course6', course7='$course7', course8='$course8', course9='$course9', course10='$course10', address='$address', phone='$phone', photo='$image' WHERE id='$student_id'";

    $query_run = mysqli_query($connect, $query);
    if($query_run){
        echo '<script>
            alert("Registration update successful (HEC AGR)");
            window.location="hec_agr.php";
        </script>';
    }
    else{
        $_SESSION['message'] = "Student update failed!";
        header("Location:hec_agr.php");
        exit(0);
    }   

}


elseif(isset($_POST['hec_bio_update'])){

    move_uploaded_file($tmp_name,"../signatures/$image");

    $query = "UPDATE hec_bio SET  surname='$surname', othername='$othername', combi='$combi', yearofstudy='$yearofstudy', regnum='$regnum', code1='$code1', code2='$code2', code3='$code3', code4='$code4', code5='$code5', code6='$code6', code7='$code7', code8='$code8', code9='$code9', code10='$code10', code11='$code11', code12='$code12', course1='$course1', course2='$course2', course3='$course3', course4='$course4', course5='$course5', course6='$course6', course7='$course7', course8='$course8', course9='$course9', course10='$course10', address='$address', phone='$phone', photo='$image' WHERE id='$student_id'";

    $query_run = mysqli_query($connect, $query);
    if($query_run){
        echo '<script>
            alert("Registration update successful (HEC BIO)");
            window.location="hec_bio.php";
        </script>';
    }
    else{
        $_SESSION['message'] = "Student update failed!";
        header("Location:hec_bio.php");
        exit(0);
    }   

}



elseif(isset($_POST['mat_agr_update'])){

    move_uploaded_file($tmp_name,"../signatures/$image");

    $query = "UPDATE mat_agr SET  surname='$surname', othername='$othername', combi='$combi', yearofstudy='$yearofstudy', regnum='$regnum', code1='$code1', code2='$code2', code3='$code3', code4='$code4', code5='$code5', code6='$code6', code7='$code7', code8='$code8', code9='$code9', code10='$code10', code11='$code11', code12='$code12', course1='$course1', course2='$course2', course3='$course3', course4='$course4', course5='$course5', course6='$course6', course7='$course7', course8='$course8', course9='$course9', course10='$course10', address='$address', phone='$phone', photo='$image' WHERE id='$student_id'";

    $query_run = mysqli_query($connect, $query);
    if($query_run){
        echo '<script>
            alert("Registration update successful (MAT AGR)");
            window.location="mat_agr.php";
        </script>';
    }
    else{
        $_SESSION['message'] = "Student update failed!";
        header("Location:mat_agr.php");
        exit(0);
    }   

}


elseif(isset($_POST['mat_bio_update'])){

    move_uploaded_file($tmp_name,"../signatures/$image");

    $query = "UPDATE mat_bio SET  surname='$surname', othername='$othername', combi='$combi', yearofstudy='$yearofstudy', regnum='$regnum', code1='$code1', code2='$code2', code3='$code3', code4='$code4', code5='$code5', code6='$code6', code7='$code7', code8='$code8', code9='$code9', code10='$code10', code11='$code11', code12='$code12', course1='$course1', course2='$course2', course3='$course3', course4='$course4', course5='$course5', course6='$course6', course7='$course7', course8='$course8', course9='$course9', course10='$course10', address='$address', phone='$phone', photo='$image' WHERE id='$student_id'";

    $query_run = mysqli_query($connect, $query);
    if($query_run){
        echo '<script>
            alert("Registration update successful (MAT BIO)");
            window.location="mat_bio.php";
        </script>';
    }
    else{
        $_SESSION['message'] = "Student update failed!";
        header("Location:mat_bio.php");
        exit(0);
    }   

}


elseif(isset($_POST['mat_chem_update'])){

    move_uploaded_file($tmp_name,"../signatures/$image");

    $query = "UPDATE mat_chem SET  surname='$surname', othername='$othername', combi='$combi', yearofstudy='$yearofstudy', regnum='$regnum', code1='$code1', code2='$code2', code3='$code3', code4='$code4', code5='$code5', code6='$code6', code7='$code7', code8='$code8', code9='$code9', code10='$code10', code11='$code11', code12='$code12', course1='$course1', course2='$course2', course3='$course3', course4='$course4', course5='$course5', course6='$course6', course7='$course7', course8='$course8', course9='$course9', course10='$course10', address='$address', phone='$phone', photo='$image' WHERE id='$student_id'";

    $query_run = mysqli_query($connect, $query);
    if($query_run){
        echo '<script>
            alert("Registration update successful (MAT CHEM)");
            window.location="mat_chem.php";
        </script>';
    }
    else{
        $_SESSION['message'] = "Student update failed!";
        header("Location:mat_chem.php");
        exit(0);
    }   

}



elseif(isset($_POST['mat_hec_update'])){

    move_uploaded_file($tmp_name,"../signatures/$image");

    $query = "UPDATE mat_hec SET  surname='$surname', othername='$othername', combi='$combi', yearofstudy='$yearofstudy', regnum='$regnum', code1='$code1', code2='$code2', code3='$code3', code4='$code4', code5='$code5', code6='$code6', code7='$code7', code8='$code8', code9='$code9', code10='$code10', code11='$code11', code12='$code12', course1='$course1', course2='$course2', course3='$course3', course4='$course4', course5='$course5', course6='$course6', course7='$course7', course8='$course8', course9='$course9', course10='$course10', address='$address', phone='$phone', photo='$image' WHERE id='$student_id'";

    $query_run = mysqli_query($connect, $query);
    if($query_run){
        echo '<script>
            alert("Registration update successful (MAT HEC)");
            window.location="mat_hec.php";
        </script>';
    }
    else{
        $_SESSION['message'] = "Student update failed!";
        header("Location:mat_hec.php");
        exit(0);
    }   

}



elseif(isset($_POST['mat_phy_update'])){

    move_uploaded_file($tmp_name,"../signatures/$image");

    $query = "UPDATE mat_phy SET  surname='$surname', othername='$othername', combi='$combi', yearofstudy='$yearofstudy', regnum='$regnum', code1='$code1', code2='$code2', code3='$code3', code4='$code4', code5='$code5', code6='$code6', code7='$code7', code8='$code8', code9='$code9', code10='$code10', code11='$code11', code12='$code12', course1='$course1', course2='$course2', course3='$course3', course4='$course4', course5='$course5', course6='$course6', course7='$course7', course8='$course8', course9='$course9', course10='$course10', address='$address', phone='$phone', photo='$image' WHERE id='$student_id'";

    $query_run = mysqli_query($connect, $query);
    if($query_run){
        echo '<script>
            alert("Registration update successful (MAT PHY)");
            window.location="mat_phy.php";
        </script>';
    }
    else{
        $_SESSION['message'] = "Student update failed!";
        header("Location:mat_hec.php");
        exit(0);
    }   

}








?>

