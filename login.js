<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Add any additional meta tags, stylesheets, or scripts here -->

    <!-- Link the JavaScript file -->
    <script defer src="login.js"></script>
       <!-- Link the JavaScript file -->
    <script defer src="login.js"></script>
</head>
<body>
    <div>
        <h2>Login</h2>
        <!-- Display error message if login fails -->
        <p id="error-message" style="color: red;"></p>

        <!-- Login form -->
        <form id="login-form">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>

            <button type="button" onclick="validateLogin()">Login</button>
        </form>
    </div>

    <!-- Add any additional scripts or libraries here -->
</body>
</html>
