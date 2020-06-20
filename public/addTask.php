<?php
if (!isset($_POST['addSong'])) {
    header("Location: /tasks.php");
}
require_once "../config/config.php";
$conn = new mysqli($servername, $username, $password, $dbname);

// INSERT INTO `list` (`id`, `task`, `created`) VALUES (NULL, 'Mow the lawn', current_timestamp());
$task = $_POST['task']; //might want to check with if user has filled this form
$stmt = $conn->prepare("INSERT INTO list
    (task) VALUES (?)
    ");
$stmt->bind_param("s", $task); //s means string here
$stmt->execute();


