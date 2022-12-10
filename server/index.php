<?php
    $GLOBALS['ROOT'] = $_SERVER['DOCUMENT_ROOT'] . '/api/film_suggestion';
    require_once($ROOT . '/service/user-service.php');

    $user = new User();
    $user -> setUsername('chika09');
    $user -> setPassword('12345');
    $user -> setFirstName('Chika');
    $user -> setLastName('Fujiwara');
    $status = createUser($user);
    echo $status;
?>
