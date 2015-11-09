<?php
$conn = new mysqli(
    "eu-cdbr-azure-north-d.cloudapp.net",
    "b99256e599d9fc",
    "64c23a04",
    "rgutest" );

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE 'testmarkers' (
'id' INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
'name' VARCHAR(60) NOT NULL,
'address' VARCHAR(60) NOT NULL,
'lat' FLOAT( 10, 6 ) NOT NULL ,
'lng' FLOAT( 10, 6 ) NOT NULL ,
'type' VARCHAR( 30 ) NOT NULL
) ENGINE = MYISAM ;
)";

if ($conn->query($sql) === TRUE) {
    echo "Table markers created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>