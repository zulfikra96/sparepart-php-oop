<?php
require_once "../config/helper.php";
require_once "../controllers/LoginController.php";




// create object
$login = new controller\LoginController;


// router

$login->index();
