<?php

/**
 * Returns products list 
 * 
 * @param integer $limit Limit of the products
 * @return array of products
 */
class PicturesModel {

    function getLastPictures($mysqli, $limit = null) {
        $sql = "SELECT * 
             FROM `pictures` 
             WHERE type = 0 and status <> 0 
             ORDER BY `id` DESC";

        if ($limit) {
            $sql .= " LIMIT {$limit}";
        }

        $rs = $mysqli->query($sql);
        $mysqli->close();
        return createSmartyRsArray($rs);
    }

    /**
     * Get products for category $categoryId
     * 
     * @param integer $categoryId category ID
     * @return array of products
     */
    function getPicturesByCat($mysqli, $categoryId) {
        $categoryId = intval($categoryId);
        $sql = "SELECT * 
         FROM `pictures`   
         WHERE `category` = '{$categoryId}' AND type = 0 and status <> 0";

        $rs = $mysqli->query($sql);
        $mysqli->close();

        return createSmartyRsArray($rs);
    }
    
    function getFragmentsByPicture($mysqli, $typeId) {
        $typeId = intval($typeId);
        $sql = "SELECT * 
         FROM `pictures`   
         WHERE `type` = '{$typeId}' and status <> 0";
         
        $rs = $mysqli->query($sql);
        $mysqli->close();

        return createSmartyRsArray($rs);
    }

    /**
     * Get product data by id
     * 
     * @param type $itemId product ID
     * @return array - string of products
     */
    function getPicturesById($mysqli, $itemId) {
        $itemId = intval($itemId);
        $sql = "SELECT * 
         FROM `pictures`   
         WHERE `id` = '{$itemId}'";

        $rs = $mysqli->query($sql);
        $mysqli->close();

        return $rs->fetch_assoc();
    }
    
    function getHiddenPictures($mysqli, $limit = null) {
        $sql = "SELECT * 
             FROM `pictures` 
             WHERE type = 0 and status = 0 
             ORDER BY `id` DESC";

        if ($limit) {
            $sql .= " LIMIT {$limit}";
        }

        $rs = $mysqli->query($sql);
        $mysqli->close();
        return createSmartyRsArray($rs);
    }
    
    function hidePicture($mysqli, $id) {
        $sql = "UPDATE `pictures` SET `status` = '0' WHERE `pictures`.`id` = {$id};";

        $mysqli->query($sql);
        $mysqli->close();
        return true;
    }
    
    function showPicture($mysqli, $id) {
        $sql = "UPDATE `pictures` SET `status` = '1' WHERE `pictures`.`id` = {$id};";

        $mysqli->query($sql);
        $mysqli->close();
        return true;
    }
}
