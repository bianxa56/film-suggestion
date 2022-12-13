<?php
include($ROOT . '/db/db.php');
require_once($ROOT . '/model/film.php');

$conn = getDb();

function findFilmsByGenre($genre) {
    $sql = "SELECT * FROM film WHERE genre = ?";
    global $conn;
    $stmt = $conn->prepare($sql);

    $stmt -> bind_param("s", $genre);
    $stmt -> execute();
    $result = $stmt -> get_result();
    // $film = $result -> fetch_assoc();
    $film = $result -> fetch_all(MYSQLI_ASSOC);
    return $film;
}
?>