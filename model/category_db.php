<?php
    function get_categories(){
        global $db;
        $query = 'select * from categories ORDER  by categoryID';
        $result = $db->query($query);
        return $result;
    }
    function get_category_name($category_id){
        global $db;
        $query = "select * from categories where categoryID = $category_id";
        $category = $db->query($query);
        $category = $category->fetch();
        $category_name = $category['categoryName'];
        return $category_name;
    }
?>