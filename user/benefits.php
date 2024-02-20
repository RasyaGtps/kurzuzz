<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Kursus</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="../css/benefits.css" />
  </head>
  <body>
    <header id="header">
      <div class="header-content-div">
        <a href="#home-sec"> <img src="../img/Pintar.jpeg" alt="Company Logo" id="header-img" /></a>
        <nav id="nav-bar">
          <a href="index.php" class="nav-link">Home</a>
          <a href="about.php" class="nav-link">About</a>
          <a href="benefits.php" class="nav-link" id="active">Benefits</a>
          <a href="contact.php" class="nav-link">Contact</a>
          <a href="join.php" class="nav-link">Kursus</a>
        </nav>
      </div>
    </header>

    <section id="home-sec varieties" class="flexible home-sec sec-padding">
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
    .eye-grabber-img {
  flex: 1;
  margin-left: 19rem;
  margin-top: 1.5rem;
}

@media (max-width: 800px) {
  .eye-grabber-img {
    width: 100%;
    margin-left: 0;
  }
}

  </style>
</body>
</html>
