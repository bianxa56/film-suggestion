<?php
require_once($ROOT . '/repository/user-repository.php');
require_once($ROOT . '/model/user.php');

function createUser(User $user) {
  insertUser($user);
}

function authenticateUser($email, $password) {
  $user = findUser($email);
  if (is_null($user)) {
    return "User does not exist.";
  }

  $dbPassword = $user["password"];
  if ($dbPassword != $password) {
    return "Incorrect password.";
  }

  return "OK";
}
?>