<?php
$file = '../contact.json';
$jsonData = file_get_contents($file);
$formDataArray = json_decode($jsonData, true);

// Function to generate a random ID
function generateRandomId() {
    $length = 8; // You can adjust the length of the ID
    $characters = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomId = '';

    for ($i = 2; $i < $length; $i++) {
        $randomId .= $characters[rand(2, strlen($characters) - 1)];
    }

    return $randomId;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kursus Programming</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="icon" href="../img/Screenshot 2024-02-21 214242.png" type="image/png">
</head>
<body>

<table id="data-table">
    <thead>
        <tr>
            <th>id_pengguna</th>
            <th>Username</th>
            <th>Password</th>
            <th>Role</th>
            <th>Login Time</th>
            <th>Delete</th>
        </tr>
    </thead>

    <tbody>
    </tbody>
</table>

<table>
    <thead>
        <tr>
            <th>Full Name</th>
            <th>Email</th>
            <th>No Telepon</th>
            <th>Comment</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($formDataArray as $formData) {
            echo "<tr>
                    <td>{$formData['name']}</td>
                    <td>{$formData['mail']}</td>
                    <td>{$formData['phone']}</td>
                    <td>{$formData['query']}</td>
                    <td><button onclick=\"deleteComment('{$formData['name']}')\">Delete</button></td>
                </tr>";
        }
        ?>
    </tbody>
</table>

<form action="add_video.php" method="post">
    <input type="hidden" name="id_video" value="<?php echo generateRandomId(); ?>">

    <label for="link_video">Link Video:</label>
    <input type="text" name="link_video" required>

    <label for="judul_video">Judul Video:</label>
    <input type="text" name="judul_video" required>

    <label for="deskripsi_video">Deskripsi Video:</label>
    <input name="deskripsi_video" required></input>

    <!-- Dropdown kursus -->
    <div class="form-row">
        <label for="selected-kursus">Pilih Kursus:</label>
        <select name="selected-kursus" id="selected-kursus" class="input-text" required>
            <option value="" disabled selected>Pilih Kursus</option>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "kursus");
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT id_kursus, nama_kursus FROM kursus";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='" . $row['id_kursus'] . "'>" . $row['nama_kursus'] . "</option>";
            }

            mysqli_close($conn);
            ?>
        </select>
    </div>

    <input type="submit" value="Add Video">
</form>

<script src="../js/admin.js"></script>

<?php
$conn = mysqli_connect("localhost", "root", "", "kursus");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'DELETE' && isset($_GET['action'])) {
    if ($_GET['action'] === 'delete') {
        $id_pengguna = $_GET['id_pengguna'];

        $sql = "DELETE FROM pengguna WHERE id_pengguna = '$id_pengguna'";
        $response = array();

        if (mysqli_query($conn, $sql)) {
            $response['success'] = true;
        } else {
            $response['success'] = false;
            $response['error'] = mysqli_error($conn);
        }

        echo json_encode($response);
    } elseif ($_GET['action'] === 'deleteComment') {
        $name = $_GET['name'];

        $jsonData = file_get_contents('../contact.json');
        $formDataArray = json_decode($jsonData, true);

        foreach ($formDataArray as $key => $formData) {
            if ($formData['name'] === $name) {
                unset($formDataArray[$key]);
                break;
            }
        }
        file_put_contents('../contact.json', json_encode(array_values($formDataArray)));

        $response['success'] = true;
        echo json_encode($response);
    }
}

mysqli_close($conn);

?>
</body>
</html>
