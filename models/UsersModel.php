<?php

class UsersModel {

    function registerNewUser($email, $name, $pwdMD5, $city) {
        require '../config/db.php';
        $email = htmlspecialchars($mysqli->real_escape_string($email));
        $name = htmlspecialchars($mysqli->real_escape_string($name));
        $city = htmlspecialchars($mysqli->real_escape_string($city));

        $sql = "INSERT INTO `users` (`email`,`name`,`password`,`city`) 
            VALUES('{$email}','{$name}','{$pwdMD5}','{$city}');";

        $rs = $mysqli->query($sql);
        if ($rs) {
            $sql = "SELECT * FROM `users` 
                WHERE (`email` = '{$email}'  and `password` = '{$pwdMD5}')
                LIMIT 1";

            $rs = $mysqli->query($sql);
            $mysqli->close();
            $rs = createSmartyRsArray($rs);

            if (isset($rs[0])) {
                $rs['success'] = TRUE;
            } else {
                $rs['success'] = FALSE;
            }
        } else {
            $rs['success'] = FALSE;
        }
        return $rs;
    }

    /**
     * Check the user's registration data 
     */
    function checkRegisterParams($email, $pwd1, $pwd2, $name) {
        $res = NULL;

        if ($pwd1 != $pwd2) {
            $res['success'] = FALSE;
            $res['message'] = 'Ошибка. Пароли не совпадают';
        }

        if (strlen($pwd1) < 3 || strlen($pwd1) > 35) {
            $res['success'] = FALSE;
            $res['message'] = 'Пароль должен быть длиной от 3 до 35 знаков';
        }

        if (strlen($email) < 5 || strlen($email) > 50) {
            $res['success'] = FALSE;
            $res['message'] = 'Email должен быть длиной до 50 знаков';
        }

        if (strlen($name) < 3 || strlen($name) > 25) {
            $res['success'] = FALSE;
            $res['message'] = 'Имя должено быть длиной от 3 до 25 знаков';
        }

        return $res;
    }

    function checkUserEmail($email) {
        require '../config/db.php';
        $email = $mysqli->real_escape_string($email);
        $sql = "SELECT `id` FROM `users` WHERE `email` = '{$email}'";

        $rs = $mysqli->query($sql);
        $mysqli->close();
        $rs = createSmartyRsArray($rs);

        return $rs;
    }

    function checkUserName($name) {
        require '../config/db.php';
        $name = $mysqli->real_escape_string($name);
        $sql = "SELECT `id` FROM `users` WHERE `name` = '{$name}'";

        $rs = $mysqli->query($sql);
        $mysqli->close();
        $rs = createSmartyRsArray($rs);

        return $rs;
    }

    function loginUser($email, $pwd) {
        require '../config/db.php';
        $email = htmlspecialchars($mysqli->real_escape_string($email));

        $sql = "SELECT * FROM `users` 
                WHERE (`email` = '{$email}'  and `password` = '{$pwd}')
                LIMIT 1";

        $rs = $mysqli->query($sql);
        $mysqli->close();
        $rs = createSmartyRsArray($rs);

        if (isset($rs[0])) {
            $rs['success'] = TRUE;
        } else {
            $rs['success'] = FALSE;
        }

        return $rs;
    }

}
