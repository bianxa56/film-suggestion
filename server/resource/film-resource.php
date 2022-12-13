<?php
$GLOBALS['ROOT'] = $_SERVER['DOCUMENT_ROOT'] . '/api/film_suggestion/server';
require_once($ROOT . '/model/film.php');
require_once($ROOT . '/service/film-service.php');
require_once($ROOT . '/resource/header.php');

$genre = $_GET['genre'];
$films = searchFilmsByGenre($genre);
http_response_code(200);         
echo json_encode($films);
?>