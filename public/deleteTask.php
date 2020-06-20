<?php
if (!isset($_POST['deleteTask'])) {
    header("Location: /tasks.php");
}
require_once "../config/config.php";
$conn = new mysqli($servername, $username, $password, $dbname);

// INSERT INTO `list` (`id`, `task`, `created`) VALUES (NULL, 'Mow the lawn', current_timestamp());
$id = $_POST['deleteTask']; 
$stmt = $conn->prepare("DELETE FROM `list` WHERE `list`.`id` =  (?) ");
$stmt->bind_param("d", $id); //d means decimal here
$stmt->execute();

header("Location: /tasks.php");


