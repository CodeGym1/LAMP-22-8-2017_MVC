
<?php
    $dsn='mysql:host=localhost;dbname=my_guiter_shop1';
    $username='root';
    $password= '';
    try{
        $db = new PDO($dsn, $username, $password);
    }catch (PDOException $e){
        $error_message=$e->getMessage();
        echo "loi ket noi database";
        exit();
    }
?>