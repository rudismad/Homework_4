<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    header("Location: tasks.php");
    echo "Cool got POST method will save my login";
    if (isset($_POST['myName'])) {
        $_SESSION['myName'] = $_POST['myName'];
        echo "Session saved";
        header("Location: login.php");
    } else {
        echo "No myName set";
    }

} else {
    echo "Not POST probably just a request " . $_SERVER['REQUEST_METHOD'];
}