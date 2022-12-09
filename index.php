<?php
    $GLOBALS['ROOT'] = $_SERVER['DOCUMENT_ROOT'] . '/api/server';
    include($ROOT . '/repository/user-repository.php');
    require_once($ROOT . '/model/user.php');

    $user = new User();
    $user -> setUsername('chika09');
    $user -> setPassword('12345');
    $user -> setFirstName('Chika');
    $user -> setLastName('Fujiwara');
    $status = createUser($user);

    // echo $status;
    echo $user -> getUsername();
?>