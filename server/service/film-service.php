<?php
require_once($ROOT . '/repository/film-repository.php');
require_once($ROOT . '/model/film.php');

function searchFilmsByGenre($genre) {
    $response = findFilmsByGenre("Sci-fi/Adventure");

    $films = [];
    foreach($response as $row):
        $film = new Film();
        $film -> setName($row["name"]);
        $film -> setGenre($row["genre"]);
        $film -> setYear($row["year"]);
        $film -> setLength($row["length"]);

        array_push($films, $film);
    endforeach;

    return $films;
}