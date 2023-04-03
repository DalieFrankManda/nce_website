<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="style_blog.css" />

    <?php include('../dashboard/icon.php'); ?>
    
    <style>
      .contentBx {
  display: flex;
  align-items: center;
  justify-content: center;
}

.title h2 {
  display: flex;
  justify-content: right;
}

.imgBx img {
  height: 400px;
  width: 400px;
  border-radius: 100%;
}

    </style>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <title>About Us</title>
  </head>
  <body>
    <header>
      <span class="logo">About</span>
      <div class="menuToggle"></div>
    </header>

    <ul class="navigation">
      <li><a href="../index.php" onclick="toggleMenu()" ;>Home</a></li>
      <li>
        <a href="departments.php" onclick="toggleMenu()" ;>Departments</a>
      </li>
      <li><a href="blog.php" onclick="toggleMenu()" ;>blog</a></li>
      <li><a href="contacts.php" onclick="toggleMenu()" ;>Contact</a></li>
      <li><a href="photoGallery.php" onclick="toggleMenu()" ;>Gallery</a></li>
      <li><a href="#" onclick="toggleMenu()" ;>About</a></li>
    </ul>

    <!-- Banner -->

    <section class="banner" id="home">
      <img src="pictures/blockdcorridor.JPG" class="cover" alt="" />

      <div class="contentBx">
        <h2>About NALIKULE COLLEGE OF EDUCATION</h2>
        <p>
          Nalikule College of Education was designed to cater for 720 students
          and it was constructed by Delta Construction Company. The college
          lies on 29 hectares and among other structures, it comprises 26 staff
          houses, six laboratories, one multipurpose hall, a library, four
          office administration blocks, classroom blocks, lecture rooms, male
          and female hostels and an open lecture theatre.
        </p>

        <a href="#about" class="btn">Developers</a>
      </div>
    </section>

    <!-- About -->

    <section class="about" id="about">
      <div class="title">
        <h2>Catherine Chakhaza</h2>
      </div>

      <div class="contentBx">
        <div class="content">
          <p>
            She is a fourth year student at Nalikule College of Education. She is
            pursing Banchelors Degree in Mathematics and Computer Studies
            , majoring Computer Studies and minor Mathematics. She is a
            software engineer, system designer,analyzer, web developer as well
            as graphic designer.
          </p>
        </div>

        <div class="content">
          <div class="imgBx">
            <img src="pictures/Catherine.png" class="cover" alt="" />
          </div>
        </div>
      </div>

      <br />
      <br />

      <div class="title">
        <h2>Dalitso F. Manda</h2>
      </div>

      <div class="contentBx">
        <div class="content">
          <p>
            He is a fourth year student at Nalikule College of Education. He is pursing
            Banchelors Degree in Mathematics and Computer Studies ,
            majoring Computer Studies and minor Mathematics. He is a software
            engineer, system designer,analyzer, web developer as well as graphic
            designer.
          </p>
        </div>

        <div class="content">
          <div class="imgBx">
            <img src="pictures/dalie.png" class="cover" alt="" />
          </div>
        </div>
      </div>
    </section>

    <!-- Latest Blog Post -->

    <!-- Footer -->

    <footer>
      <ul class="footerMenu">
        <li><a href="../index.php" onclick="toggleMenu()" ;>Home</a></li>
        <li>
          <a href="departments.php" onclick="toggleMenu()" ;>Departments</a>
        </li>
        <li><a href="blog.php" onclick="toggleMenu()" ;>blog</a></li>
        <li><a href="contacts.php" onclick="toggleMenu()" ;>Contact</a></li>
        <li><a href="photoGallery.php" onclick="toggleMenu()" ;>Gallery</a></li>
        <li><a href="#" onclick="toggleMenu()" ;>About</a></li>
      </ul>

      <p class="copyrightText">Copyright @ 2023 NCE. All Rights Reserved</p>
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
