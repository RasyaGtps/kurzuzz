<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Kursus</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="../css/styles.css" />
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
          <a href="index.php" class="nav-link" id="active">Home</a>
          <a href="about.php" class="nav-link">About</a>
          <a href="benefits.php" class="nav-link">Benefits</a>
          <a href="contact.php" class="nav-link">Contact</a>
          <a href="join.php" class="nav-link">Profile</a>
        </nav>
      </div>
    </header>

    <main>
      <section id="home-sec" class="flexible home-sec" src="Coding.jpg">
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
            <img src="../img/Banyuwangi 🥰🤤.jpeg" alt="asik" />
            <h4>Asik</h4>
            <p>Gurunya asik , ga mungkin dong gurunya ga asik. Nanti pada saat pengajaran jatuhnya diem dieman. Jadi guru di sini juga suka sedikit jokes</p>
          </div>
          <div class="tile">
            <img src="../img/Senku.jpeg" alt="senku" />
            <h4>Cerdas</h4>
            <p>Tentunya guru guru yang berada di tempat kami cerdas. Dan tentunya mereka dari jurusan it dan tidak mungkin berasal dari jurusan hukum.Mereka merupakan lulusan terbaik dari universitasnya masing masing</p>
          </div>
          <div class="tile">
            <img src="../img/e87c1b53-1191-4fe7-9b32-f9ec68cd599d.jpeg" alt="ngabs" />
            <h4>Cantik</h4>
            <p>Gurunya udah pasti cantik dan menawan (Lakinya juga)</p>
          </div>
        </div>
        <h3 class="section-heading">Class</h3>
        <div class="sec-content-div">
          <div class="bars">
            <div class="icon-container">
              <img src="../img/Sad emoji.jpeg" alt="" />
            </div>
            <div class="txt-container">
              <h5>Entry</h5>
              <p>Di class entry , bagi yang belum tau mengenai coding atau tidak tau sama sekali , kalian bisa belajar di sini !</p>
            </div>
          </div>
          <div class="bars">
            <div class="icon-container">
              <img src="../img/Sticker sonic dek.jpeg" alt="" />
            </div>
            <div class="txt-container">
              <h5>Mid</h5>
              <p>Nah di sini merupakan orang yang sudah kenal coding. Namun skillnya masih sedikit. Dan kebanyak orang yang berada di sini banyak tingkah, merasa sudah ahli daripada yang ahli. Merasa  merasa sangat sepuh dari segalanya. </p>
            </div>
          </div>
          <div class="bars">
            <div class="icon-container">
              <img src="../img/meme anime__serah sih gw mah udah sepuh.jpeg" alt="" />
            </div>
            <div class="txt-container">
              <h5>High</h5>
              <p>Di sini merupakan fase di mana semua orang sudah sepuh. Dan rata rata orang yang berada di wilayah ini sangat malas membantu orang lain yang kesusahan dalam coding. Orang orangnya juga ga banyak tingkah dan suka merendah diri jika ada orang yang sombong. Biasanya mereka menggunakan slogan " Puh ajarin dong puh , aku masih pemula nih puh"</p>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer>
      Di buat oleh 
      <a href="#">Rasya wangsaf</a>
    </footer>
    <style>
      body {
  font-family: 'Quicksand', sans-serif;
  margin: 0;
  padding: 0;
  background: #333;
  font-size: 11px;
  background: #0f0c29; 
  background: -webkit-linear-gradient(to right, #24243e, #302b63, #0f0c29);
  background: linear-gradient(to right, #24243e, #302b63, #0f0c29);
  background: linear-gradient(
    to right,
    #24243e,
    #302b63,
    #0f0c29
  ); 
}

#header {
  height: max-content;
  font-family: "Montserrat", sans-serif;
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
  font-family: "Montserrat", sans-serif;
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
    </style>
  </body>
</html>
