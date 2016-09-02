<?php
/**
 * Controller of the main page (index.php)
 */

/**
 * Main page formation (index.php)
 * 
 * @param type $smarty template engine
 */

class IndexController {
    function indexAction($smarty) {
        
        $smarty->assign('pageTitleRu', 'Artphilexpress. Главная страница.');
        $smarty->assign('pageTitleEn', 'Artphilexpress. Home page.');

        loadTemplate($smarty, 'header');
        loadTemplate($smarty, 'index');
        loadTemplate($smarty, 'footer');
    }
}