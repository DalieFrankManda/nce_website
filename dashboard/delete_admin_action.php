<?php

include('../connection.php');

if(isset($_GET["id"])){

    $id = $_GET["id"];


    $sql = "DELETE FROM administrators WHERE id=$id";
    $connect->query($sql);


echo '<script>
alert("The administrator has been deleted successfully");
window.location="view_admins.php";
</script>';
}



?>