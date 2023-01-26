<?php

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$nationality=$_POST['nationality'];

$host = "localhost";
$dbname = "rand_new";
$username = "root";
$password = "";
        
$conn = mysqli_connect(hostname: $host,
                       username: $username,
                       password: $password,
                       database: $dbname);
        
if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}           
        
$sql = "INSERT INTO wot (firstname, lastname, gender, nationality)
        VALUES (?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
 
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssss",
                       $firstname,
                       $lastname,
                       $gender,
                       $nationality);

mysqli_stmt_execute($stmt);

echo "Record saved.";

?>
