<?php

/**
 *  Controller of the rigistration and authorisation
 */
include_once '../models/UsersModel.php';

class UserController {
    
    private $mysqli;
    
    function __construct($mysqli) {
        $this->mysqli = $mysqli;
    }
    
    function logAction($smarty, $error = null) {
        $smarty->assign('pageTitleRu', 'Авторизация');
        $smarty->assign('pageTitleEn', 'Authorization');

        loadTemplate($smarty, 'header');
        echo '<span id="center" style="color: #cf310e;">' . $error . '</span>';
        loadTemplate($smarty, 'login');
        loadTemplate($smarty, 'footer');
    }
    
    function resetAction($smarty, $error = null) {
        $smarty->assign('pageTitleRu', 'Авторизация');
        $smarty->assign('pageTitleEn', 'Authorization');

        loadTemplate($smarty, 'header');
        echo '<span id="center" style="color: #cf310e;">' . $error . '</span>';
        loadTemplate($smarty, 'reset');
        loadTemplate($smarty, 'footer');
    }
    
    function resetEmailAction($smarty, $error = null) {
        $message = '123pas';
        mail("daovis.inc@gmail.com", "My Subject", "Line 1\nLine 2\nLine 3"); 
        mail("daovis.inc@gmail.com", "Восстановление пароля", $message, 
     "From: webmaster@example.com \r\n");
        $this->resetAction($smarty, 'отправлено');
    } 

    function logoutAction($smarty) {
        unset($_SESSION['user']);
    }

    function loginAction($smarty) {
        $usersModel = new UsersModel();
        $email = isset($_POST['email']) ? $_POST['email'] : NULL;
        $email = trim($email);

        $pwd = isset($_POST['pwd']) ? $_POST['pwd'] : NULL;
        $pwd = trim($pwd);

        $UserData = $usersModel->loginUser($this->mysqli, $email, $pwd);
        if ($UserData['success']) {
            $UserData = $UserData[0];
            $resData['message'] = 'Вы вошли успешно';
            $resData['success'] = TRUE;

            $resData['UserName'] = $UserData['name'];
            $resData['UserEmail'] = $UserData['email'];

            $_SESSION['user'] = $UserData;
            $_SESSION['user']['displayName'] = $UserData['name'];
        } else {
            $resData['success'] = FALSE;
            $resData['message'] = 'Неверный email или пароль';
        }

        if ($resData['success']) {
            $smarty->assign('pageTitleRu', 'Авторизация');
            $smarty->assign('pageTitleEn', 'Authorization');
            loadTemplate($smarty, 'header');
            for ($i = 0; $i < 6; $i++)
                echo '<br />';
            echo "<meta http-equiv='Refresh' content='0;url=/account/'>";
            for ($i = 0; $i < 5; $i++)
                echo '<br />';
            loadTemplate($smarty, 'footer');
        } else {
            $this->logAction($smarty, $resData['message']);
        }
    }

}
