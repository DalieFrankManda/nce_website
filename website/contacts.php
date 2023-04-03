<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php include('../dashboard/icon.php'); ?>

    <link rel="stylesheet" href="style_blog.css" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <title>Nalikule College Contacts</title>
  </head>
  <body>
    <header>
      <span class="logo">Contacts</span>
      <div class="menuToggle"></div>
    </header>

    <ul class="navigation">
      <li><a href="../index.php" onclick="toggleMenu()" ;>Home</a></li>
      <li>
        <a href="departments.php" onclick="toggleMenu()" ;>Departments</a>
      </li>
      <li><a href="blog.php" onclick="toggleMenu()" ;>blog</a></li>
      <li><a href="#" onclick="toggleMenu()" ;>Contact</a></li>
      <li><a href="photoGallery.php" onclick="toggleMenu()" ;>Gallery</a></li>
      <li><a href="about.php" onclick="toggleMenu()" ;>About</a></li>
    </ul>

    <!-- Banner -->

    <section class="banner" id="home">
      <img src="pictures/maingate1.JPG" class="cover" alt="maingate1" />

      <div class="contentBx">
        <h2>Get in Touch with Nalikule College</h2>
        <h4>Way to the NCE</h4>

        <a href="#about" class="btn">Contact Us</a>
      </div>
    </section>

    <!-- About -->

    <section class="about" id="about">
      <div class="title">
        <h2>Contact Us</h2>
      </div>

      <div class="contentBx">
        <div class="content">
          <center>
          <p>
            <address>
              Nalikule College of Education <br>
              Post Office Box 416 <br>
              Kanengo <br>
              Lilongwe 3 <br>
              Malawi
            </address>
          </p>

          <hr>

          <h5>
            <a href="mailto:#" target="_blank">
              <i class="far fa-envelope"></i> 
              nalikulecollege@gmail.com
            </a>
          </h5>

          <hr>

          <h5>
            <a href="https://api.whatsapp.com/send?phone=265999364800"
            method="get"
            target="_blank">
              <i class="fab fa-whatsapp">
              </i> WhatsApp
            </a>
          </h5>

          <hr>

          <h5>
            <a href="https://web.facebook.com/profile.php?id=100064106642638"
            method="get"
            target="_blank">
              <i class="fab fa-facebook-f"></i> Facebook
            </a>
          </h5>

          <hr>

          <h5>
            <a href="href="tel:+265-999-364-800" target="_blank">
              <i class="fa fa-phone"></i> Call Us
            </a>
          </h5>

        </center>
        </div>

        <div class="content">
          <div class="imgBx">
            <img src="pictures/blockD2.1.JPG" class="cover" alt="" />
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->

    <footer>
    <ul class="footerMenu">
        <li><a href="../index.php onclick="toggleMenu()" ;>Home</a></li>
        <li>
          <a href="departments.php" onclick="toggleMenu()" ;>Departments</a>
        </li>
        <li><a href="blog.php" onclick="toggleMenu()" ;>blog</a></li>
        <li><a href="#" onclick="toggleMenu()" ;>Contact</a></li>
        <li>
          <a href="photoGallery.php" onclick="toggleMenu()" ;>Gallery</a>
        </li>
        <li><a href="about.php" onclick="toggleMenu()" ;>About</a></li>
      </ul>

      <p class="copyrightText">
        Copyright @ 2023 NCE Contacts. All Rights Reserved
      </p>
    </footer>

    <!-- scripts -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
      const menuToggle = document.querySelector(".menuToggle");
      const navigation = document.querySelector(".navigation");
      menuToggle.onclick = function () {
        menuToggle.classList.toggle("active");
        navigation.classList.toggle("active");
      };

      window.addEventListener("scroll", function () {
        const header = document.querySelector("header");
        header.classList.toggle("sticky", window.scrollY > 0);
      });

      function toggleMenu() {
        menuToggle.classList.remove("active");
        navigation.classList.remove("active");
      }
    </script>
  </body>
</html>
