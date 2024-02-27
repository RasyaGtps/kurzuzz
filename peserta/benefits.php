
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Kursus Programming</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="../css/benefits.css" />
    <link rel="icon" href="../img/Screenshot 2024-02-21 214242.png" type="image/png">
  </head>
  <body>
    <header id="header">
      <div class="header-content-div">
        <a href="#home-sec"> <img src="../img/Screenshot 2024-02-21 214242.png" alt="Company Logo" id="header-img" /></a>
        <nav id="nav-bar">
          <a href="index.php" class="nav-link">Home</a>
          <a href="about.php" class="nav-link">About</a>
          <a href="benefits.php" class="nav-link" id="active">Benefits</a>
          <a href="contact.php" class="nav-link">Contact</a>
          <a href="kursus.php" class="nav-link">Kursus</a>
        </nav>
      </div>
    </header>

    <section id="home-sec varieties" class="flexible home-sec">
        <div class="eye-grabber">
          <h1>Benefits</h1>
          <h2>Keuntungan bergabung dengan kami!</h2>
        </div>
        <div class="eye-grabber-img">
            <img src="../images.jpeg" alt="" />
          </div>
    <h3 class="section-heading">Keuntungan</h3>
    <div class="sec-content-div flexible">
      <div class="tile">
        <h4>Entry</h4>
<ul>
    <li>Mendapatkan pandangan terhadap coding</li>
    <li>Mendapatkan bimbingan codingan pertama seperti html dan css</li>
</ul>
      </div>
      <div class="tile">
        <h4>Mid</h4>
       <ul>
        <li>Mendapatkan ilmu dalam membuat web seperti PHP , JavaScript , Dll  </li>
        <li>Bimbingan terhadap database seperti MySql</li>
        <li>Dapat bimbingan dalam membuat web statis</li>
       </ul>
      </div>
      <div class="tile">
        <h4>High</h4>
        <ul>
            <li>Mendapatkan bimbingan terhadap machine learning seperti Python , Java , C++ , dll</li>
            <li>Mendapatkan bantuan dalam membuat CV (Jika sudah kuliah)</li>
        </ul>
      </div>
    </div>
  </section>
  <style>
  .eye-grabber {
    padding: 0 0rem;
    color: black;
  }
  @media (max-width: 800px) {
    .eye-grabber {
      max-width: max-content;
      padding-bottom: 8rem;
      background-color: black;
    }
  }
  .eye-grabber h1 {
    font-size: 5rem;
    line-height: 1.5;
    font-weight: 600;
    color: #29C5F6;
    margin-left: 500px;
  }
  .eye-grabber h2 {
    font-size: 2.3rem;
    font-weight: 500;
    color: white;
    margin-left: 500px;
  }

    .eye-grabber-img {
  flex: 1;
  margin-left: -18rem;
  margin-top: 4rem;
}

@media (max-width: 800px) {
  .eye-grabber-img {
    width: 100%;
    margin-left: 0;
  }
}

.tile {
    height: 25rem;
    width: 25rem;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
    background-color: white;
    border-radius: 2rem;
    transition: all 0.2s;
    padding: 1rem;
    margin: 1rem;
  } 
.home-sec {
    font-family: "Montserrat", sans-serif;
    text-align: start;
    min-height: 60rem;
    height: auto;
    margin: 0 auto 10rem auto;
    color: black;
  
    max-width: 95rem;
    color: #333;
  }
  </style>
</body>
</html>
