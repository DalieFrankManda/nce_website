<?php

include('../connection.php');

$queryTotal = "SELECT COUNT(*) AS totalRegistered FROM mat_chem";
$queryStudents = mysqli_query($connect, $queryTotal);
while($rowStudents = mysqli_fetch_assoc($queryStudents)){
  $numOfStudents = $rowStudents['totalRegistered'];
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include('../dashboard/icon.php'); ?>

    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <style>
        .capitalise{
            text-transform: uppercase;
        }
    </style>

    <title>MAT CHEM</title>
</head>
<body class="bg-info">

  <div class="container mt-5">

    <center>
        <h2>NALIKULE COLLEGE OF EDUCATION</h2>
        <h5>END OF SEMESTER EXAMINATION REGISTRATION</h5>
        <h6>FORM FOR 2022/2023 ACADEMIC YEAR</h6>

        <h3 class="text-success"> <?php echo "$numOfStudents" ?> MAT-CHEM REGISTERED STUDENTS</h3>
    </center>

    <a type="button" class="btn btn-secondary" href="../dashboard/matChem.php">BACK</a>

    


        <?php

        if($connect->connect_error){
          die("connection failed: " . $connect->connect_error);
        }

        $sql = "SELECT * FROM mat_chem ORDER BY regnum";
        $result = $connect->query($sql);

        if(!$result){
          die("Invalid query: " . $connect->error);
        }


          
          while($row = $result->fetch_assoc()){
            echo "

            <table class='table table-striped'>
                
                <thead>
                    <tr>
                        <th scope='col'>SURNAME:</th>
                        <th scope='col'>OTHER NAMES:</th>
                        <th scope='col'>COURSE:</th>
                        <th scope='col'>YEAR OF STUDY:</th>
                        <th scope='col'>REG. NO.:</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                    <th class='capitalise'>$row[surname]</th>
                    <td class='capitalise'>$row[othername]</td>
                    <td class='capitalise'>$row[combi]</td>
                    <td class='capitalise'>$row[yearofstudy]</td>

                    <td class='capitalise'>$row[regnum]</td>
                    </tr>

                </tbody>
            </table>

            <label for='table' class='fb-3 m-2'>
                <h5>CODE NUMBERS AND TITLES OF EXMINATIONS YOU ARE GOING TO SIT FOR:</h5>
            </label>


            <table class='table table-bordered table-striped'>
                <thead>
                    <tr>
                        <th scope='col' class='text-dark'><center>CODE NO.</center></th>
                        <th scope='col'><center>TITLE OF COURSE</center></th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <th><div class='capitalise'><center>$row[code1]</center></div></th>
                        <td><div class='capitalise'>$row[course1]</div></td>
                    </tr>

                    <tr>
                        <th><div class='capitalise'><center>$row[code2]</center></div></th>
                        <td><div class='capitalise'>$row[course2]</div></td>
                    </tr>

                    <tr>
                        <th><div class='capitalise'><center>$row[code3]</center></div></th>
                        <td><div class='capitalise'>$row[course3]</div></td>
                    </tr>

                    <tr>
                        <th><div class='capitalise'><center>$row[code4]</center></div></th>
                        <td><div class='capitalise'>$row[course4]</div></td>
                    </tr>

                    <tr>
                        <th><div class='capitalise'><center>$row[code5]</center></div></th>
                        <td><div class='capitalise'>$row[course5]</div></td>
                    </tr>

                    <tr>
                        <th><div class='capitalise'><center>$row[code6]</center></div></th>
                        <td><div class='capitalise'>$row[course6]</div></td>
                    </tr>

                    <tr>
                        <th><div class='capitalise'><center>$row[code7]</center></div></th>
                        <td><div class='capitalise'>$row[course7]</div></td>
                    </tr>

                    <tr>
                        <th><div class='capitalise'><center>$row[code8]</center></div></th>
                        <td><div class='capitalise'>$row[course8]</div></td>
                    </tr>

                    <tr>
                        <th><div class='capitalise'><center>$row[code9]</center></div></th>
                        <td><div class='capitalise'>$row[course9]</div></td>
                    </tr>

                    <tr>
                        <th><div class='capitalise'><center>$row[code10]</center></div></th>
                        <td><div class='capitalise'>$row[course10]</div></td>
                    </tr>


                </tbody>

            </table>

            <address class='capitalise m-4'>
                <label><strong>CONTACT ADDRESS: </strong></label><i> $row[address]</i>
            </address>
            
            <strong class='m-4'>CELL / TEL NO.: </strong>$row[phone]

            

            <hr>

            <div class='m-4'>
                <i>
                    I certify that I have read the rules and regulations governing
                    examinations at Nalikule College of Education and I agree to abide
                    by them.
                </i>
            </div>

            <div>

                <strong class='m-4'>CANDIDATE'S SIGNATURE.: </strong>
                <img src='../signatures/$row[photo]' class='img-thumbnail center' alt='Signature for $row[othername]' style='width: 150px; height: 40px'/>

                <strong class='m-4'>DATE: </strong>
                $row[date]
            </div>


            <div>

                <center class='text-success'>
                        <a class='btn btn-warning btn-sm mt-2' href='mat_chem_update.php?id=$row[id]'>UPDATE</a>
                </center>
                
                <br>

                <strong><center class='text-success'>THE END</center></strong>
            
                <strong><center class='text-primary'>~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~</center></strong>
            </div>

            <br>
            <br>

            ";
          }


          ?>

        
    <br> 
    <hr>

  </div>


</body>
</html>