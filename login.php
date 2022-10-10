<?php
if ( $_POST["name"] == "Johan" && $_POST["password"] == "test") {
    session_start();
    $_SESSION["name"] = $_POST["name"];
    header("location: welcome.php");
}

else {
    header("location: fuckoff.php");
}