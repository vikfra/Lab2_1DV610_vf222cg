<?php

//INCLUDE THE FILES NEEDED...
require_once('view/LoginView.php');
require_once('view/DateTimeView.php');
require_once('view/LayoutView.php');
require_once('model/LogInManager.php');
require_once('controller/LogInController.php');

//MAKE SURE ERRORS ARE SHOWN... MIGHT WANT TO TURN THIS OFF ON A PUBLIC SERVER
error_reporting(E_ALL);
ini_set('display_errors', 'On');

//CREATE OBJECTS OF THE VIEWS
$dtv = new DateTimeView();
$logInManager = new \model\LogInManager();
$v = new LoginView($logInManager);
$lv = new LayoutView($logInManager);
$app = new \controller\LogInController($v, $lv, $logInManager);

$app->initializeLogIn();
$lv->render(false, $v, $dtv);

