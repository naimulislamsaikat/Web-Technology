<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "connection";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $sql = "INSERT INTO hr (name, email, number, password, address) VALUES ('$name', '$email', '$number', '$password', '$address')";
    if ($conn->query($sql) === TRUE) {
        echo "<td>Name: $name</td><br>"
           . "<td>Email: $email</td><br>"
           . "<td>Contact Number: $number</td><br>"
           . "<td>Password: $password</td><br>"
           . "<td>Address: $address</td><br><br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>