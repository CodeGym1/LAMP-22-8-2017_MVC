<?php
    include '../view/header.php';
?>

<div id="main">
    <h1> Product List</h1>
    <div id="sidebar">
        <h2>categories</h2>
        <ul class="nav">
            <?php foreach ($categories as $category):?>
            <li>
                <a href="?category_id=<?php echo $category['categoryID'];?>">
                    <?php echo $category ['categoryName'];?>
                </a>
            </li>
            <?php endforeach;?>
        </ul>
    </div>
    <div id="content">
        <h2><?php echo $category_name; ?></h2>
        <table>
            <tr>
                <th>code</th>
                <th>name</th>
                <th>Price</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($products as $product):?>
            <tr>
                <td><?php echo $product ['productCode']; ?></td>
                <td><?php echo $product ['productName']; ?></td>
                <td><?php echo $product ['listPrice']; ?></td>
                <td>
<!--                    <form action="." method="post">-->
<!--                        <input type="hidden" name="action" value="delete_product"/>-->
<!--                        <input type="hidden" name="product_id" value=" --><?php //echo $product['productID'];?><!--"/>-->
<!--                        <input type="hidden" name="category_id" value=" --><?php //echo $product['categoryID'];?><!--"/>-->
<!--                        <input type="submit" value="Delete"/>-->
<!--                    </form>-->
                    <a href="?action=delete_product&product_id=<?=$product['productID']?>">Xoa</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p> <a href="?action=show_add_form"> Add product</a></p>
    </div>
</div>
<?php include '../view/footer.php'; ?>
