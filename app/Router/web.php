<?php
use App\Controllers\HomeController;


$router->get('/', [HomeController::class, 'index']);

$router->post('/send-mail', [HomeController::class, 'sendMail']);

