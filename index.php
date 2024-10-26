<?php 
require 'functions.php';
require 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
// dd($_ENV);

$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=php-mvc", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$routes = [
    '/'=> 'views/pages/home.php',
];

if(array_key_exists($_SERVER['REQUEST_URI'] , $routes)){
    require $routes[$_SERVER['REQUEST_URI']];
}else{
    require 'views/pages/404.view.php';
}