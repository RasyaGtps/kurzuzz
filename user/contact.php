<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Kursus</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header id="header">
      <div class="header-content-div">
        <a href="#home-sec"> <img src="../img/Pintar.jpeg" alt="Company Logo" id="header-img" /></a>
        <nav id="nav-bar">
          <a href="index.php" class="nav-link">Home</a>
          <a href="about.php" class="nav-link">About</a>
          <a href="benefits.php" class="nav-link">Benefits</a>
          <a href="contact.php" class="nav-link" id="active">Contact</a>
          <a href="join.php" class="nav-link">Profile</a>
        </nav>
      </div>
    </header>
    <div class="formBox">
        <h2>Contact</h2>
        <p>Hubungi kami jika kamu ingin bertanya !</p>
        <form action="#">
            <div class="nameInp">
                <i class="fa fa-user icon"></i>
                <input type="text" placeholder="Full Name" name="name" id="name">

            </div>
            <div class="mailInp">
                <i class="fa fa-envelope"></i>
                <input type="email" name="mail" id="mail" placeholder="Email">
            </div>
            <div class="phoneInp">
                <i class="fa-solid fa-phone"></i>
                <input type="number" name="phone" id="phone" placeholder="Phone" min="1">
            </div>
            <div class="queryInp">
                <textarea name="query" id="query" cols="30" rows="5"
                    placeholder="Any comment or your query"></textarea>
            </div>
            <div class="submitBtn">
                <button id="btn" onclick="notif()">Send</button>
            </div>
        </form>
    </div>
    
</body>