<?php
session_start();
require 'table.php'; // зөвхөн db.php байхад хангалттай

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST["email"]);
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header("Location: dashboard.php");
            exit();
        } else {
            echo "❌ Нууц үг буруу байна.";
        }
    } else {
        echo "❌ Ийм и-мэйлтэй хэрэглэгч бүртгэлгүй байна.";
    }

    $stmt->close();
    $conn->close();
}
?>
