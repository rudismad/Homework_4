<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    header("Location: tasks.php");
    // echo "Cool got POST method will save my login";
} else {
    echo "Not POST probably just a request " . $_SERVER['REQUEST_METHOD'];
}