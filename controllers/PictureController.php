<?php

/**
 * Controller of the product page (/product/1)
 */
// modules connection
    include_once '../models/PicturesModel.php';

/**
 * Product page formation
 * 
 * @param object $smarty template engine
 */
class PictureController {

    function indexAction($smarty) {
        $picturesModel = new PicturesModel();
        
        $itemId = isset($_GET['id']) ? $_GET['id'] : NULL;
        if ($itemId == NULL) exit();

        $rsPicture = $picturesModel->getPicturesById($itemId);
        $rsFragments = $picturesModel->getFragmentsByPicture($itemId);
        if (count($rsFragments) > 0) {
            $rsFragmentsLast = $rsFragments[count($rsFragments)-1]['id'];
        } else {
            $rsFragmentsLast = $rsPicture['id'];
        }
        
        switch ($rsPicture['category']) {
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
                $categoryName = 'Все картины';
                $categoryId = NULL;
                break;
        }
        
        if ($rsPicture['name_eng'] == NULL) {
            $rsPicture['name_eng'] = $rsPicture['name'];
        }
        
        $smarty->assign('pageTitleRu', $rsPicture['name']);
        $smarty->assign('pageTitleEn', $rsPicture['name_eng']);
        $smarty->assign('rsPicture', $rsPicture);
        $smarty->assign('rsFragments', $rsFragments);
        $smarty->assign('rsFragmentsLast', $rsFragmentsLast);
        $smarty->assign('categoryName', $categoryName);
        $smarty->assign('categoryId', $categoryId);

        loadTemplate($smarty, 'header');
        loadTemplate($smarty, 'leftColumn');
        loadTemplate($smarty, 'picture');
        loadTemplate($smarty, 'footer');
    }
    
    function hideAction() {
        $picturesModel = new PicturesModel();
        $itemId = isset($_POST['id']) ? $_POST['id'] : NULL;
        if ($itemId == NULL) exit();
        
        $picturesModel->hidePicture($itemId);
    }
    
    function showAction() {
        $picturesModel = new PicturesModel();
        $itemId = isset($_POST['id']) ? $_POST['id'] : NULL;
        if ($itemId == NULL) exit();
        
        $picturesModel->showPicture($itemId);
    }

}
