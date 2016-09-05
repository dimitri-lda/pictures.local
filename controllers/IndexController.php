<?php

class IndexController {
    
    private $mysqli;
    
    function __construct($mysqli) {
        $this->mysqli = $mysqli;
    }
    
    function indexAction($smarty) {
        
        $smarty->assign('pageTitleRu', 'Artphilexpress. Главная страница.');
        $smarty->assign('pageTitleEn', 'Artphilexpress. Home page.');

        loadTemplate($smarty, 'header');
        loadTemplate($smarty, 'index');
        loadTemplate($smarty, 'footer');
    }
}