<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Kursus Programming</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="../css/styles.css" />
    <link rel="icon" href="../img/Screenshot 2024-02-21 214242.png" type="image/png">
  </head>
  <body>
    <header id="header">
      <div class="header-content-div">
        <a href="#home-sec"> <img src="../img/Screenshot 2024-02-21 214242.png" alt="Company Logo" id="header-img" /></a>
        <nav id="nav-bar">  
          <a href="index.php" class="nav-link" id="active">Home</a>
          <a href="about.php" class="nav-link">About</a>
          <a href="benefits.php" class="nav-link">Benefits</a>
          <a href="contact.php" class="nav-link">Contact</a>
          <a href="kursus.php" class="nav-link">Kursus</a>
        </nav>
      </div>
    </header>

    <main>
      <section id="home-sec" class="flexible home-sec" src="Coding.jpg">
        <div class="background-img"></div>
        <div class="eye-grabber-img">
          <img src="../img/Coding.jpg" alt="" />
        </div>
        <div class="eye-grabber">
          <h1>Kursus Programming</h1>
          <h2>Latih skillmu bersama kami!</h2>
        </div>
      </section>
      <section id="varieties class" class="sec-padding">
        <h3 class="section-heading">Top 3 alasan kenapa kamu harus bergabung bersama kami</h3>
        <div class="sec-content-div1 flexible">
          <div class="tile">
            <img src="../img/asik.jpg" alt="asik" />
            <h4>Asik</h4>
            <h6>Gurunya asik , ga mungkin dong gurunya ga asik. Nanti pada saat pengajaran jatuhnya diem dieman. Jadi guru di sini juga suka sedikit jokes</h6>
          </div>
          <div class="tile">
            <img src="../img/cerdas.jpg" alt="senku" />
            <h4>Cerdas</h4>
            <h6>Tentunya guru guru yang berada di tempat kami cerdas. Dan tentunya mereka dari jurusan it dan tidak mungkin berasal dari jurusan hukum.Mereka merupakan lulusan terbaik dari universitasnya masing masing</h6>
          </div>
          <div class="tile">
            <img src="../img/teknologi.jpg" alt="ngabs" />
            <h4>Inovasi Teknologi</h4>
            <h6>Pemrograman memungkinkan Anda untuk menjadi bagian dari inovasi teknologi. Dengan memahami dasar-dasar pemrograman, Anda dapat menciptakan solusi baru, aplikasi, atau produk yang dapat meningkatkan cara kita bekerja dan hidup.</h6>
          </div>
        </div>
        <h3 class="section-heading">Class</h3>
        <div class="sec-content-div">
          <div class="bars">
            <div class="icon-container">
              <img src="../img/beginner.png " alt="" />
            </div>
            <div class="txt-container">
              <h5>Beginner</h5>
              <p>Di class beginner , akan di ajari hal hal dasar terlebih dahulu agar dapat pandangan codingan ke depannya</p>
            </div>
          </div>
          <div class="bars">
            <div class="icon-container">
              <img src="../img/advance.png" alt="" />
            </div>
            <div class="txt-container">
              <h5>Advance</h5>
              <p>Di class ini akan di ajarkan hal hal coding yang mungkin ada di perkuliahan tapi tidak semua. </p>
            </div>
          </div>
          <div class="bars">
            <div class="icon-container">
              <img src="../img/expert.png" alt="" />
            </div>
            <div class="txt-container">
              <h5>Expert</h5>
              <p>Di class ini akan di bekali materi yang lebih berguna untuk masuk ke dunia kerja. Dan di class ini akan menjadi class sangat berat di bandingkan dengan class lain.</p>
          </div>
        </div>
      </section>
    </main>
    <footer>
      Di buat oleh 
      <a href="#">Rasya wangsaf</a>
    </footer>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,800;1,600&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap");

body {
  font-family: 'Quicksand', sans-serif;
  margin: 0;
  padding: 0;
  font-size: 11px;
  background: linear-gradient(to right, #24243e, #302b63, #0f0c29); 
}

#header {
  height: max-content;
  font-family: 'Quicksand', sans-serif;
  width: 100%;
  background-color: rgba(255, 255, 255, 0.8);
  padding: 1rem 0;
  position: sticky;
  z-index: 99;
  top: 0;
  left: 0;
  box-shadow: 0 6px 31px -2px rgba(0, 0, 0, 0.1);
}

.section-heading {
  font-size: 2.5rem;
  font-family: 'Quicksand', sans-serif;
  font-weight: 500;
  line-height: 1.2;
  margin: 0;
  padding: 5rem 0 5rem 0;
  text-align: center;
      color: white;
}
.bars {
  height: max-content;
  display: flex;
  flex-flow: row wrap;
  justify-content: space-between;
  align-content: flex-start;
  margin: 2rem;
  width: 100%;
  color: white;
}

.eye-grabber h1 {
  font-size: 5rem;
  line-height: 1.5;
  font-weight: 600;
  color: #29C5F6;
}
.tile {
  background-color: #fafafa;
  height: 57rem;
  width: 30rem;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
  border-radius: 0.5rem;
  transition: all 0.2s;
  padding: 1.5rem;
  margin: 1.5rem;
}
@media (max-width: 680px) {
  .tile {
    width: auto;
    max-width: 100%;
    min-width: 20rem;
    margin: 1.5rem auto;
    height: auto;
  }
}
.tile img {
  width: 150%;
  max-width: 29rem;
  border-radius: 0.5rem;
}
.tile h4 {
  font-size: 2rem;
  font-weight: 600;
  padding: 1rem 0;
  color: #e23d3d;
  margin: 0;
}

.tile h6 {
  font-size: 2rem;
  font-weight: 600;
  padding: 1rem 0;
  color: black;
  margin: 0;
}
.tile p {
  font-size: 1.6rem;
  padding: 0;
  margin: 0;
}
.tile:hover {
  transform: scale(1.05);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.19), 0 16px 16px rgba(0, 0, 0, 0.23);
}
.icon-container img{
  background-color: white;
}
    </style>
  </body>
</html>