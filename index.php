<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Kursus Programming</title>
      <link rel="stylesheet" href="css/login.css">
  </head>
  <body style="display:flex; align-items:center; justify-content:center;">
  <div class="login-page">
    <div class="form">
    <form class="register-form box" action="koneksi/regizter.php" method="post">

        <h1 style="color: white">Register</h1>
        <input type="text" name="nama" placeholder="Nama">
        <input type="text" name="username" placeholder="Username">
        <input type="text" name="email" placeholder="Email">
        <input type="text" name="alamat" placeholder="Alamat">
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="confirm_password" placeholder="Confirm Password" required>
        <input type="submit" name="submit" value="Register">
        <p class="message">Already registered? <a href="#">Sign In</a></p>
      </form>
      <form class="box" action="koneksi/login.php" method="post">
        <h1 style="color: white">Login</h1>
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Login">
        <p class="message">Not registered? <a href="#">Create an account</a></p>
      </form>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="js/main.js"></script>
  </body>
  </html>

