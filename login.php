<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // In a real-world scenario, you would perform database validation here
    // For simplicity, we'll just check for a hardcoded username and password
    $validUsername = "example_user";
    $validPassword = "example_password";

    if ($username == $validUsername && $password == $validPassword) {
        // Successful login, redirect to a welcome page
        header("Location: welcome.php");
        exit();
    } else {
        // Invalid credentials, show an error message
        $error_message = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Add any additional meta tags, stylesheets, or scripts here -->
</head>
<body>
    <div>
        <h2>Login</h2>
        <!-- Display error message if login fails -->
        <?php if (isset($error_message)) { ?>
            <p style="color: red;"><?php echo $error_message; ?></p>
        <?php } ?>

        <!-- Login form -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>

            <button type="submit">Login</button>
        </form>
    </div>

    <!-- Add any additional scripts or libraries here -->
</body>
</html>
