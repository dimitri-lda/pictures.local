<?php
/**
 * Main functions
 */

/**
 * Formation of the requested page
 * 
 * @param type $controllerName name of the controller
 * @param type $actionName name of the function (page handling)
 */

function loadPage($smarty, $controllerName, $actionName = 'index') {
    
    include_once PathPrefix . $controllerName . PathPostfix;
    
    $classname = $controllerName . "Controller";
    $class = new $classname();
    $function = $actionName . 'Action';
    $class->$function($smarty);
}

/**
 * Template loading
 * 
 * @param type $smarty is an object
 * @param type $templateName name of the template file
 */
function loadTemplate($smarty, $templateName) {
    $smarty->display($templateName . TemplatePostfix);
}

/**
 * Debug function. Ends the program and show the value of variable $value
 * 
 * @param type $value variable for the output on the page 
 * @param type $die ends the program
 */
function d($value = null, $die = 1) {
    echo 'Debug: <br /><pre>';
    print_r($value);
    echo '</pre>';
    
    if($die) die;
}

/**
 * Result of SELECT to array type
 * 
 * @param recordset $rs number of string - SELECT result
 * @return array
 */
function createSmartyRsArray($rs) {
    if(! $rs) return FALSE;
    
    $smartyRs = array();
     while ($row = $rs->fetch_assoc()) {
         $smartyRs[] = $row;
     }
     $rs->close();
     
     return $smartyRs;
}

function getFirstParagraph($rsNews) {
    $rsFirstP = array();
    $pattern = '/<p>(.*?)<\/p>/';
    
    foreach ($rsNews as $item) {    
        preg_match($pattern, $item['body'], $matches);
        if (!isset($matches[0])){$matches[0]='';}
        array_push($rsFirstP, $matches[0]);
    }
    
    return($rsFirstP);
}

function getPost($param) {
    if (isset($_POST[$param])) {
        return $_POST[$param];
    } else {
        return FALSE;
    }
}

function getSessionLang() {
    if (isset($_SESSION['lang']) && ($_SESSION['lang'] == 'english')) {
        $langUrl = 'english';    
    } else {
        $langUrl = 'russian';
        $_SESSION['lang'] = 'russian';
    }
    include_once '../language/'.$langUrl.'/text_lang.php';
    return $lang;
}