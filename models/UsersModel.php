<?php

class UsersModel {

    function loginUser($mysqli, $email, $pwd) {
        $email = htmlspecialchars($mysqli->real_escape_string($email));
        $pwd = htmlspecialchars($mysqli->real_escape_string($pwd));

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
