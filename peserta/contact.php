
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Kursus Programming</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;700&display=swap"
      rel="stylesheet"
    />
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
          <a href="contact.php" class="nav-link" id="active">Contact</a>
          <a href="kursus.php" class="nav-link">Kursus</a>
        </nav>
      </div>
    </header>
    <div class="formBox">
        <h2>Contact</h2>
        <p>Hubungi kami jika kamu ingin bertanya !</p>
        <form action="#">
            <div>
                <input type="text" placeholder="Full Name" name="name" id="name">
</div>
<div>
                <input type="email" name="mail" id="mail" placeholder="Email">
            </div>
            <div>
                <input type="number" name="phone" id="phone" placeholder="Phone" min="1">
            </div>
            <div>
                <textarea name="query" id="query" cols="30" rows="5"
                    placeholder="Tulis komentarmu"></textarea>
            </div>
            <div>
            <button onclick="submitForm()">Send</button>
            </div>
        </form>
        <script>
    function submitForm() {
        var name = document.getElementById('name').value;
        var email = document.getElementById('mail').value;
        var phone = document.getElementById('phone').value;
        var query = document.getElementById('query').value;

        var formData = {
            "name": name,
            "mail": email,
            "phone": phone,
            "query": query
        };

        var jsonData = JSON.stringify(formData);

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "../koneksi/contact.php", true);
        xhr.setRequestHeader("Content-Type", "application/json");
        xhr.send(jsonData);
    }
</script>
    </div>
</body>
</html>
