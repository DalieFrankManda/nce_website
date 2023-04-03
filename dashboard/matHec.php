<?php

include('../connection.php');

session_start();
$data=$_SESSION['data'];

if (!isset($_SESSION['id'])) {
    header('location:../loging/login.php');
  }
  

$queryAdminis = "SELECT COUNT(*) AS totalAdminis FROM administrators";
$queryTotalAdminis = mysqli_query($connect, $queryAdminis);
while($rowAdminis = mysqli_fetch_assoc($queryTotalAdminis)){
  $numOfAdminis = $rowAdminis['totalAdminis'];
}


$queryMatHec = "SELECT COUNT(*) AS totalMatHec FROM mat_hec";
$queryTotalMatHec = mysqli_query($connect, $queryMatHec);
while($rowMatHec = mysqli_fetch_assoc($queryTotalMatHec)){
  $numOfMatHec = $rowMatHec['totalMatHec'];
}

$queryfinaleSos = "SELECT COUNT(*) AS finaleSos FROM mat_hec WHERE yearofstudy = 'Fourth' OR yearofstudy = 'Third'";
$queryTotalfinaleSos = mysqli_query($connect, $queryfinaleSos);
while($rowfinaleSos = mysqli_fetch_assoc($queryTotalfinaleSos)){
  $numOffinaleSos = $rowfinaleSos['finaleSos'];
}


$queryfinale = "SELECT COUNT(*) AS finale FROM mat_hec WHERE yearofstudy = 'Fourth'";
$queryTotalfinale = mysqli_query($connect, $queryfinale);
while($rowfinale = mysqli_fetch_assoc($queryTotalfinale)){
  $numOffinale = $rowfinale['finale'];
}


$queryassociate = "SELECT COUNT(*) AS associate FROM mat_hec WHERE yearofstudy = 'Third'";
$queryTotalassociate = mysqli_query($connect, $queryassociate);
while($rowassociate = mysqli_fetch_assoc($queryTotalassociate)){
  $numOfassociate = $rowassociate['associate'];
}


$querycontiYearo = "SELECT COUNT(*) AS contiYearo FROM mat_hec WHERE yearofstudy = 'Second' OR yearofstudy = 'First'";
$queryTotalcontiYearo = mysqli_query($connect, $querycontiYearo);
while($rowcontiYearo = mysqli_fetch_assoc($queryTotalcontiYearo)){
  $numOfcontiYearo = $rowcontiYearo['contiYearo'];
}

$queryconti = "SELECT COUNT(*) AS conti FROM mat_hec WHERE yearofstudy = 'Second'";
$queryTotalconti = mysqli_query($connect, $queryconti);
while($rowconti = mysqli_fetch_assoc($queryTotalconti)){
  $numOfconti = $rowconti['conti'];
}

$queryyearo = "SELECT COUNT(*) AS yearo FROM mat_hec WHERE yearofstudy = 'First'";
$queryTotalyearo = mysqli_query($connect, $queryyearo);
while($rowyearo = mysqli_fetch_assoc($queryTotalyearo)){
  $numOfyearo = $rowyearo['yearo'];
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php include('icon.php'); ?>

    <!--link for material cnd-->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet"
    />

    
    <!--link for style css file-->
    <link rel="stylesheet" href="style.css" />

    <style>
      .capitalise{
        text-transform: uppercase;
      }
    </style>

    <title>MatHec</title>
  </head>
  <body>
    <div class="container">
      <aside>
        <div class="top">
          <div class="logo">
            <img src="../images/NalikuleLogo.png" alt="Nalikule College Logo" />
            <h3>NALIKULE COLLEGE<span class="danger"> OF EDUCATION</span></h3>
          </div>

          <div class="close" id="close-btn">
            <span class="material-icons-sharp">close</span>
          </div>
        </div>

        <div class="sidebar">
          
          <a href="engLal.php">
            <span class="material-icons-sharp active">translate</span>
            <h3>Eng-Lal</h3>
          </a>

          <a href="hecAgr.php">
            <span class="material-icons-sharp">spa</span>
            <h3>Hec-Agr</h3>
          </a>

          <a href="hecBio.php">
            <span class="material-icons-sharp">compost</span>
            <h3>Hec-Bio</h3>
          </a>

          <a href="matAgr.php">
            <span class="material-icons-sharp">recycling</span>
            <h3>Mat-Agr</h3>
          </a>

          <a href="matBio.php">
            <span class="material-icons-sharp">biotech</span>
            <h3>Mat-Bio</h3>
          </a>

          <a href="matChem.php">
            <span class="material-icons-sharp">science</span>
            <h3>Mat-Chem</h3>
          </a>

          <a href="matCom.php">
            <span class="material-icons-sharp">hub</span>
            <h3>Mat-Com</h3>
          </a>

          <a href="#" class="active">
            <span class="material-icons-sharp">health_and_safety</span>
            <h3>Mat-Hec</h3>
          </a>

          <a href="matPhy.php">
            <span class="material-icons-sharp">precision_manufacturing</span>
            <h3>Mat-Phy</h3>
          </a>

          <a href="../loging/logout.php">
            <span class="material-icons-sharp">logout</span>
            <h3>Logout</h3>
          </a>
        </div>
      </aside>

      <!--  END OF THE ASIDE SECTION  -->

      <!-- THE MAIN SECTION WHICH IS DISPLAY ON THE MIDDLE OF THE THREE COLUMN GRID -->

      <main>
        <center>
          <h1 class="text-primary capitalise" style="color:blueviolet;">NALIKULE COLLEGE EXAMINATION REGSTRATION SYSTEM (NACERS)</h1>
        </center>
        <br>

        <div class="date">
          <span><b>MAT-HEC</b> </span>
        </div>

        <div class="insights">
          <div class="sales">
            <span class="material-icons-sharp">health_and_safety</span>
            <div class="middle">
              <div class="left">
                <h3>Total Mat-Hec</h3>
                <h1><?php echo "$numOfMatHec" ?></h1>
              </div>

              <div class="progress">
                <svg>
                  <circle cx="38" cy="38" r="36"></circle>
                </svg>

                <div class="number">
                  <p><?php echo "$numOfMatHec" ?></p>
                </div>
              </div>
            </div>

            <small class="text-muted">There are <b><?php echo "$numOfMatHec" ?></b> Mat-Hec students currently registered for the examination</small>
          </div>

          <!-- END OF THE SALES -->

          <div class="expenses">
            <span class="material-icons-sharp">group</span>
            <div class="middle">
              <div class="left">
                <h3>Finale & Associate</h3>
                <h1><?php echo "$numOffinaleSos" ?></h1>
              </div>

              <div class="progress">
                <svg>
                  <circle cx="38" cy="38" r="36"></circle>
                </svg>

                <div class="number">
                  <p><?php echo "$numOffinaleSos" ?></p>
                </div>
              </div>
            </div>

            <small class="text-muted">There are <b><?php echo "$numOffinale" ?></b> 4th years and <b><?php echo "$numOfassociate" ?></b> 3rd years currently registered for the examination</small>
          </div>

          <!-- END OF THE EXPENSES -->

          <div class="income">
            <span class="material-icons-sharp">group</span>
            <div class="middle">
              <div class="left">
                <h3>Conti & Yearo</h3>
                <h1><?php echo "$numOfcontiYearo" ?></h1>
              </div>

              <div class="progress">
                <svg>
                  <circle cx="38" cy="38" r="36"></circle>
                </svg>

                <div class="number">
                  <p><?php echo "$numOfcontiYearo" ?></p>
                </div>
              </div>
            </div>

            <small class="text-muted">There are <b><?php echo "$numOfconti" ?></b> 2nd years and <b><?php echo "$numOfyearo" ?></b> 1st years currently registered for the examination</small>
          </div>

          <!-- END OF THE INCOME -->
        </div>

        <!-- END OF INSIGHTS -->

        <!-- TABLES FOR STUDENTS -->
        <div class="recent-orders">
          <h2>Registered Mat-Hec Students</h2>
          <table>
            <thead>
              <tr>
                <th></th>
                <th>SURNAME</th>
                <th>OTHERNAME</th>
                <th>YEAR</th>
                <th>PHONE</th>
                <th>REG. NUMBER</th>
              </tr>
            </thead>

            <tbody>


            <?php

              if($connect->connect_error){
                die("connection failed: " . $connect->connect_error);
              }

              $sql = "SELECT * FROM  mat_hec LIMIT 0,5";
              $result = $connect->query($sql);

              if(!$result){
                die("Invalid query: " . $connect->error);
              }

              while($row = $result->fetch_assoc()){
                echo "



                  <tr>
                    <td></td>
                    <td>$row[surname]</td>
                    <td>$row[othername]</td>
                    <td>$row[yearofstudy]</td>
                    <td>$row[phone]</td>
                    <td>$row[regnum]</td>
                    
                  </tr>

                ";
              }


            ?>

            </tbody>
          </table>

        </div>
        <br>
        <center>
          <div class="date">

            <span><a href="../admin/mat_hec.php"> <b>SHOW DETAILS</b> </a></span>
          
          </div>
        </center>
      </main>
      <!----------- END OF MAIN --------->

      <div class="right">
        <div class="top">
          <button id="menu-btn">
            <span class="material-icons-sharp">menu</span>
          </button>

          <div class="theme-toggler">
            <span class="material-icons-sharp active">light_mode</span>
            <span class="material-icons-sharp">dark_mode</span>
          </div>

          <div class="profile">
            <div class="info">
              <p>Hey, <b class="capitalise"><?php echo $data['firstname'];?></b> <b class="capitalise"><?php echo $data['surname'];?></b></p>
              <small class="text-muted">Admin</small>
            </div>

            <div class="profile-photo">
            <span class="material-icons-sharp">person</span>
            </div>
          </div>
        </div>
        <!-- END OF TOP -->

        <div class="recent-updates">
          <center><h2>ADMINISTRATORS (<b><?php echo "$numOfAdminis" ?></b>)</h2></center>

          <div class="updates">


          <?php

              if($connect->connect_error){
                die("connection failed: " . $connect->connect_error);
              }

              $sqlTop = "SELECT * FROM administrators LIMIT 0,2";
              $result = $connect->query($sqlTop);

              if(!$result){
                die("Invalid query: " . $connect->error);
              }

              while($row = $result->fetch_assoc()){

                echo "

                  <div class=\"update\">
                    <div class=\"profile-photo\">
                    <span class=\"material-icons-sharp\">person</span>
                    </div>

                    <div class=\"messsage\">
                      <p class=\"capitalise\">
                        Firstname: <b>$row[firstname]</b>
                      </p>
                      <p class=\"capitalise\">
                        Surname: <b>$row[surname]</b>.
                      </p>
                      <p class=\"capitalise\">
                        Phone: <b>$row[phone]</b>
                      </p>
                      <small class=\"text-muted\">-------------------------------</small>
                    </div>
                  </div>
                  

                ";
              }


            ?>
            
            
          </div>
          <br>
          <br>

          <center>
            <span><a class="m-2 bg-info" href="view_admins.php"> <b>SHOW ALL</b> </a></span>
        </center>
        </div>
        <!--******** END OF RECENT UPDATES *********-->

        <div class="sales-analytics">

          <div class="item add-product">
            <div>
              <span class="material-icons-sharp">add</span>
              <h3><a href="../loging/register.php">Add Administrator</a></h3>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br>
    <br>

    <script src="./index.js"></script>
    
  </body>
</html>
