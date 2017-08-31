<?php
    function get_products(){
        global $db;
        $query = 'select * from products order by productID';
        $products = $db->query($query);
        return $products;
    }
    function get_products_by_category($category_id){
        global $db;
        $query = "select * from products
                  where products.categoryID = '$category_id'
                  order by productID";
        $products = $db->query($query);
        return $products;
    }
    function get_product($product_id){
    global $db;
    $query ="select * from products
             where productID = '$product_id'";
    $product = $db->query($query);
    $product = $db->fetch();
    return $product;
    }
    function delete_product ($product_id){
        global $db;
        $query = "delete from products
                  WHERE productID = '$product_id'";
        $db ->exec($query );
    }
    function add_product($category_id, $code, $name, $price){
        global $db;
        $query = "insert into products (categoryID, productCode, productName, listPrice)
                  VALUES ('$category_id','$code', '$name', '$price')";
        $db ->exec($query);
    }
?>