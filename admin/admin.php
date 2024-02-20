<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kursus Programming</title>
    <link rel="stylesheet" href="../css/admin.css">
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

<script>
fetch('../koneksi/getdata.php')
    .then(response => response.json())
    .then(data => {
        const tableBody = document.querySelector('#data-table tbody');

        data.forEach(row => {
            const newRow = document.createElement('tr');
            newRow.innerHTML = `<td>${row.id_pengguna}</td><td>${row.username}</td><td>${row.password}</td><td>${row.role}</td><td>${row.login_time}</td><td><button onclick="deleteRow('${row.id_pengguna}')">Delete</button></td>`;
            tableBody.appendChild(newRow);
        });
    })
    .catch(error => console.error('Error:', error));

function deleteRow(id_pengguna) {
    if (confirm('Are you sure you want to delete this row?')) {
        fetch(`admin.php?action=delete&id_pengguna=${id_pengguna}`, {
            method: 'DELETE',
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Data deleted successfully.');
                location.reload();
            } else {
                alert('Failed to delete data.');
            }
        })
        .catch(error => console.error('Error:', error));
    }
}
</script>

<?php
$conn = mysqli_connect("localhost", "root", "", "kursus");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'DELETE' && isset($_GET['action']) && $_GET['action'] === 'delete') {
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
}

mysqli_close($conn);
?>
</body>
</html>
