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


    <title>Administrator Register</title>
  </head>
  <body>
    <div class="container">
      <div class="title">Administrator Details</div>

      <form action="register_action.php" method="POST" enctype="multipart/form-data">
        <div class="customer-details">
          <div class="input-box">
            <span class="details">First Name:</span>
            <input
              type="text"
              name="firstname"
              placeholder="Administrator first name"
              required
            />
          </div>

          <div class="input-box">
            <span class="details">Surname:</span>
            <input
              type="text"
              name="surname"
              placeholder="Administrator surname"
              required
            />
          </div>


          <div class="input-box">
            <span class="details">Password:</span>
            <input
              type="password"
              name="password"
              placeholder="Create password"
              required
            />
          </div>

          <div class="input-box">
            <span class="details">Comfirm Password:</span>
            <input
              type="password"
              name="cpassword"
              placeholder="Comfirm password"
              required
            />
          </div>

          <div class="input-box">
            <span class="details">Phone:</span>
            <input
              type="text"
              name="phone"
              placeholder="Enter phone number"
              required
            />
          </div>

        </div>


        <div class="button">
          <center>
            <button type="submit" class="btn btn-secondary">REGISTER</button>
          </center>
        </div>
      </form>
      <br>
      <hr>

      <center>
        <p class="text-dark">Already have an account? <a href="login.php" class="text-info"><strong>Login</strong></a></p>
      </center>

    </div>
  </body>
</html>
