<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "complaints";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}

$username = $_POST["username"];
$password = $_POST["password"];
$department_id = $_POST["department_id"];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password' AND department_id='$department_id'";
$result = mysqli_query($conn, $sql);

if ($result !== false && $result->num_rows > 0) {
    header("Location: ../DashBorad/index.php");
} else {
    echo "Wrong Credentials";
}






