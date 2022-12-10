<?php
$GLOBALS['ROOT'] = $_SERVER['DOCUMENT_ROOT'] . '/api/film_suggestion/server';
require_once($ROOT . '/model/user.php');
require_once($ROOT . '/service/user-service.php');

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
$data = json_decode(file_get_contents("php://input"));
$user = new User();
$user -> setUsername($data -> username);
$user -> setPassword($data -> password);
$user -> setFirstName($data -> firstName);
$user -> setLastName($data -> lastName);
createUser($user);
echo $user -> getUsername();
echo $user -> getPassword();
echo $user -> getFirstName();
echo $user -> getLastName();
http_response_code(200);         
echo json_encode("hello world");
?>