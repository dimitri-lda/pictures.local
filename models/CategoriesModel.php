<?php

/**
 * Model for categories
 */

/**
 * Returns subcategories for the category $catId
 * 
 * @param integer $catId ID of the category
 * @param integer $typeId ID of the page
 * @return array of subcategories
 */
class CategoriesModel {

    function getSubcatsForCat($catId, $typeId) {
        $sql = "SELECT * 
             FROM categories   
             WHERE parent_id = '{$catId}' and type = '{$typeId}'";

        require '../config/db.php';

        $rs = $mysqli->query($sql);
        $mysqli->close();
        return createSmartyRsArray($rs);
    }

    /**
     * Returns categories with subcategories connection
     * 
     * @return array of categories
     */
    function getAllMainCatsWithSubcats($typeId) {
        $sql = "SELECT * 
             FROM categories   
             WHERE parent_id = 0 and type = '{$typeId}'";

        require '../config/db.php';

        if ($result = $mysqli->query($sql)) {

            //printf("Select вернул %d строк.\n", $result->num_rows); // verification
            $smartyRs = array(); //RS - Record Set
            // receiving data and putting them into an array
            while ($row = $result->fetch_assoc()) {

                $rsSubcats = $this->getSubcatsForCat($row['id'], $typeId);

                if ($rsSubcats) {
                    $row['subcats'] = $rsSubcats;
                }

                $smartyRs[] = $row;
            }

            $result->close();
        }

        $mysqli->close();
        return $smartyRs;
    }

    function getCatById($catId) {
        $catId = intval($catId);

        $sql = "SELECT * 
             FROM `categories`   
             WHERE `id` = '{$catId}'";

        require '../config/db.php';

        $rs = $mysqli->query($sql);
        $mysqli->close();

        return $rs->fetch_assoc();
    }

}
