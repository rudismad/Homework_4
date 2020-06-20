<?php
if (!isset($_POST['addTask'])) {
    header("Location: /tasks.php");
}
require_once "../config/config.php";
$conn = new mysqli($servername, $username, $password, $dbname);

// INSERT INTO `list` (`id`, `task`, `created`) VALUES (NULL, 'Mow the lawn', current_timestamp());
$task = $_POST['task']; 
$stmt = $conn->prepare("INSERT INTO list
    (task) VALUES (?)
    ");
$stmt->bind_param("s", $task); //s means string here
$stmt->execute();

header("Location: /tasks.php");


