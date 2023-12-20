<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
}

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];

$sql = "INSERT INTO login (firstname,lastname,email,username,password)
VALUES ('$fname', '$lname','$email', '$username','$password')";

if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">alert("Saved Succefully!");</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>