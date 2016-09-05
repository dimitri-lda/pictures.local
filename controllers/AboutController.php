<?php

class AboutController {
    
    private $mysqli;
    
    function __construct($mysqli) {
        $this->mysqli = $mysqli;
    }
    
    function indexAction($smarty) {
        $smarty->assign('pageTitleRu', 'Об Авторе');
        echo "string";
        $smarty->assign('pageTitleEn', 'About Author');
        
        loadTemplate($smarty, 'header');
        loadTemplate($smarty, 'about');
        loadTemplate($smarty, 'footer');
    }

}
