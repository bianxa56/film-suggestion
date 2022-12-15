<?php
$GLOBALS['ROOT'] = $_SERVER['DOCUMENT_ROOT'] . '/api/film_suggestion/server';
require_once($ROOT . '/model/user.php');
require_once($ROOT . '/service/user-service.php');
require_once($ROOT . '/resource/header.php');

$data = json_decode(file_get_contents("php://input"));
$user = new User();
$user -> setFirstName($data -> firstName);
$user -> setLastName($data -> lastName);
$user -> setEmail($data -> email);
$user -> setPassword($data -> password);

createUser($user);
http_response_code(200);         
echo json_encode("User successfully created.");
?>