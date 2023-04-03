<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php include('../dashboard/icon.php'); ?>

    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">


    <link rel="stylesheet" href="../css/form_style.css" />

    <title>Administrator Login</title>
  </head>
  <body>
    <div class="container">
      <div class="title">Administrator Login</div>

      <form action="login_action.php" method="POST" enctype="multipart/form-data">
        <div class="customer-details">
          
          <div class="input-box">
            <span class="details">Surname:</span>
            <input
              type="text"
              name="surname"
              placeholder="Enter surname"
              required
            />
          </div>


          <div class="input-box">
            <span class="details">Password:</span>
            <input
              type="password"
              name="password"
              placeholder="Enter password"
              required
            />
          </div>

          <div class="input-box">
            <span class="details">Phone:</span>
            <input
              type="text"
              name="phone"
              placeholder="Phone number"
              required
            />
          </div>

        </div>


        <div class="button">
          <center>
            <button type="submit" class="btn btn-secondary">LOGIN</button>
          </center>
        </div>
      </form>
      <br>
      <hr>

      <center>
        <p class="text-dark">Don't have an account? <a href="register.php" class="text-info"><strong>Register here</strong></a></p>
      </center>

    </div>
  </body>
</html>
