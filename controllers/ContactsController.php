<?php

class ContactsController {
    
    private $mysqli;
    
    function __construct($mysqli) {
        $this->mysqli = $mysqli;
    }
    
    function indexAction($smarty) {
        $smarty->assign('pageTitleRu', 'Контакты');
        $smarty->assign('pageTitleEn', 'Contacts');
        
        loadTemplate($smarty, 'header');
        loadTemplate($smarty, 'about');
        loadTemplate($smarty, 'footer');
    }

}
