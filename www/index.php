<?php
include_once '../config/config.php'; // Settings initialization
include_once '../config/db.php'; // Database settings
include_once '../library/mainFunctions.php'; // Main functions
session_start();

$lang = getSessionLang();
$smarty->assign('lang', $lang);

// definition of the controller with which we are working
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';
// definition of the action with which we are working
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

if (isset($_SESSION['user'])) {
    $smarty->assign('UserName', $_SESSION['user']['displayName']); 
    $smarty->assign('UserStatus', $_SESSION['user']['role']); 
}

loadPage($smarty, $controllerName, $actionName);