<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kursus Programming</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="../css/kursus.css" />
    <link rel="icon" href="../img/Screenshot 2024-02-21 214242.png" type="image/png">
</head>
<body>
    <header id="header">
        <div class="header-content-div">
            <a href="#home-sec"> <img src="../img/Screenshot 2024-02-21 214242.png" alt="Company Logo" id="header-img" /></a>
            <nav id="nav-bar">  
                <a href="index.php" class="nav-link">Home</a>
                <a href="about.php" class="nav-link">About</a>
                <a href="benefits.php" class="nav-link">Benefits</a>
                <a href="contact.php" class="nav-link">Contact</a>
                <a href="kursus.php" class="nav-link" id="active">Kursus</a>
            </nav>
        </div>
    </header>
    <h3 class="section-heading">Video Kursus</h3>
    <div class="sec-content-div flexible">
        <div class="tile">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/vVHSY40R7PQ?autoplay=1" frameborder="0" allowfullscreen></iframe>
            <h4>kursus html</h4>
            <p>Tentang kursus html</p>
        </div>
    </div>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kursus";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM video"; 
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="sec-content-div flexible">';
            echo '<div class="tile">';
            echo '<iframe width="560" height="315" src="' . $row['link_video'] . '" frameborder="0" allowfullscreen></iframe>';
            echo '<h4>' . $row['judul_video'] . '</h4>';
            echo '<p>' . $row['deskripsi_video'] . '</p>';
            echo '</div>';
            echo '</div>';
        }
    }
    $conn->close();
    ?>
    <style>
        .sec-content-div {
    font-size: 2rem;
    text-align: start;
    padding: 0 2rem 5rem 2rem;
    width: auto;
    justify-content: space-around;
    max-width: 95rem;
    margin: 0 auto;
        color: white;
  }


  .tile {
    background-color: #fafafa;
    height: 400px;
    width: 560px;
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
    width: 100%;
    max-width: 29rem;
    border-radius: 0.5rem;
  }
  .tile h4 {
    font-size: 2rem;
    font-weight: 600;
    padding: 1rem 0;
    color: #e23d3d;
    margin: 0;
    text-align: center;
  }
  .tile p {
    font-size: 1.6rem;
    padding: 0;
    margin: 0;
    color: black;
    text-align: center;
  }
  .tile:hover {
    transform: scale(1.05);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.19), 0 16px 16px rgba(0, 0, 0, 0.23);
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
        </style>
</body>
</html>
