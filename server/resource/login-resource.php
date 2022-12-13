<?php
$GLOBALS['ROOT'] = $_SERVER['DOCUMENT_ROOT'] . '/api/film_suggestion/server';
require_once($ROOT . '/model/user.php');
require_once($ROOT . '/service/user-service.php');
require_once($ROOT . '/resource/header.php');

$data = json_decode(file_get_contents("php://input")); 
$response = authenticateUser($data -> username, $data -> password);
http_response_code(200);         
echo json_encode($response);
?>