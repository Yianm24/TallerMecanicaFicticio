<?php
// Iniciamos la sesión para poder acceder a $_SESSION en toda la app
session_start();

include "vendor/autoload.php";
//require "app/controller/loginController.php";
use App\Controller\FrontController;
$frontController = new FrontController();
//require "app/controller/Frontcontroller.php";