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

    <title>Nalikule College Blog</title>
  </head>
  <body>
    <header>
      <a href="" class="logo">Blog</a>
      <div class="menuToggle"></div>
    </header>

    <ul class="navigation">
      <li><a href="../index.php" onclick="toggleMenu()" ;>Home</a></li>
      <li>
        <a href="departments.php" onclick="toggleMenu()" ;>Departments</a>
      </li>
      <li><a href="#" onclick="toggleMenu()" ;>blog</a></li>
      <li><a href="contacts.php" onclick="toggleMenu()" ;>Contact</a></li>
      <li><a href="photoGallery.php" onclick="toggleMenu()" ;>Gallery</a></li>
      <li><a href="about.php" onclick="toggleMenu()" ;>About</a></li>
    </ul>

    <!-- Banner -->

    <section class="banner" id="home">
      <img src="pictures/developers2.jpg" class="cover" alt="" />

      <div class="contentBx">
        <h2>Nalikule College Blog</h2>
        <h4>What Latest On NCE</h4>

        <a href="#post" class="btn">Posts</a>
      </div>
    </section>

    <!-- About -->

    <!-- <section class="about" id="about">
      <div class="title">
        <h2>About us</h2>
      </div>

      <div class="contentBx">
        <div class="content">
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum
            quos, neque reiciendis at, delectus culpa temporibus quis totam ad
            soluta voluptatibus. Neque, sint labore nostrum quis dolorem alias
            exercitationem, accusantium aspernatur doloremque impedit iusto?
            Corporis, a corrupti repellendus cumque unde laboriosam consequuntur
            vel! Magnam possimus quas nulla, eaque quibusdam neque dicta nobis
            aliquid nemo at voluptatibus, itaque quasi voluptates, corporis
            provident consequuntur veniam eos quis tempora recusandae dolorem
            explicabo consectetur? Assumenda consequatur optio voluptate. Id,
            libero odit quae nulla consequuntur possimus. Nam, deleniti.
            Recusandae, maiores architecto unde illum accusamus saepe harum
            dolore fugiat veniam blanditiis ad dignissimos cupiditate laboriosam
            perspiciatis dolor ea numquam ipsam expedita nihil vero, aspernatur,
            alias veritatis autem. Sed quae, quam labore quisquam cum totam fuga
            aut aperiam ipsam porro corrupti corporis fugit doloremque sit
            animi, vero reprehenderit eaque, est saepe obcaecati cumque facere
            veritatis accusantium commodi. Eos recusandae perferendis voluptas
            nulla, fugiat laudantium, aperiam quisquam iusto aliquam cumque quos
            fuga eveniet! Provident modi ea architecto beatae, recusandae fuga?
          </p>
        </div>

        <div class="content">
          <div class="imgBx">
            <img src="icons/enterancegate.jpg" class="cover" alt="" />
          </div>
        </div>
      </div>
    </section> -->

    <!-- Latest Blog -->

    <section class="post" id="post">
      <div class="title">
        <h2>Posts</h2>
        <p>
          Nalikule College of Education Website is a non-patisan and
          non-political publication aiming at exploring the environment of
          Nalikule College of Education and exposing the talents among Nalikule
          College students. It acts as a forum for education, entertainment
          exploration and provision of information to students and the Nationa
          as a whole.
        </p>
      </div>

      <div class="contentBx">
        <div class="postColumn">
          <div class="postBox">
            <div class="imgBx">
              <img src="pictures/nce-magazine.PNG" class="cover" alt="" />
            </div>

            <div class="textBx">
              <h3><b> Nalikule College of Education Magazine now out</b></h3>
              <p>
                The Magazine brings you the first of its kind. It ia a greatest
                pleasure to have this one as the first ppublication ever. Since
                Nalikule opened its doors in January, 2017, nothing of this kind
                has come out from the publications department. This is a great
                move worthy of appraisal. The voice of Nalikule College Magazine
                contains contents that are insipring, entertaining, informative
                and educative.
              </p>
            </div>
          </div>

          <div class="postBox">
            <div class="imgBx">
              <img src="pictures/kadamzikeni.PNG" class="cover" alt="" />
            </div>

            <div class="textBx">
              <h3><b> Kadamzikeni The Unique Market Day</b></h3>
              <p>
                It starts like a smell from the soil brought about by the rains
                showering at distance. No wonder when you are at Nalikule
                College of Education (NCE) to see students flocking towards the
                main gate of the college. At a distance you hear students in
                conversation about the day. It is not wrong to say that Tuesday
                is a unique day for NCE students. It is this uniqueness that
                gathers an army of conversations in the minds of most students
                every Tuesday for it is a market. It is commonly known by the
                surrounding society as "Kada". The market is situated just
                outside the NCE campus and it starts something around 3pm until
                the dark of every Tuesday.
              </p>
            </div>
          </div>

          <div class="postBox">
            <div class="imgBx">
              <img src="pictures/deaths.PNG" class="cover" alt="" />
            </div>

            <div class="textBx">
              <h3><b> Deaths Shows NCE Its Sharp Teeth</b></h3>
              <p>
                It was in October 2020 when death decided to show Nalikule
                College how it feels like to lose a colleague. January 2021 was
                the toughest month to the student's community as well as the
                adminstration. As we were approaching the end of second semester
                of the 2020/2021 academic year, the institutio lost two
                beautiful, energetic and strong girls who were buried on the
                same day and a brother who left us mouth agape. Students who
                haven't attended any church sermon learnt to recite the lines of
                Bible verses and hymns due to these deaths.
              </p>
            </div>
          </div>
        </div>

        <div class="postColumn">
          <div class="postBox">
            <div class="imgBx">
              <img src="pictures/mbumba.PNG" class="cover" alt="" />
            </div>

            <div class="textBx">
              <h3><b>Entertainment</b></h3>
              <p>
                Renowed hip-hop dancehall and RnB artist "Mbumba" has returned
                with another hit song titled "LOH". The Phalombe based artist,
                formerly known as Cee Kay has revealed to The Voice of NCE
                Magazine that the release of his new hit song is a milestone to
                his music journey.
              </p>
            </div>
          </div>

          <div class="postBox">
            <div class="imgBx">
              <img src="pictures/dalie.PNG" class="cover" alt="" />
            </div>

            <div class="textBx">
              <h3><b>To-Do List App By Dalitso F. Manda</b></h3>
              <p>
                To-Do List App is an android application that help an individual
                to list tasks that he/she needs to complete or accomplish by end
                of a particular period of time. For so long people have been
                using a piece of paper commonly known as stickers to create a
                list of what they need to accomplish. The To-Do List App was
                designed to deal with all the draw backs that people faced when
                using sticker notes.
              </p>
            </div>
          </div>

          <div class="postBox">
            <div class="imgBx">
              <img src="pictures/intercessors.PNG" class="cover" alt="" />
            </div>

            <div class="textBx">
              <h3><b>Put God First</b></h3>
              <p>
                Just as all other institutions of higher learning, Nalikule is
                composed of intellectuals holding different beliefs and values.
                Students believe that they came at Nalikule for different
                reasons. As some of them say "I only came for a paper", others
                say "degree is a just bonus; we are here for the work of God". A
                larger group of students involve themselves in religious
                activities and they believe in serving God through various ways
                ranging grom preaching, charity work, prayer and through singing
                just ti mention a few.
              </p>
            </div>
          </div>
        </div>

        <div class="postColumn">
          <div class="postBox">
            <div class="imgBx">
              <img src="pictures/nce-graduates.jpg" class="cover" alt="" />
            </div>

            <div class="textBx">
              <h3><b>NCE Defeats Crisis</b></h3>
              <p>
                Long before NCE wa called the 'Ever-Green-Nalikule College' in
                the year 2017, the campus was accomplished by mud in the the
                rainy season and dust in the summer. This affected students'
                locomotion and respiration respectively within the campus. Life
                was tough, it was survival of the fittest. This was just one of
                challenges the first cohort of NCE students. Despite the
                challenges, getting a degree was the students' first priority.
              </p>
            </div>
          </div>

          <div class="postBox">
            <div class="imgBx">
              <img src="pictures/yvonne.PNG" class="cover" alt="" />
            </div>

            <div class="textBx">
              <h3><b>Fashion Model</b></h3>
              <p>
                Yvonne is undeniably one of the most vibrant and iconic fashion
                models in the modelling industry. She is a fourth year science
                student studying Mathematics and Chemistry. She tool part in the
                Mr and Miss Nalikule beauty pageant in 2019 where she was
                crowned second princess.
              </p>
            </div>
          </div>

          <div class="postBox">
            <div class="imgBx">
              <img src="pictures/tessam.PNG" class="cover" alt="" />
            </div>

            <div class="textBx">
              <h3><b>Nalikule Shines At TESSAM</b></h3>
              <p>
                Nalikule College of Education has been vibrant when it comes to
                sports. The hard working spirit of both boys and girls cannot go
                uncommented. From the every beginning Nalikule was leading two
                to nil. Then Malawi Assembly of God University (MAGU)scored the
                consolation goal. From there, Nalikule player added another goal
                that left MAGU speechless, mouth agape and hands akimbo. The
                nototious boys left the stine unturned as they victimized MAGU.
                Eventually, MAGU lost to Nalikule by three goals to one at Bingu
                stadium. That made MAGU see the exit door of TESSAM.
              </p>
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
      <a href="#" class="logo">NCE Blog</a>
      <ul class="footerMenu">
        <li><a href="../index.php onclick="toggleMenu()" ;>Home</a></li>
        <li>
          <a href="departments.php" onclick="toggleMenu()" ;>Departments</a>
        </li>
        <li><a href="#" onclick="toggleMenu()" ;>blog</a></li>
        <li><a href="contacts.php" onclick="toggleMenu()" ;>Contact</a></li>
        <li>
          <a href="photoGallery.php" onclick="toggleMenu()" ;>Gallery</a>
        </li>
        <li><a href="about.php" onclick="toggleMenu()" ;>About</a></li>
      </ul>

      <p class="copyrightText">
        Copyright @ 2023 Online Blog. All Rights Reserved
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
