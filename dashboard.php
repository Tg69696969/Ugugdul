<?php
session_start();

// Хэрвээ хэрэглэгч login хийгээгүй бол login.php руу буцаана
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            height: 100vh;
            background: linear-gradient(135deg, #1f1c2c, #928dab);
            background-size: 200% 200%;
            animation: gradientFlow 10s ease infinite;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Segoe UI', sans-serif;
        }

        @keyframes gradientFlow {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .dashboard-box {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(15px);
            border-radius: 20px;
            padding: 40px;
            text-align: center;
            color: #fff;
            width: 90%;
            max-width: 450px;
            box-shadow: 0 10px 32px rgba(0,0,0,0.3);
        }

        h2 {
            font-size: 28px;
            margin-bottom: 20px;
        }

        p {
            font-size: 16px;
            margin-bottom: 30px;
        }

        a.logout-btn {
            display: inline-block;
            padding: 12px 24px;
            background-color: #ff4d6d;
            color: white;
            font-size: 15px;
            border: none;
            border-radius: 12px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        a.logout-btn:hover {
            background-color: #e63950;
        }
    </style>
</head>
<body>
    <div class="dashboard-box">
        <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>! 👋</h2>
        <p>You are now logged in to your beautiful dashboard.</p>
        <a class="logout-btn" href="logout.php">Logout</a>
    </div>
</body>
</html>
