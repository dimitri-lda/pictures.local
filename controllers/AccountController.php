<?php

include_once '../models/PicturesModel.php';

class AccountController {
    
    private $mysqli;
    
    function __construct($mysqli) {
        $this->mysqli = $mysqli;
    }
    
    function indexAction($smarty) {
        $picturesModel = new PicturesModel();
        $pageId = isset($_GET['id']) ? $_GET['id'] : NULL;
        $smarty->assign('pageTitleRu', 'Управление сайтом');
        $smarty->assign('pageTitleEn', 'Управление сайтом');
        
        if (isset($_SESSION['user']) && $_SESSION['user']['role'] == 'admin') {
            $UserStatus = $_SESSION['user']['role'];
            $smarty->assign('UserStatus', $UserStatus);
            
            loadTemplate($smarty, 'header');
            loadTemplate($smarty, 'account-left');
            if (isset($pageId)) {
                if ($pageId == 1) {
                }
                if ($pageId == 2) {

                }
                if ($pageId == 3) {
                    $rsPictures = $picturesModel->getHiddenPictures($this->mysqli);
                    $categoryName = 'Скрытые картины';
                    $categoryId = NULL;
                    
                    $smarty->assign('pageTitleRu', 'Картины');
                    $smarty->assign('pageTitleEn', 'Pictures');
                    $smarty->assign('rsPictures', $rsPictures);
                    $smarty->assign('categoryName', $categoryName);
                    $smarty->assign('categoryId', $categoryId);        
                    loadTemplate($smarty, 'pictures');
                }
            } else {
                
            }
        } else {
            loadTemplate($smarty, 'header');
            echo "<meta http-equiv='Refresh' content='0;url=/contacts/'>";
        }

        loadTemplate($smarty, 'footer');
    }

    function addAction($smarty) {

    }
    
    function updateAction($smarty) {

    }
    
    function hideAction($smarty) {

    }

}
