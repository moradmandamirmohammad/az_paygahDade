<?php
$host = localhost;
$username = root;
$password = "";
$database = Charity;

$connection = new mysqli($host, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$user_id = "1";
$user_fullName = "amir mohammad moradmand";
$user_phoneNumber = "09123456789";
$user_email = "amir@gmail.com";
$user_password = "123456789";
$user_phoneVerification = "";
$user_emailVerification = "";

$sql = "INSERT INTO users (user_id, user_fullName, user_phoneNumber, user_email, user_password, user_phoneVerification, user_emailVerification) VALUES ('$user_id', '$user_fullName', '$user_phoneNumber', '$user_email', '$user_password', '$user_phoneVerification', '$user_emailVerification')";

if ($connection->query($sql) === TRUE) {
    echo "New user created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

$connection->close();
?>