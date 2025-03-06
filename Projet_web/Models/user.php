<?php
require_once 'db.php';

class User {
    
    public static function authenticate($email, $password) {

        $pdo = DB::connect();
        
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email AND password = :password");

        $stmt->execute(['email' => $email, 'password' => $password]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
