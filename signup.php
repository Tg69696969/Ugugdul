<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            height: 100vh;
            background: linear-gradient(135deg, #141e30, #243b55);
            background-size: 200% 200%;
            animation: gradientFlow 10s ease infinite;
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        @keyframes gradientFlow {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .signup-container {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: 20px;
            width: 90%;
            max-width: 400px;
            color: #fff;
            box-shadow: 0 12px 32px rgba(0, 0, 0, 0.6);
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 28px;
            color: #fff;
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
            background-color: #36a1e0;
        }

        .footer-text {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #bbb;
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
    <div class="signup-container">
        <h2>Create Account</h2>
        <form action="register.php" method="post">
            <div class="form-group">
                <input type="text" name="username" required placeholder=" " />
                <label>Username</label>
            </div>
            <div class="form-group">
                <input type="email" name="email" required placeholder=" " />
                <label>Email Address</label>
            </div>
            <div class="form-group">
                <input type="password" name="password" required placeholder=" " />
                <label>Password</label>
            </div>
            <button type="submit">Register</button>
        </form>
        <div class="footer-text">
            Already have an account? <a href="login.php">Login</a>
        </div>
    </div>
</body>
</html>
