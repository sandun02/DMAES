<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    // SQL query to check if the provided username and password match
    $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        header('Location: dashboard.php');
        exit;
    } else {
        echo "Login failed"; // User not found or incorrect password
    }

    mysqli_close($conn);
}
?>