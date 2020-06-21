<?php

session_start();
include "../src/templates/logoutForm.html";
// require_once "../src/templates/header.html";
require_once "../config/config.php";
// include "../src/templates/logoutForm.html";
include "../src/templates/addTaskForm.html";


$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
echo "<hr>";

$sql = "SELECT * FROM list";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $id= $row["id"];
    $task= $row["task"];
    $html = "<div class='task-box'>";
    $html .= "<form class='input-task' action='updateTask.php' method='post'>";
      // $html .= "id: " . $row["id"]; //set $html text here <textarea name="message" rows="2" cols="40">
      $html .= "<input class='input-task' name='task' value='$task' size='30'>";
      $html .= " Created on:" . $row["created"];
      $html .= "<br>";
      $html .= "<button type='submit' class='update-task' name='updateTask' value='$id'>UPDATE TASK</button>";
    $html .= "</form>";
      $html .= "<form class='input-task' action='deleteTask.php' method='post'>";
      $html .= "<button type='submit' name='deleteTask' value='$id'>";
      $html .= "DELETE TASK</button>";
    $html .= "</form>";
    $html .= "</div>";
        echo $html;
      }
} else {
  echo "0 results";
}
$conn->close();