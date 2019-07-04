<?php


define (DB_USER, "root");
define (DB_PASSWORD, "");
define (DB_DATABASE, "hf");
define (DB_HOST, "localhost");


$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT table_name FROM information_schema.tables WHERE table_type = 'base table' AND table_schema='$database'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	echo $row['table_name'];
    	array_push($table_names, $row['table_name']);
    	echo "<br/>";
    }
} else {
    echo "0 results";
}

$conn->close();


?>