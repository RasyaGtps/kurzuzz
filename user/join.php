<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kursus";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT id_kursus, nama_kursus FROM kursus";
$result = $conn->query($query);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $no_telepon = $_POST["no_telepon"];
    $selected_kursus = $_POST["selected-kursus"];

    $check_user_query = "SELECT id_pengguna, role FROM pengguna WHERE nama LIKE '%$nama%'";
    $result_user = $conn->query($check_user_query);

    if ($result_user->num_rows > 0) {
        $row = $result_user->fetch_assoc();
        $id_pengguna = $row["id_pengguna"];
        $role = $row["role"];

        if ($role != "peserta") {
            $update_role_query = "UPDATE pengguna SET role = 'peserta' WHERE id_pengguna = $id_pengguna";
            $conn->query($update_role_query);
        }
    } else {
        $id_pengguna = NULL;
    }

    $insert_peserta_query = "INSERT INTO peserta (nomor_telepon, nama_pengguna, id_pengguna, id_kursus)
                            VALUES ('$no_telepon', '$nama', $id_pengguna, $selected_kursus)";

    if ($conn->query($insert_peserta_query) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $insert_peserta_query . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kursus Programming</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="../css/join.css" />
    <link rel="icon" href="../img/Screenshot 2024-02-21 214242.png" type="image/png">
</head>
<body>
    <header id="header">
        <div class="header-content-div">
            <a href="#home-sec"> <img src="../img/Screenshot 2024-02-21 214242.png" alt="" id="header-img" /></a>
            <nav id="nav-bar">
                <a href="index.php" class="nav-link">Home</a>
                <a href="about.php" class="nav-link">About</a>
                <a href="benefits.php" class="nav-link">Benefits</a>
                <a href="contact.php" class="nav-link">Contact</a>
                <a href="join.php" class="nav-link" id="active">Join</a>
            </nav>
        </div>
    </header>
    
    <div class="page-content">
        <div class="form-v6-content">
            <div class="form-left">
                <img src="../img/Screenshot 2024-02-21 214242.png" alt="form">
            </div>
            <form class="form-detail" action="#" method="post">
                <h2>Join Us </h2>
                <div class="form-row">
                    <input type="text" name="nama" id="full-name" class="input-text" placeholder="Nama" required>
                </div>
                <div class="form-row">
                    <input type="text" name="no_telepon" id="no" class="input-text" placeholder="No telepon" required>
                </div>
                <div class="form-row">
                    <select name="selected-kursus" class="input-text" required>
                        <option value="" disabled selected>Pilih Kursus</option>
                        <?php

                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='" . $row['id_kursus'] . "'>" . $row['nama_kursus'] . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-row-last">
                    <input type="submit" name="register" class="register" value="Register">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
