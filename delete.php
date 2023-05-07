<?php
// Load the JSON data into a PHP variable
$data = json_decode(file_get_contents('data.json'), true);

// Find the item that you want to delete in the PHP array
$itemId = $_POST['id'];
foreach ($data['items'] as $index => $item){
    if ($item['id'] == $itemId){
        array_splice($data['items'],$index, 1);
    }
}

// Save the updated PHP array back into the JSON file
file_put_contents('data.json', json_encode($data));

// Redirect back to the index page
header('Location: post-project.php');
