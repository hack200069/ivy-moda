<div class="content-wrapper" style="min-height: 353px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Sửa tin tức</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Tin tức</a></li>
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
                    if (!empty($_SESSION['edit_news_error'])) {
                        echo '<div class="alert alert-danger alert-dismissable">
                            <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close" style="color:#fff; text-decoration: none;">×</a>';
                        if (isset($_SESSION['edit_news_error']['title'])) {
                            echo '<strong>Lỗi!</strong> ' . $_SESSION['edit_news_error']['title'] . '<br>';
                            unset($_SESSION['edit_news_error']['title']);
                        }
                        if (isset($_SESSION['edit_news_error']['detail'])) {
                            echo '<strong>Lỗi!</strong> ' . $_SESSION['edit_news_error']['detail'] . '<br>';
                            unset($_SESSION['edit_news_error']['detail']);
                        }
                        if (isset($_SESSION['edit_news_error']['category'])) {
                            echo '<strong>Lỗi!</strong> ' . $_SESSION['edit_news_error']['category'] . '<br>';
                            unset($_SESSION['edit_news_error']['category']);
                        }
                        if (isset($_SESSION['edit_news_error']['sthg_wrong'])) {
                            echo '<strong>Lỗi!</strong> ' . $_SESSION['edit_news_error']['sthg_wrong'] . '<br>';
                            unset($_SESSION['edit_news_error']['sthg_wrong']);
                        }
                        unset($_SESSION['edit_news_error']);
                        echo '</div>';
                    }
                    ?>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Nội dung tin tức</h3>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data" method="post">
                            <input type="hidden" id="id" name="id" value="<?= $current_news['id'] ?>">
                                <div class="form-group">
                                    <label for="title" class="control-label col-md-2">Tiêu đề</label>
                                    <input type="text" id="title" name="title" class="form-control" required value="<?= $current_news['title'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="image" class="control-label col-md-6">Ảnh(Chọn ảnh nếu muốn thay đổi ảnh tin tức)</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input" id="image">
                                            <label class="custom-file-label" for="images">Chọn ảnh</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="category" class="control-label col-md-2">Danh mục</label>
                                    <select name="category" id="category" class="form-control" required>
                                        <option value="Sự kiện thời trang" <?= $current_news['category'] == "Sự kiện thời trang" ? "selected" : "" ?>>Sự kiện thời trang</option>
                                        <option value="Blog chia sẻ" <?= $current_news['category'] == "Blog chia sẻ" ? "selected" : "" ?>>Blog chia sẻ</option>
                                        <option value="Tin nội bộ" <?= $current_news['category'] == "Tin nội bộ" ? "selected" : "" ?>>Tin nội bộ</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2" for="detail">Nội dung</label>
                                    <textarea id="detail" required name="detail" class="textarea" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?= $current_news['detail'] ?></textarea>
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
                    <a href="<?php echo SCRIPT_ROOT ?>/admin/news" class="btn btn-secondary">Trở về danh sách</a>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    document.title = "Sửa tin tức | IVY moda";
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