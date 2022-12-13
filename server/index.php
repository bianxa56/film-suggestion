<?php
    $GLOBALS['ROOT'] = $_SERVER['DOCUMENT_ROOT'] . '/api/film_suggestion/server';
    require_once($ROOT . '/repository/user-repository.php');

    $user = findUser("chika09");
    echo $user["first_name"]
?>
