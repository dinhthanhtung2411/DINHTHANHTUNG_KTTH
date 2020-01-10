<?php

if (isset($message)) {
    echo "<p class='alert-info'>$message</p>";
}
?>

<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Thêm mới khách hàng</h1>
        </div>
        <div class="col-12">
            <form method="post">
                <div class="form-group">
                    <label>Tên sản phẩm</label>
                    <input type="text" class="form-control" name="name"  required>
                </div>
                <div class="form-group">
                    <label>Loai hàng</label>
                    <input type="text" class="form-control" name="line" required>
                </div>
                <div class="form-group">
                    <label>Gia</label>
                    <input type="number" class="form-control" name="price" required>
                </div>
                <div class="form-group">
                    <label>So luong</label>
                    <input type="number" class="form-control" name="number"  required>
                </div>
                <div class="form-group">
                    <label>Ngay tao</label>
                    <input type="date" class="form-control" name="date"  required>
                </div>  <div class="form-group">
                    <label>Mo ta ve mat hang</label>
                    <input type="text" class="form-control" name="descriptiom"  required>
                </div>
                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
</div>