<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php include('dashboard/icon.php'); ?>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />

    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="website/style.css" />

    <title>Nalikule Website</title>
  </head>
  <body>
    <section class="header">
      <nav>
        <a href="index.php"
          ><img src="website/pictures/NalikuleLogo.png" alt="" class="logo"
        /></a>

        <div class="nav-links" id="navlinks">
          <i class="fa-solid fa-xmark" onclick="hideMenu()"></i>
          <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="website/departments.php">DEPARTMENTS</a></li>
            <li><a href="website/blog.php">BLOG</a></li>
            <li><a href="website/contacts.php">CONTACT</a></li>
            <li><a href="website/photoGallery.php">GALLERY</a></li>
            <li><a href="website/about.php">ABOUT</a></li>
          </ul>
        </div>
        <i class="fa-solid fa-bars" onclick="showMenu()"></i>
      </nav>

      <div class="text-box">
        <h1>NALIKULE COLLEGE OF EDUCATION</h1>
        <center>
          <p>
            Nalikule College of Education is one of the Malawi's best colleges
            designed to train secondary school teachers. It is located in
            Lilongwe along Salima road 10km from Kanengo.
          </p>
        </center>
        <a href="website/about.php">Read more</a>
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
