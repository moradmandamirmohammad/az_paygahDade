<?php
$host = localhost;
$username = root;
$password = "";
$database = Charity;

$connection = new mysqli($host, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$message_id = "1";
$user_id = "1";
$message_title = "test";
$message_description = "test";
$message_attachment = "c:\\test\test.png";

$sql = "INSERT INTO users (message_id, user_id, message_title, message_description, message_attachment) VALUES ('$message_id', '$user_id', '$message_title', '$message_description', '$message_attachment')";

if ($connection->query($sql) === TRUE) {
    echo "New user created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

$connection->close();
?>
