<?php
$servername = "182.50.131.14";
$username = "mtastudDB1";
$password = "mtastudDB1!";
$dbname = "mtastudDB1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "ALTER TABLE Disputes ADD disputeDate varchar(15) AFTER PersonID;";
if (mysqli_query($conn, $sql)) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>