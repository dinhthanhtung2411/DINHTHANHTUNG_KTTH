<h1>Bạn chắc chắn muốn xóa khách hàng này?</h1>
<h3><?php echo $product->getProductName(); ?></h3>
<form action="./index.php?page=delete" method="post">
    <input type="hidden" name="id" value="<?php echo $product->getId(); ?>"/>
    <div class="form-group">
        <input type="submit" value="Delete" class="btn btn-danger"/>
        <a class="btn btn-default" href="index.php">Cancel</a>
    </div>
</form>
<h2>Danh sach san pham</h2>
<a href="./index.php?page=add">Thêm mới</a>
<table class="table">
    <thead>
    <tr>
        <th>Product name</th>
        <th>Product line</th>
        <th>Product price</th>
        <th>Product number</th>
        <th>Date create</th>
        <th>Description of the item</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?php echo $product->geProductName() ?></td>
        <td><?php echo $product->getProductLine() ?></td>
        <td><?php echo $product->getProductPrice() ?></td>
        <td><?php echo $product->getProductNumber() ?></td>
        <td><?php echo $product->getDateCreated() ?></td>
        <td><?php echo $product->getDescriptionOfTheItem() ?></td>
    </tr>
    </tbody>
</table>