<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php include('../dashboard/icon.php'); ?>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />

    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="style_about.css" />

    <title>About</title>
  </head>
  <body>
    <section class="header">
      <nav>
        <a href="../index.php"
          ><img src="pictures/NalikuleLogo.png" alt="NCE Logo" class="logo"
        /></a>

        <div class="nav-links" id="navlinks">
          <i class="fa-solid fa-xmark" onclick="hideMenu()"></i>
          <ul>
            <li><a href="../index.php">HOME</a></li>
            <li><a href="departments.php">DEPARTMENTS</a></li>
            <li><a href="blog.php">BLOG</a></li>
            <li><a href="contacts.php">CONTACT</a></li>
            <li><a href="photoGallery.php">GALLERY</a></li>
            <li><a href="#">ABOUT</a></li>
          </ul>
        </div>
        <i class="fa-solid fa-bars" onclick="showMenu()"></i>
      </nav>

      <div class="text-box">
        <h2>About NALIKULE COLLEGE OF EDUCATION</h2>
        <center>
          <div>
            <p>
              Nalikule College of Education was designed to cater for 
              720 students and is being constructed by Delta Construction Company. 
              The college lies on 29 hectares and among other structures, 
              it comprises 26 staff houses, six laboratories, one multipurpose hall, a 
              library, four office administration blocks, classroom blocks, lecture rooms,
               male and female hostels and an open lecture theatre.
            </p>
          </div>

          <hr />
          <p>
            <h2>About Developers</h2>
          </p>
          <div class="developers">
            <div>
              <div class="pic-developer">
                <img src="pictures/developers2.jpg" alt="" />
              </div>
              <div>
                <center><b> <u> Catherine Chakhaza</u></b></center> 
                <p>
                  
                  She is a fourth year at Nalikule College of Education. 
                  She is pursing Banchelors Degree in Mathematics and Computer 
                  Studies student, majoring Computer Studies and minor Mathematics.
                  She is a software engineer, system designer,analyzer, 
                  web developer as well as graphic designer.
                </p>
              </div>
            </div>
            <div>
              <div class="pic-developer">
                <img src="pictures/developers2.jpg" alt="" />
              </div>
              <div>
                <center><b><u>Dalitso Frank Manda</u></b></center> 
                <p>
                  
                  He is a fourth year at Nalikule College of Education. 
                  He is pursing Banchelors Degree in Mathematics and Computer 
                  Studies student, majoring Computer Studies and minor Mathematics.
                  He is a software engineer, system designer,analyzer, 
                  web developer as well as graphic designer.
                  
                </p>
              </div>
            </div>
          </div>
        </center>
      </div>
    </section>

    <script>
      var navlinks = document.getElementById("navlinks");
      function showMenu() {
        navlinks.style.right = "0";
      }
      function hideMenu() {
        navlinks.style.right = "-200px";
      }
    </script>
  </body>
</html>
