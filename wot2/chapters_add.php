<?php

$chapNo=$_POST['chapNo'];
$Title=$_POST['Title'];
$Summary=$_POST['Summary'];

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
        
$sql = "INSERT INTO chapters01 (chapNo, Title, Summary)
        VALUES (?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
 
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "iss",
                       $chapNo,
                       $Title,
                       $Summary);

mysqli_stmt_execute($stmt);

echo "Record saved.";

?>
