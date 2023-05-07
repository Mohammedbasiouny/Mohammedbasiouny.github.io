<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get form data
    $user_type = $_POST['user_type'];

    // Add new user to data array
    $data[] = array(
        'user_type' => $user_type,
    );

    // Do something with $user_type here
    if ($_POST['user_type'] == 'freelancer') {
        // Redirect to freelancer page
        header('Location: freelancer-signup.html');
        exit();
      } elseif ($_POST['user_type'] == 'client') {
        // Redirect to client page
        header('Location: client-signup.html');
        exit();
    }
}
?>