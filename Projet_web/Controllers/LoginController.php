<?php
require_once '../models/User.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = User::authenticate($email, $password);
    if ($user) {
        $_SESSION['user'] = $user;
        header("Location:Dashbord.php");
        exit();
    } else {
        $error = "Email ou mot de passe incorrect.";
        header("Location: ../views/login.php?error=" . urlencode($error));
        exit();
    }
}
?>
