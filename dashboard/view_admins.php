<?php

include('../connection.php');



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include('icon.php'); ?>

    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">


    <title>View Administrators</title>
</head>
<body class="bg-info">

  <div class="container mt-5">
    <center>
        <h1 class="text-success">ADMINISTRATORS REGISTERED</h1>
    </center>

    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">FIRSTNAME</th>
            <th scope="col">SURNAME</th>
            <th scope="col">CONTACT</th>
            <th scope="col">ACTION</th>
          </tr>
        </thead>
        <tbody>


        <?php

        if($connect->connect_error){
          die("connection failed: " . $connect->connect_error);
        }

        $sql = "SELECT * FROM administrators";
        $result = $connect->query($sql);

        if(!$result){
          die("Invalid query: " . $connect->error);
        }


          
          while($row = $result->fetch_assoc()){
            echo "
            <tr>
              <th>$row[firstname]</th>
              <td>$row[surname]</td>
              <td>$row[phone]</td>
              <td>
                <a class='btn btn-warning btn-sm' href='delete_admin_action.php?id=$row[id]'>DELETE</a>
              </td>
            </tr>
            ";
          }


          ?>

        </tbody>
    </table>
    <br> 
    <hr>

      <center>
        <a href="engLal.php" class="text-white"><button class="btn btn-secondary">BACK</button></a>
      </center>


  </div>


</body>
</html>