<?php
require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

if(session_status() === PHP_SESSION_NONE){
    session_start();
}

if(!isset($_SESSION['CSRF_TOKEN'])){
    $_SESSION['CSRF_TOKEN'] = bin2hex(random_bytes(32));
}

require_once __DIR__ . '/../core/helpers.php';
require_once __DIR__ . '/../core/Router.php';
setlocale(LC_ALL, 'fr_FR.UTF-8');