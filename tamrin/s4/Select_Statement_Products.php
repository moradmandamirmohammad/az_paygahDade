<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbanme = "az_db_project";

$conn = mysqli_connect($servername, $username, $password, $dbanme);

$sql = "SELECT JSON_OBJECT(*) FROM Products";
$result = mysqli_query($conn, $sql);

mysqli_close($conn);
?>