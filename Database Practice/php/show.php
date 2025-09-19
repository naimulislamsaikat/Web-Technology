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
    $sql = "SELECT * FROM hr WHERE name='$name', email='$email', number='$number', password='$password', address='$address'";

    if ($conn->query($sql) === TRUE) {
        echo "View From Database: <br><br>
            .Name: $name</td><br>
            .Email: $email</td><br>
            .Number: $number</td><br>
            .Password: $password</td><br>
            .Address: $address</td><br><br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>