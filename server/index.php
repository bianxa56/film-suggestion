<?php
    $GLOBALS['ROOT'] = $_SERVER['DOCUMENT_ROOT'] . '/api/film_suggestion/server';
    require_once($ROOT . '/service/film-service.php');

    $films = searchFilmsByGenre($genre);
    foreach($films as $film):
        echo $film -> getName();
    endforeach;
?>
