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
                    if (!empty($_SESSION['edit_category_error'])) {
                        echo '<div class="alert alert-danger alert-dismissable">
                            <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close" style="color:#fff; text-decoration: none;">×</a>';
                        if (isset($_SESSION['edit_category_error']['name'])) {
                            echo '<strong>Lỗi!</strong> ' . $_SESSION['edit_category_error']['name'] . '<br>';
                            unset($_SESSION['edit_category_error']['name']);
                        }
                        if (isset($_SESSION['edit_category_error']['for_object'])) {
                            echo '<strong>Lỗi!</strong> ' . $_SESSION['edit_category_error']['for_object'] . '<br>';
                            unset($_SESSION['edit_category_error']['for_object']);
                        }
                        if (isset($_SESSION['edit_category_error']['parent_category'])) {
                            echo '<strong>Lỗi!</strong> ' . $_SESSION['edit_category_error']['parent_category'] . '<br>';
                            unset($_SESSION['edit_category_error']['parent_category']);
                        }
                        if (isset($_SESSION['edit_category_error']['sthg_wrong'])) {
                            echo '<strong>Lỗi!</strong> ' . $_SESSION['edit_category_error']['sthg_wrong'] . '<br>';
                            unset($_SESSION['edit_category_error']['sthg_wrong']);
                        }
                        unset($_SESSION['edit_category_error']);
                        echo '</div>';
                    }
                    ?>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Thông tin danh mục</h3>
                        </div>
                        <div class="card-body">
                            <form method="post">
                                <input type="hidden" id="id" name="id" value="<?= $current_category['id'] ?>">
                                <div class="form-group">
                                    <label for="name" class="control-label col-md-2">Tên danh mục</label>
                                    <input type="text" id="name" name="name" class="form-control" required value="<?= $current_category['name'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="for_object" class="control-label col-md-2">Dành cho</label>
                                    <select name="for_object" id="for_object" class="form-control" required>
                                        <option value="">Chọn đối tượng</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="parent_category" class="control-label col-md-2" required>Danh mục cha</label>
                                    <select name="parent_category" id="parent_category" class="form-control">
                                        <option value="">Chọn danh mục cha</option>
                                    </select>
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
                    <a href="<?php echo SCRIPT_ROOT ?>/admin/category" class="btn btn-secondary">Trở về danh sách</a>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    document.title = "Sửa danh mục | IVY moda";
</script>
<script>
const forObjectElement = document.querySelector('#for_object');
    const parentCategoryElement = document.querySelector('#parent_category');
    const objectCode = <?= $current_category['for_object'] ?>;
    const parentCategoryCode = <?= $current_category['parent_category'] ?>;
    const parentCategory = {
        handleEvents: function() {
            const _this = this;

            forObjectElement.onchange = function() {
                _this.fetchParentCategory(undefined, forObjectElement.value);
            }
        },
        fetchForObject: function(object_code) {
            const htmls = parentCategoriesJson.map((object, index) => {
                return `<option value="${object.objectCode}" ${ object.objectCode == object_code ? 'selected' : '' }>${object.objectName}</option>`
            });
            forObjectElement.innerHTML = `<option value="">Chọn đối tượng</option>` + htmls.join('');
        },
        fetchParentCategory: function(parent_category_code, object_code) {
            const htmls = parentCategoriesJson.map((object, index) => {
                return object.objectCode == object_code ? object.objectParentCategory.map((category, c_index) => {
                    return `<option value="${category.parentCategoryId}" ${ category.parentCategoryId == parent_category_code ? 'selected' : '' }>${category.parentCategoryName}</option>`
                }).join('') : '';
            });
            parentCategoryElement.innerHTML = `<option value="">Chọn danh mục cha</option>` + htmls.join('');
        },
        start: function() {
            this.fetchForObject(undefined);
            this.handleEvents();
            if (objectCode && parentCategoryCode) {
                this.fetchForObject(objectCode);
                this.fetchParentCategory(parentCategoryCode, objectCode);
            }
        }
    };
    parentCategory.start();
</script>