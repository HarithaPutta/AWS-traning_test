<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <!-- Add any additional meta tags, stylesheets, or scripts here -->
</head>
<body>
    <div>
        <h2>Signup</h2>

        <!-- Signup form -->
        <form action="signup_process.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>

            <label for="confirm-password">Confirm Password:</label>
            <input type="password" id="confirm-password" name="confirm-password" required><br>

            <button type="submit">Signup</button>
        </form>

        <p>Already have an account? <a href="login.html">Login here</a></p>
    </div>

    <!-- Add any additional scripts or libraries here -->
</body>
</html>
