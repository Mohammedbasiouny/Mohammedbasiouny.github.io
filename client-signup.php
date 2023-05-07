<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents('users.json'), true);
    $errors = array();

    // Get form data
    $user_type = 'client';
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $confirm_password = $_POST["confirm-password"];
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $dob = $_POST['dob'];
    $country = $_POST['country'];

    // Check if email already exists
    if (!empty($data)) {
        foreach ($data as $user) {
            if ($user['email'] == $email) {
                $errors[] = 'Email already exists.';
                break;
            }
        }
    }

    if (count($errors) === 0) {
        // Add new user to data array
        $data[] = array(
            'user_type' => $user_type,
            'id' => $id,
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'gender' => $gender,
            'dob' => $dob,
            'country' => $country,
        );

        // Save data to JSON file
        file_put_contents('users.json', json_encode($data));

        echo 'Registration successful!';
        // Redirect user to login page
        header('Location: login.html');
        exit();

    } else {
        // Display errors to user
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}