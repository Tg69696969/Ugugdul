<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #1f1c2c, #928dab);
            background-size: 200% 200%;
            animation: moveBG 12s ease infinite;
        }

        @keyframes moveBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .login-container {
            background: rgba(20, 20, 30, 0.8);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255,255,255,0.1);
            padding: 40px;
            border-radius: 20px;
            width: 90%;
            max-width: 400px;
            color: #f1f1f1;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6);
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 28px;
            color: #ffffff;
        }

        .form-group {
            position: relative;
            margin-bottom: 25px;
        }

        .form-group input {
            width: 100%;
            padding: 14px 12px;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            outline: none;
        }

        .form-group input::placeholder {
            color: transparent;
        }

        .form-group label {
            position: absolute;
            left: 12px;
            top: 14px;
            color: #aaa;
            font-size: 14px;
            pointer-events: none;
            transition: 0.2s ease;
        }

        .form-group input:focus + label,
        .form-group input:not(:placeholder-shown) + label {
            top: -8px;
            left: 10px;
            font-size: 12px;
            color: #4db8ff;
        }

        button {
            width: 100%;
            padding: 14px;
            background-color: #4db8ff;
            border: none;
            border-radius: 12px;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        button:hover {
            background-color: #37a2e0;
        }

        .footer-text {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #aaa;
        }

        .footer-text a {
            color: #4db8ff;
            font-weight: bold;
            text-decoration: none;
        }

        .footer-text a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="login_process.php" method="post">
            <div class="form-group">
                <input type="email" name="email" required placeholder="Email" />
                <label>Email address</label>
            </div>
            <div class="form-group">
                <input type="password" name="password" required placeholder="Password" />
                <label>Password</label>
            </div>
            <button type="submit">Login</button>
        </form>
        <div class="footer-text">
            Don't have an account? <a href="signup.php">Sign up</a>
        </div>
    </div>
</body>
</html>
