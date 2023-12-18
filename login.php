<?php
    // Check login credentials
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["email"];
        $password = $_POST["password"];

        // Your authentication logic goes here
        // For simplicity, let's assume authentication is successful

        // Redirect to compose email page on successful login
        header("Location: inbox.html");
        exit();
    }
    ?>