<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbanme = "az_db_project";

$conn = mysqli_connect($servername, $username, $password, $dbanme);

$sql = "SELECT JSON_OBJECT(*) FROM Users WHERE User_ID = '46983'";
$result = mysqli_query($conn, $sql);

mysqli_close($conn);
?>