<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php include('../dashboard/icon.php'); ?>

    <link rel="stylesheet" href="style_blog.css" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <title>Nalikule College Departments</title>
  </head>
  <body>
    <header>
      <span class="logo">Departments</span>
      <div class="menuToggle"></div>
    </header>

    <ul class="navigation">
      <li><a href="../index.php" onclick="toggleMenu()" ;>Home</a></li>
      <li>
        <a href="#" onclick="toggleMenu()" ;>Departments</a>
      </li>
      <li><a href="blog.php" onclick="toggleMenu()" ;>blog</a></li>
      <li><a href="contacts.php" onclick="toggleMenu()" ;>Contact</a></li>
      <li><a href="photoGallery.php" onclick="toggleMenu()" ;>Gallery</a></li>
      <li><a href="about.php" onclick="toggleMenu()" ;>About</a></li>
    </ul>

    <!-- Banner -->

    <section class="banner" id="home">
      <img src="pictures/blockdcorridor.JPG" class="cover" alt="blockdcorridor" />

      <div class="contentBx">
        <h2>Nalikule College Departments</h2>
        <h4>The Soul of NCE</h4>

        <a href="#about" class="btn">Faculty</a>
      </div>
    </section>

    <!-- About -->

    <section class="about" id="about">
      <div class="title">
        <h2>NCE Faculties</h2>
      </div>

      <div class="contentBx">
        <div class="content">
          <p>
            Nalikule College of Education has three faculties. These faculties include Faculty of Education, 
            Faculty of Sciences and Faculty of Languages. In all these faculties there are departments that
            are run under them.
            <br>
            The following are the departments that are available at Nalikule College of Education:
            <ul>
              <li>Department of Agriculture</li>
              <li>Department of Biology</li>
              <li>Department of Chemistry</li>
              <li>Department of Computer</li>
              <li>Department of Curriculum and Contemporary Issues</li>
              <li>Department of Languages</li>
              <li>Department of Human Ecology</li>
              <li>Department of Mathematics</li>
              <li>Department of Physics</li>
            </ul>
          </p>
        </div>

        <div class="content">
          <div class="imgBx">
            <img src="pictures/carpark1.JPG" class="cover" alt="carpark1" />
          </div>
        </div>
      </div>
    </section>

    <!-- Latest Blog Post -->

    <section class="post" id="post">
      <div class="title">
        <h2>Departments</h2>
        <p>
          Below are the departments that are available at 
          Nalikule College of Education with some of the courses that are provided in these different departments. 

        </p>
      </div>

      <div class="contentBx">
        <div class="postColumn">
          <div class="postBox">
            <div class="imgBx">
              <img src="pictures/agriculturelab1.JPG" class="cover" alt="" />
            </div>

            <div class="textBx">
              <h3> <b>Department of Agriculture </b></h3>
              <p>
                This department is under the faculty of sciences.
                Its aim is to train student teachers who will be
                specialised in teaching Agriculture subject in secondary schools. Agriculture at this institution is learnt in combination with 
                courses like Mathematics, Biology and Human Ecology.
              </p>
            </div>
          </div>

          <div class="postBox">
            <div class="imgBx">
              <img src="pictures/biologylab1.JPG" class="cover" alt="" />
            </div>

            <div class="textBx">
              <h3> <b>Department of Biology</b></h3>
              <p>
                This department is under the faculty of sciences.
                It aims at training student teachers who will be
                specialised in teaching Biology subject in secondary schools. Biology as a course at this institution is learnt in combination with 
                courses like Mathematics, Agriculture and Human Ecology.
              </p>
             
            </div>
          </div>

          <div class="postBox">
            <div class="imgBx">
              <img src="pictures/chem1.JPG" class="cover" alt="" />
            </div>

            <div class="textBx">
              <h3> <b>Department of Chemistry</b></h3>
              <p>
                This department is under the faculty of sciences.
                It aims at training student teachers who will be
                specialised in teaching Chemistry subject in secondary schools. Chemistry as a course at this institution is learnt in combination with a course of Mathematics.
              </p>
            </div>
          </div>
        </div>

        <div class="postColumn">
          <div class="postBox">
            <div class="imgBx">
              <img src="pictures/ICTLAB2.2.JPG" class="cover" alt="" />
            </div>

            <div class="textBx">
              <h3> <b>Department of Computer</b></h3>
              <p>
                This department is under the faculty of sciences.
                It aims at training student teachers who will be
                specialised in teaching Computer subject in secondary schools. Computer as a course at this institution is learnt in combination with a course of Mathematics.
              </p>
            </div>
          </div>

          <div class="postBox">
            <div class="imgBx">
              <img src="pictures/engclass1.JPG" class="cover" alt="" />
            </div>

            <div class="textBx">
              <h3> <b> Department of Curriculum and Contemporary Issues</b></h3>
              <p>
                This department is under the faculty of education. It provide courses that help to build 
                student teachers into the teaching professional.
                It trains them in teaching methods, guidance and counselling and many more.
              </p>
            </div>
          </div>

          <div class="postBox">
            <div class="imgBx">
              <img src="pictures/language.JPG" class="cover" alt="" />
            </div>

            <div class="textBx">
              <h3><b>Department of Languages</b></h3>
              <p>
                This department is under the faculty of Languages.
                It aims at training student teachers who will be
                specialised in teaching all subjects concerning literature and languages in secondary schools. This department is further divided into 
                languages and communication studies, 
                lingustic and african languages.
              </p>
            </div>
          </div>
        </div>

        <div class="postColumn">
          <div class="postBox">
            <div class="imgBx">
              <img src="pictures/humanecology1.JPG" class="cover" alt="" />
            </div>

            <div class="textBx">
              <h3><b> Department of Human Ecology</b></h3>
              <p>
                This department is under the faculty of sciences.
                It aims at training student teachers who will be
                specialised in teaching Home Economics subject in secondary schools. Human Ecology as a course at this institution is learnt in combination with courses like Agriculture and Biology.
              </p>
            </div>
          </div>

          <div class="postBox">
            <div class="imgBx">
              <img src="pictures/mathguys.JPG" class="cover" alt="" />
            </div>

            <div class="textBx">
              <h3><b> Department of Mathematics</b></h3>
              <p>
                This department is under the faculty of sciences.
                It aims at training student teachers who will be
                specialised in teaching Mathematics subject in secondary schools. Courses that are learnt in combination with Mathematics include Agriculture, Biology, Chemistry, Computer and Physics.
              </p>
            </div>
          </div>

          <div class="postBox">
            <div class="imgBx">
              <img src="pictures/physicslabstores2.JPG" class="cover" alt="" />
            </div>

            <div class="textBx">
              <h3><b> Department of Physics</b></h3>
              <p>
                This department is under the faculty of sciences.
                It aims at training student teachers who will be
                specialised in teaching Physics subject in secondary schools. Physics as a course at this institution is learnt in combination with a course of Mathematics.
              </p>
            </div>


            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contacts -->

    <!-- <section class="contact" id="contact">
      <div class="title">
        <h2>Get in Touch</h2>

        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et ullam
          distinctio numquam debitis ducimus odio vel pariatur aliquam, mollitia
          excepturi dolorem nemo sequi tempora expedita ratione exercitationem
          architecto libero dolor! Lorem ipsum, dolor sit amet consectetur
        </p>
      </div>

      <div class="contactForm">
        <div class="row">
          <input type="text" placeholder="First Name" />
          <input type="text" placeholder="Last Name" />
        </div>

        <div class="row">
          <input type="text" placeholder="Email Address" />
          <input type="text" placeholder="Mobile No." />
        </div>

        <div class="row2">
          <textarea placeholder="Message"></textarea>
        </div>

        <div class="row2">
          <input type="submit" value="Send" class="btn" />
        </div>
      </div>
    </section> -->

    <!-- Footer -->

    <footer>
      <ul class="footerMenu">
        <li><a href="../index.php" onclick="toggleMenu()" ;>Home</a></li>
      <li>
        <a href="#" onclick="toggleMenu()" ;>Departments</a>
      </li>
      <li><a href="blog.php" onclick="toggleMenu()" ;>blog</a></li>
      <li><a href="contacts.php" onclick="toggleMenu()" ;>Contact</a></li>
      <li><a href="photoGallery.php" onclick="toggleMenu()" ;>Gallery</a></li>
      <li><a href="about.php" onclick="toggleMenu()" ;>About</a></li>
      <br>
      <li><a href="../student/registration_form.php" onclick="toggleMenu()" ;><u>Exam Register</u></a></li>

      <li><a href="#" onclick="toggleMenu()" ;><u>Exam Admin</u></a></li>
      </ul>
      </ul>
      


      <p class="copyrightText">
        Copyright @ 2023 NCE. All Rights Reserved
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
