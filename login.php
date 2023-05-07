<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents('users.json'), true);

    // Get form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Find user with matching email
    foreach ($data as $user) {
        if ($user['email'] == $email) {
            // Verify password
            if (password_verify($password, $user['password'])) {
                echo 'Login successful!';
                session_start();
                $_SESSION['name'] = $user['name'];
                header('Location: dashboard.php');
                exit;
            } else {
                echo 'Invalid password';
                exit;
            }
        }
    }

    // User not found
    echo 'User not found';
}