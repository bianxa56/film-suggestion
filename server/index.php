<?php
    $GLOBALS['ROOT'] = $_SERVER['DOCUMENT_ROOT'] . '/api/film_suggestion/server';
    require_once($ROOT . '/service/user-service.php');

    $response = authenticateUser("chika09", "12345");
    echo $response;
?>
