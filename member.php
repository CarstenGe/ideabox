<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    header("Location:loggedin/index.php");
} else {
    header("Location:login.php");
}
?>