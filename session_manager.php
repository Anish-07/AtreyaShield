<?php
session_start();

$file = $_SERVER["SCRIPT_NAME"];
echo $file;


if ( $file == "/AtreyaShield-main/signup.php") {
    if (!empty($_SESSION['recovery_email'])) {
        header("Location:dashboard_myFiles.php");
    }
} 
else {
    if (!isset($_SESSION['recovery_email'])) {
        header("Location:signup.php");
    }
}
?>