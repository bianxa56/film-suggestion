<?php
require_once($ROOT . '/repository/user-repository.php');
require_once($ROOT . '/model/user.php');

function createUser(User $user) {
  insertUser($user);
}
?>