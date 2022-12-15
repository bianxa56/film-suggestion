<?php
include($ROOT . '/db/db.php');
require_once($ROOT . '/model/user.php');

$conn = getDb();

function insertUser(User $user) {
    $sql = "INSERT INTO user (first_name, last_name, email, password) VALUES (?, ?, ?, ?)";
    global $conn;
    $stmt = $conn->prepare($sql);

    $firstName = $user -> getFirstName();
    $lastName = $user -> getLastName();
    $email = $user -> getEmail();
    $password = $user -> getPassword();
    $stmt -> bind_param("ssss", $firstName, $lastName, $email, $password );
    $stmt -> execute();
}

function findUser($email) {
    $sql = "SELECT * FROM user WHERE email = ?";
    global $conn;
    $stmt= $conn->prepare($sql);

    $stmt -> bind_param("s", $email);
    $stmt -> execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    return $user;
}
?>