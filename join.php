<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$emailsub = $_POST["emailsub"];

$host = "localhost";
$dbname = "emails_db";
$username = "root";
$password = "";

$conn=mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    die ("Connection error:" . mysqli_connect_error());
};

$sql = "INSERT INTO `emails` (`emailentry`)
        VALUES (?);";

$stmt = mysqli_stmt_init ($conn);

if ( ! mysqli_stmt_prepare ($stmt, $sql)){
    die(mysqli_error($conn));
}
 
mysqli_stmt_bind_param($stmt, "s",
$emailsub);

mysqli_stmt_execute($stmt);

echo "i don't know how you gained access to this .php file but i will find you...";

 