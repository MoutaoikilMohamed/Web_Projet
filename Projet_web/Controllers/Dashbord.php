
<?php

session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
require_once '../views/Dashbord.php'; 


?>

