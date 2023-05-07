<?php
// Load the JSON data into a PHP variable
$data = json_decode(file_get_contents('data.json'), true);

// Generate an ID for the new item
$nextId = $data['nextId'];
$data['nextId']++;

// Add the new item to the array
$newItem = array(
    'id' => $nextId,
    'name' => $_POST['name'],
    'description' => $_POST['description'],
    'skills' => $_POST['skills']
);
array_push($data['items'], $newItem);

// Save the updated PHP array back into the JSON file
file_put_contents('data.json', json_encode($data));

// Add new 
$ndata[] = array(
    'name' => $_POST['name'],
    'description' => $_POST['description'],
    'skills' => $_POST['skills']
);

// Save data to JSON 
file_put_contents('products.json', json_encode($ndata));

// Redirect back to the index page
header('Location: post-project.php');

