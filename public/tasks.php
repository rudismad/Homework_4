<?php

session_start();
require_once "../src/templates/header.php";
require_once "../config/config.php";


$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
echo "<hr>";

$sql = "SELECT * FROM list";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
            // var_dump($row);
        $html="id: " . $row["id"];
        $html.="task - " . $row["task"];
        $html.= " Created on:" . $row["created"];
        $html.= "<hr>";
        echo $html;
      }
} else {
  echo "0 results";
}
$conn->close();