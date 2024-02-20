    <?php
    $conn = mysqli_connect("localhost", "root", "", "kursus");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $status = "";

    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirm_password'];
        if ($password !== $confirmPassword) {
            $status = "Passwords do not match. Please try again.";
        } else {
            function generateRandomId($length = 3) {
                global $conn;
    
                $maxAttempts = 10;
                $attempts = 0;
    
                do {
                    $numbers = range(0, 9);
                    shuffle($numbers);
                    $randomString = implode('', array_slice($numbers, 0, $length));
                    
                    $checkExistingId = "SELECT id_pengguna FROM pengguna WHERE id_pengguna = '$randomString'";
                    $result = mysqli_query($conn, $checkExistingId);
    
                    if (mysqli_num_rows($result) == 0) {
                        return $randomString;
                    }
    
                    $attempts++;
                } while ($attempts < $maxAttempts);
    
                $status = "Failed to generate a new ID after $maxAttempts attempts.";
                return null;
            }
    
            $id_pengguna = generateRandomId();
    
            if ($id_pengguna !== null) {
                $password = $_POST['password'];
    
                $role = 'user';
    
                $sql = "INSERT INTO pengguna (id_pengguna, nama, username, email, alamat, password, role) VALUES ('$id_pengguna', '$nama', '$username', '$email', '$alamat', '$password', '$role')";
    
                if (mysqli_query($conn, $sql)) {
                    header("Location: ../load/success.php");
                } else {
                    $status = "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }
        }
    }
    
    mysqli_close($conn);
    ?>