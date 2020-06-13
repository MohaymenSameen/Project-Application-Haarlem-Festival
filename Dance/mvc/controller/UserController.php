<?php

include 'UserService.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];

    persistUser($first_name, $last_name, $age);
    header('Location: ' . "..");
} else if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    $url = $_SERVER['REQUEST_URI'];
    $parts = parse_url($url);
    parse_str($parts['query'], $query);
    $id = $query['id']; 
    echo "Id is: " . $id;
    deleteUser($id);
    header('Location: ' . "..");
} else {
    return getAllUsers();
}

function getAllUsers() {
    return getUsers();
}
