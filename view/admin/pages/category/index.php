<div class="content-wrapper" style="min-height: 1203.6px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách danh mục</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Danh mục</a></li>
                        <li class="breadcrumb-item active">Admin</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="col-12">
            <?php
            if (!empty($_SESSION['create_category_success'])) {
                echo '
                    <div class="alert alert-success alert-dismissable">
                    <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <strong>Thành công!</strong> Thêm mới thành công<br>
                    </div>
                    ';
                unset($_SESSION['create_category_success']);
            } else if (!empty($_SESSION['edit_category_success'])) {
                echo '
                    <div class="alert alert-success alert-dismissable">
                    <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <strong>Thành công!</strong> Sửa thành công<br>
                    </div>
                    ';
                unset($_SESSION['edit_category_success']);
            } else if (!empty($_SESSION['delete_category_success'])) {
                echo '
                    <div class="alert alert-success alert-dismissable">
                    <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <strong>Thành công!</strong> Xóa thành công<br>
                    </div>
                    ';
                unset($_SESSION['delete_category_success']);
            } else if (!empty($_SESSION['delete_category_error'])) {
                echo '
                    <div class="alert alert-danger alert-dismissable">
                    <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <strong>Lỗi!</strong> Xóa thất bại. Hãy thử lại sau<br>
                    </div>
                    ';
                unset($_SESSION['delete_category_error']);
            }
            ?>
            <div class="card">
                <!-- /.card-header -->
                <div class="card-header">
                    <div class="row">
                        <div class="col-2">
                            <a href="<?php echo SCRIPT_ROOT ?>/admin/category/create" class="btn btn-success">
                                <i class="fas fa-plus-circle"></i>
                                Thêm mới
                            </a>
                        </div>
                        <div class="col-10">
                            <form method="get">
                                <div class="input-group rounded">
                                    <!-- <input type="hidden" name="page_no" value="<?php if (isset($page_no)) echo $page_no ?>"> -->
                                    <input type="search" name="q" class="form-control rounded" value="<?php if (isset($q)) echo $q ?>" placeholder="Tìm kiếm">
                                    <button class="input-group-text border-0" id="search-addon" type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"></div>
                            <div class="col-sm-12 col-md-6"></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                    <thead>
                                        <tr role="row">
                                            <th>Danh mục</th>
                                            <th style="text-align: center;">Đối tượng</th>
                                            <th style="text-align: center;">Danh mục cha</th>
                                            <th style="text-align: center;">Sửa</th>
                                            <th style="text-align: center;">Xóa</th>
                                            <th style="text-align: center;">Hiển thị</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($categories as $category) { ?>
                                            <tr role="row" class="odd">
                                                <td><?= $category['name'] ?></td>
                                                <td style="text-align: center;" class="object<?= $category['id'] ?>"></td>
                                                <td style="text-align: center;" class="parentCategory<?= $category['id'] ?>"></td>
                                                <td style="text-align: center;">
                                                    <span class="badge bg-primary">
                                                        <a href="<?php echo SCRIPT_ROOT . '/admin/category/edit/' . $category['id'] ?>">
                                                            <ion-icon name="create-outline"></ion-icon>
                                                        </a>
                                                    </span>
                                                </td>
                                                <td style="text-align: center;">
                                                    <span class="badge bg-danger">
                                                        <a href="<?php echo SCRIPT_ROOT . '/admin/category/delete/' . $category['id'] ?>" class="deleteCategory">
                                                            <ion-icon name="trash-outline"></ion-icon>
                                                        </a>
                                                    </span>
                                                </td>
                                                <td style="text-align: center;">
                                                    <span class="badge bg-success">
                                                        <a href="<?php echo SCRIPT_ROOT . '/danh-muc/' . $category['slug'] ?>" target="_blank">
                                                            <ion-icon name="newspaper-outline"></ion-icon>
                                                        </a>
                                                    </span>
                                                </td>
                                                <script>
                                                    var object<?= $category['id'] . 'Element' ?> = document.querySelector('.object<?= $category['id'] ?>');
                                                    var parentCategory<?= $category['id'] . 'Element' ?> = document.querySelector('.parentCategory<?= $category['id'] ?>');
                                                    var htmls = parentCategoriesJson.map((object, index) => {
                                                        return object.objectCode == <?= $category['for_object'] ?> ? `${object.objectName}` : '';
                                                    });
                                                    object<?= $category['id'] . 'Element' ?>.innerHTML = htmls.join('');
                                                    var htmls = parentCategoriesJson.map((object, index) => {
                                                        return object.objectCode == <?= $category['for_object'] ?> ? object.objectParentCategory.map((category, c_index) => {
                                                            return category.parentCategoryId == <?= $category['parent_category'] ?> ? `${category.parentCategoryName}` : '';
                                                        }).join('') : '';
                                                    });
                                                    parentCategory<?= $category['id'] . 'Element' ?>.innerHTML = htmls.join('');
                                                </script>
                                            </tr>
                                        <?php }
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Danh mục</th>
                                            <th style="text-align: center;">Đối tượng</th>
                                            <th style="text-align: center;">Danh mục cha</th>
                                            <th style="text-align: center;">Sửa</th>
                                            <th style="text-align: center;">Xóa</th>
                                            <th style="text-align: center;">Hiển thị</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card-footer clearfix">
                    <?php
                    if ($total_pages > 1) {
                        if (isset($q)) {
                            echo '<ul class="pagination pagination-sm m-0 float-right">';
                            echo '<li class="page-item"><a class="page-link" href="' . SCRIPT_ROOT . '/admin/category?page_no=1&q=' . $q . '">«</a></li>';
                            for ($i = 1; $i <= $total_pages; $i++) {
                                echo '<li class="page-item';
                                if ($page_no == $i)
                                    echo ' active';
                                echo '"><a class="page-link" href="' . SCRIPT_ROOT . '/admin/category?page_no=' . $i . '&q=' . $q . '">' . $i . '</a></li>';
                            }
                            echo '<li class="page-item"><a class="page-link" href="' . SCRIPT_ROOT . '/admin/category?page_no=' . $total_pages . '&q=' . $q . '">»</a></li>';
                            echo '</ul>';
                        } else {
                            echo '<ul class="pagination pagination-sm m-0 float-right">';
                            echo '<li class="page-item"><a class="page-link" href="' . SCRIPT_ROOT . '/admin/category?page_no=1">«</a></li>';
                            for ($i = 1; $i <= $total_pages; $i++) {
                                echo '<li class="page-item';
                                if ($page_no == $i)
                                    echo ' active';
                                echo '"><a class="page-link" href="' . SCRIPT_ROOT . '/admin/category?page_no=' . $i . '">' . $i . '</a></li>';
                            }
                            echo '<li class="page-item"><a class="page-link" href="' . SCRIPT_ROOT . '/admin/category?page_no=' . $total_pages . '">»</a></li>';
                            echo '</ul>';
                        }
                    }
                    ?>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
    <section>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    document.title = "Danh sách danh mục | IVY moda";
</script>
<script>
    var deleteElements = document.querySelectorAll('.deleteCategory');
    for (var i = 0; i < deleteElements.length; i++) {
        deleteElements[i].addEventListener('click', function(e) {
        if (!confirm("Bạn có chắc chắn muốn xóa?")) {
            e.preventDefault();
        }
    });
}
</script>