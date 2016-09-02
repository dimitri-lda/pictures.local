<?php
/**
 * File of the settings
 * 
 * in Hosting you should to make root access
 */

//> Constants for the references to the controllers
define ('PathPrefix', '../controllers/');
define('PathPostfix', 'Controller.php');
//<

//> I'm using the template
$template = 'default';

// references to the templates (*.tpl) 
define('TemplatePrefix', "../views/{$template}/");
define('TemplatePostfix', '.tpl');

// references to the templates (*.tpl) in the webspace
define('TemplateWebPath', "/templates/{$template}/");
//<

//> Smarty initialization
require '../library/Smarty/libs/Smarty.class.php';
$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('../tmp/smarty/tamplate_c');
$smarty->SetCacheDir('../tmp/smarty/cache');
$smarty->SetConfigDir('../library/Smarty/configs');

$smarty->assign('templateWebPath', TemplateWebPath);

$smarty->SetCompileDir('../tmp/smarty/tamplate_c');
//<