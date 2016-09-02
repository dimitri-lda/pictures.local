<?php

include_once '../models/CategoriesModel.php';

class ContactsController {
    
    function indexAction($smarty) {
        $smarty->assign('pageTitleRu', 'Контакты');
        $smarty->assign('pageTitleEn', 'Contacts');
        
        loadTemplate($smarty, 'header');
        loadTemplate($smarty, 'about');
        loadTemplate($smarty, 'footer');
    }

}
