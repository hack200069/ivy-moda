<div class="content-wrapper" style="min-height: 353px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Sửa danh mục</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Danh mục</a></li>
                        <li class="breadcrumb-item active">Admin</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <?php
                    if (!empty($_SESSION['edit_product_error'])) {
                        echo '<div class="alert alert-danger alert-dismissable">
                        <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close" style="color:#fff; text-decoration: none;">×</a>';
                        if (isset($_SESSION['edit_product_error']['name'])) {
                            echo '<strong>Lỗi!</strong> ' . $_SESSION['edit_product_error']['name'] . '<br>';
                            unset($_SESSION['edit_product_error']['name']);
                        }
                        if (isset($_SESSION['edit_product_error']['price'])) {
                            echo '<strong>Lỗi!</strong> ' . $_SESSION['edit_product_error']['price'] . '<br>';
                            unset($_SESSION['edit_product_error']['price']);
                        }
                        if (isset($_SESSION['edit_product_error']['quantity'])) {
                            echo '<strong>Lỗi!</strong> ' . $_SESSION['edit_product_error']['quantity'] . '<br>';
                            unset($_SESSION['edit_product_error']['quantity']);
                        }
                        if (isset($_SESSION['edit_product_error']['description'])) {
                            echo '<strong>Lỗi!</strong> ' . $_SESSION['edit_product_error']['description'] . '<br>';
                            unset($_SESSION['edit_product_error']['description']);
                        }
                        if (isset($_SESSION['edit_product_error']['images'])) {
                            echo '<strong>Lỗi!</strong> ' . $_SESSION['edit_product_error']['images'] . '<br>';
                            unset($_SESSION['edit_product_error']['images']);
                        }
                        if (isset($_SESSION['edit_product_error']['categories'])) {
                            echo '<strong>Lỗi!</strong> ' . $_SESSION['edit_product_error']['categories'] . '<br>';
                            unset($_SESSION['edit_product_error']['categories']);
                        }
                        if (isset($_SESSION['edit_product_error']['sthg_wrong'])) {
                            echo '<strong>Lỗi!</strong> ' . $_SESSION['edit_product_error']['sthg_wrong'] . '<br>';
                            unset($_SESSION['edit_product_error']['sthg_wrong']);
                        }
                        unset($_SESSION['edit_product_error']);
                        echo '</div>';
                    }
                    ?>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Thông tin sản phẩm</h3>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data" method="post">
                                <input type="hidden" id="id" name="id" value="<?= $current_product['id'] ?>">
                                <div class="form-group">
                                    <label for="name" class="control-label col-md-2">Tên sản phẩm</label>
                                    <input type="text" id="name" name="name" class="form-control" required value="<?= $current_product['name'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="price" class="control-label col-md-2">Giá bán</label>
                                    <input type="number" id="price" name="price" class="form-control" value="<?= $current_product['price'] ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="quantity" class="control-label col-md-2">Số lượng</label>
                                    <input type="number" id="quantity" name="quantity" class="form-control" value="<?= $current_product['quantity'] ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="images" class="control-label col-md-12">Ảnh minh họa(Chọn ảnh nếu muốn thay đổi ảnh minh họa sản phẩm)</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="images[]" class="custom-file-input" id="images" multiple="multiple">
                                            <label class="custom-file-label" for="images">Chọn ảnh</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="categories" class="control-label col-md-2">Dành cho</label>
                                    <select name="categories[]" id="categories" class="form-control" multiple="multiple" required>
                                        <?php 
                                            foreach($categories as $category){
                                                echo '<option value="'.$category['id'].'"';
                                                foreach($product_categories as $pc){
                                                    if($pc['category_id'] == $category['id']){
                                                        echo 'selected';
                                                        break;
                                                    }
                                                }
                                                echo'>'.$category['name'].'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2 checkbox-inline" for="discount_fifty_percent">Giảm giá 50%
                                        <input type="checkbox" id="discount_fifty_percent" name="discount_fifty_percent" <?= $current_product['discount_fifty_percent'] == 0 ? 'checked' : '' ?> class="form-control">
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2" for="description">Mô tả</label>
                                    <textarea id="description" required name="description" class="textarea" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?= $current_product['description'] ?></textarea>
                                </div>
                                <button class="btn btn-success" type="submit" id="submit">Lưu</button>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="<?php echo SCRIPT_ROOT ?>/admin/product" class="btn btn-secondary">Trở về danh sách</a>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    document.title = "Sửa sản phẩm | IVY moda";
</script>
<script src="<?= SCRIPT_ROOT ?>/public/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script>
    bsCustomFileInput.init();
</script>
<script>
    var allowed = [".jpg", ".png", ".gif", ".jpeg", ".jfif"];
    var regexImage = new RegExp(
        "([a-zA-Z0-9s_\\.-:()])+(" + allowed.join("|") + ")$"
    );
    var submitButtonElement = document.querySelector('#submit');
    submitButtonElement.onclick = function(e) {
        var files = document.getElementById("images").files;
        for (var i = 0; i < files.length; i++) {
            if (!regexImage.test(files[i].name.toLowerCase())) {
                e.preventDefault();
                break;
            }
        }
        if (i != files.length) {
            alert('Định dạng ảnh không phù hợp');
        }
    }
</script>