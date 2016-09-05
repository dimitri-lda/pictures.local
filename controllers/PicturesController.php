<?php

/**
 * Controller of the pictures page (/pictures/)
 */
include_once '../models/PicturesModel.php';

class PicturesController {
    
    private $mysqli;
    
    function __construct($mysqli) {
        $this->mysqli = $mysqli;
    }
    
    function indexAction($smarty) {
        $picturesModel = new PicturesModel();
        $catId = isset($_GET['id']) ? $_GET['id'] : NULL;

        if ($catId != NULL) {
            $rsPictures = $picturesModel->getPicturesByCat($this->mysqli, $catId);
        } else {
            $rsPictures = $picturesModel->getLastPictures($this->mysqli);
        }
        
        switch ($catId) {
            case 1:
                $categoryName = 'Филосовский экспрессионизм ';
                $categoryId = 1;
                break;
            case 2:
                $categoryName = 'Категория 2';
                $categoryId = 2;
                break;
            case 3:
                $categoryName = 'Категория 3';
                $categoryId = 3;
                break;
            default:
                if ($_SESSION['lang'] == 'russian') {
                    $categoryName = 'Все картины';
                } else {
                    $categoryName = 'All pictures';
                }
                
                $categoryId = NULL;
                break;
        }
        $smarty->assign('pageTitleRu', 'Картины');
        $smarty->assign('pageTitleEn', 'Pictures');
        $smarty->assign('rsPictures', $rsPictures);
        $smarty->assign('categoryName', $categoryName);
        $smarty->assign('categoryId', $categoryId);

        loadTemplate($smarty, 'header');
        loadTemplate($smarty, 'leftColumn');
        loadTemplate($smarty, 'pictures');
        loadTemplate($smarty, 'footer');
    }

}
