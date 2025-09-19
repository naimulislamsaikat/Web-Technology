<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "connection";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $sql = "DELETE FROM hr WHERE number='$number'";

    if ($conn->query($sql) === TRUE) {
        echo "Delated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}

?>