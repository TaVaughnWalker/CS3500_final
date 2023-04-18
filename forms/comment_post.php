<?php
$servername = 'localhost';
$username = "server";
$password = "password";
$dbname = "taylor_swift";

$post_msg = $_POST["data"];
if (strlen($_POST['data']) > 500) {
    die("Failure data too long");
}

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO comments 
            (commentText) 
        VALUES 
            ('$post_msg');
";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

