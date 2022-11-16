<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

      <!--header-->
    <header>
        <div class="container">
            <h1><a href="dashboard.php">Speed Shop</a></h1>
            <ul>
                <li><a href="keluar.php">Keluar</a></li>
            </ul>
        </div>
    </header>

      <!--Register-->
      <section class="my-5 py-5">
        <div class="container text-center mt-3 pt-5">
            <center><h2 class="form-weight-bold">Register</h2></center>
            <hr class="mx-auto">
        </div>

        <div class="mx-auto container">
          <form id="register-form">
            <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control" id="register-name" name="name" placeholder="Name" reguired>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" id="register-email" name="name" placeholder="Email" reguired>
              </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" id="register-password" name="password" placeholder="Password" reguired/>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" id="register confirm-password" name="confirmpassword" placeholder="Confirm Password" reguired/>
          </div>
          <div class="form-group">
            <input type="submit" class="btn" id="register-btn" value="Register"/>
          </div>
          </form>
        </div>
      </section>

</body>
</html>