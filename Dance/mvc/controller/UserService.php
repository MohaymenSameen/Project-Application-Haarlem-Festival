<?php

include __DIR__ . '../util/db.php';

 function getUsers() {

    $conn = OpenCon();

    $result = $conn->query("select * from users");
    
    return $result;
    
    CloseCon($conn);
}

function persistUser($first_name, $last_name, $age) {
    $conn = OpenCon();

    $stmt = $conn->prepare("INSERT INTO users  (first_name, last_name, age) VALUES (?, ?, ?)");
    $stmt->bind_param('ssi', $first_name, $last_name, $age);

    $stmt->execute();
    
    CloseCon($conn);

}

function deleteUser($id) {
    $conn = OpenCon();

    $stmt = $conn->prepare("DELETE FROM users where id=?");
    $stmt->bind_param('i', $id);

    $stmt->execute();

    CloseCon($conn);
}
?>
