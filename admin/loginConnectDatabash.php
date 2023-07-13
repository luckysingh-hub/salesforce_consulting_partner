<?php
    include '../admin/databash/dbConnect.php';
session_start();

// Handle login form submission
if (isset($_POST['login'])) {
    $username = $_POST['user'];
    $password = $_POST['passcod'];

    // Validate input
    $errors = [];

    if (empty($username)) {
        $errors[] = "Username is required.";
    }

    if (empty($password)) {
        $errors[] = "Password is required.";
    }

    // URL validation
    if (!filter_var($username, FILTER_VALIDATE_URL)) {
        $errors[] = "Username must be a valid URL.";
    }

    // If there are no errors, proceed with the login
    if (empty($errors)) {
        // Sanitize user input to prevent SQL injection
        $username = mysqli_real_escape_string($conn, $username);
        $password = mysqli_real_escape_string($conn, $password);

        // SQL query
        $loginSQL = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

        // Execute query
        $loginResult = mysqli_query($conn, $loginSQL);
        $loginDataRow = mysqli_fetch_assoc($loginResult);

        // Check if the query returned a matching user
        if ($loginDataRow) {
            // Store user data in session variables
            $_SESSION['username'] = $loginDataRow['username'];
            $_SESSION['user_id'] = $loginDataRow['id'];

            // Redirect to the dashboard
            header("Location: ../admin/Dashboard.php");
            exit();
        } else {
            $errors[] = "Invalid username or password.";
        }
    }
}
?>