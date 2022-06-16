<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('admin/template/header_link'); ?>

<body class="sidebar-fixed">
    <div id="app">
        <?php $this->load->view('admin/template/header'); ?>

        <?php $this->load->view('admin/template/sidebar'); ?>
        <!--START PAGE HEADER -->
        <header class="page-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h1><?= $title ?></h1>
                </div>

                <ul class="actions top-right">
                    <li>
                        <button onclick="history.back()" class="btn btn-dark"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>

                    </li>
                </ul>

            </div>
        </header>

        <section class="page-content container-fluid">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <?php foreach ($productInfo as $row) {
                                // print_r($row);
                            ?>

                                <form action="<?php echo base_url() . 'admin_Dashboard/editproductdetails' ?>" method="post" enctype="multipart/form-data">
                                    <div class="row">

                                        <div class="col-md-12 col-lg-12 col-xl-12">
                                            <div class="">
                                                <input class="form-control" type="hidden" name="product_id" value="<?= $row['product_id']; ?>">
                                                <div class="form-group col-md-12">
                                                    <label class="">Product Category Name</label>
                                                    <select class="form-control" name="category_id" id="category_id">
                                                        <option>Select Product Category</option>
                                                        <?php foreach ($category as $rows) {
                                                        ?>
                                                            <option value="<?= $rows['category_id']; ?>" <?= (($rows['category_id'] == $row['category_id']) ? 'selected' : '') ?>><?= $rows['cat_name']; ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <label class="">Title</label>
                                                    <input class="form-control" type="text" name="title" value="<?= $row['title']; ?>">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label class="">Video Link</label>
                                                    <input class="form-control" type="text" name="video_link" value="<?= $row['video_link']; ?>">
                                                </div>

                                               

                                               
                                                <!--<div class="form-group col-md-4 col-md-4">-->
                                                <!--<label class="">Length</label>-->
                                                <!--<select class="form-control" name="length" id="length">-->
                                                <!--    <option>Select Length</option>-->
                                                   
                                            <!--    </select>-->
                                            <!--</div>-->
                                            <!--<div class="form-group col-md-4 col-md-4">-->
                                            <!--    <label class="">Fabric</label>-->
                                            <!--    <select class="form-control" name="fabric" id="fabric">-->
                                            <!--        <option>Select fabric</option>-->
                                                    <?php 
                                                    // foreach ($fabric as $data) {
                                                    ?>
                                                        <!--<option value="<?= $data['id']; ?>" <?= (($data['id'] == $row['fabric'])? 'selected':'') ?>><?= $data['fabric']; ?></option>-->
                                                    <?php
                                                    // }
                                                    ?>
                                            <!--    </select>-->
                                            <!--</div>-->
                                            <!--<div class="form-group col-md-4 col-md-4">-->
                                            <!--    <label class="">Pattern</label>-->
                                            <!--    <select class="form-control" name="pattern" id="pattern">-->
                                            <!--        <option>Select pattern</option>-->
                                                    
                                            <!--    </select>-->
                                            <!--</div>-->
                                    




                                                <button type="submit" class="btn btn-light">Update</button>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
        </section>

    </div>
    <!-- container-scroller -->
    <?php $this->load->view('admin/template/footer_link'); ?>
    <script>
        $('#category_id').change(function() {
            var category_id = $('#category_id').val();
            console.log(category_id);
            $.ajax({
                method: "POST",
                url: '<?= base_url('admin_Dashboard/get_subcategory') ?>',
                data: {
                    category_id: category_id
                },
                success: function(response) {
                    $('#sub_category_id').html(response);
                }
            });
        });
    </script>
</body>

</html>