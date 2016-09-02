<?php

include_once '../models/CategoriesModel.php';

class AboutController {
    
    function indexAction($smarty) {
        $smarty->assign('pageTitleRu', 'Об Авторе');
        $smarty->assign('pageTitleEn', 'About Author');
        
        loadTemplate($smarty, 'header');
        loadTemplate($smarty, 'about');
        loadTemplate($smarty, 'footer');
    }

}
