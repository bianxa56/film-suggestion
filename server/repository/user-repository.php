<?php
include($ROOT . '/db/db.php');
require_once($ROOT . '/model/user.php');

$conn = getDb();

function insertUser(User $user) {
    $sql = "INSERT INTO user (username, password, first_name, last_name) VALUES (?, ?, ?, ?)";
    global $conn;
    $stmt= $conn->prepare($sql);

    $username = $user -> getUsername();
    $password = $user -> getPassword();
    $firstName = $user -> getFirstName();
    $lastName = $user -> getLastName();
    $stmt -> bind_param("ssss", $username, $password, $firstName, $lastName);
    $stmt -> execute();

}
?>