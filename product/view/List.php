<h2>Danh sách khách hàng</h2>
<a href="./index.php?page=add">Thêm mới</a>
<table class="table">
    <thead>
    <tr>
        <th>STT</th>
        <th>Product name</th>
        <th>Product line</th>
        <th>Product price</th>
        <th>Product number</th>
        <th>Date created</th>
        <th>Get description of the item()</th>
    </tr>
    </thead>
    <tbody>

    <?php
foreach ($products as $key => $product):?>
            <tr>
    <td><?php echo ++$key  ?></td>
    <td><?php echo $product->getProductName()?></td>
    <td><?php echo $product->getProductLine()  ?></td>
    <td><?php echo $product->getProductPrice() ?></td>
    <td><?php echo $product->getProductNumber() ?></td>
    <td><?php echo $product->getDateCreated() ?></td>
    <td><?php echo $product->getDescriptionOfTheItem() ?></td>
                <td><a href="./index.php?page=delete&id=<?php echo $product->getId(); ?>"><button>Delete</button></a></td>
    <?php endforeach;?>
    </tbody>
</table>


