<?php
if (!isset($_POST['updateTask'])) {
    header("Location: /tasks.php");
}
require_once "../config/config.php";
$conn = new mysqli($servername, $username, $password, $dbname);

$id = $_POST['updateTask']; //might want to check with if user has filled this form
$task = $_POST['task']; //might want to check with if user has filled this form
// UPDATE `list` SET `task` = 'Mow the lawn until 15:00' WHERE `list`.`id` = 6$id = $_POST['updateTask']; 
$stmt = $conn->prepare("UPDATE `list` 
SET `task` =  (?)
WHERE `list`.`id` =  (?) ");
$stmt->bind_param("sd", $task, $id); //d means integer here
$stmt->execute();

header("Location: /tasks.php");


