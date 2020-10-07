<?php
include_once 'router.php'; 
//CORS Ekstra
header("Access-Control-Allow-Origin: *"); // Bütün URL'ler için gelen istek kabul edilir.
   // header("Access-Control-Allow-Methods: GET, POST"); //Projede yazıldığı şekilde sadece GET ve POST çalışacak şekile ayarlı.



$dizin = $_SERVER['REQUEST_URI'];
$yontem = $_SERVER['REQUEST_METHOD'];
$data = [];
if ($yontem == "GET") {$data = $_GET;}
if ($yontem == "POST") {$data = $_POST;}


$router = new Router();

echo $router->Gonder($dizin, $yontem, $data);




?>