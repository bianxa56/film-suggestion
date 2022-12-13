<?php
    $GLOBALS['ROOT'] = $_SERVER['DOCUMENT_ROOT'] . '/api/film_suggestion/server';
    require_once($ROOT . '/repository/film-repository.php');

    $response = findFilmsByGenre("Sci-fi/Adventure");
    foreach($response as $row):
        echo implode(" ", $row);
    endforeach
?>
