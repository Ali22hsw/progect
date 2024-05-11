<?php

function GenerateToken($length){
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}


require_once "../conn.php";

$username = $_POST["username"];
$password = $_POST["password"];
$department_id = $_POST["department_id"];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if ($result !== false && $result->num_rows > 0) {
    $token = GenerateToken(60);

    // Update the SQL query to insert the token into the users table
    $updateTokenQuery = "UPDATE users SET auth_token='$token', department_id='$department_id' WHERE username='$username' AND password='$password'";
    if ($conn->query($updateTokenQuery) === TRUE) {
        setcookie("authToken", $token, time()+20*24*60*60, "/"); // 20 days 
        header("Location: ../DashBorad/index.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
    
} else {
    echo "Wrong Credentials";
}






