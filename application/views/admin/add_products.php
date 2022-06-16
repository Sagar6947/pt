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

                            <form action="<?php echo base_url() . 'admin_Dashboard/addproducts' ?>" method="post" enctype="multipart/form-data">
                                <div class="row">

                                    <div class="col-md-12 col-lg-12 col-xl-12">
                                        <div class="row">

                                        <div class="form-group col-md-6">
                                                <label class=""> title</label>
                                                <input class="form-control" required="" type="text" name="title">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label class="">Product Category Name</label>
                                                <select class="form-control" name="category_id" id="category_id">
                                                    <option>Select Product Category</option>
                                                    <?php foreach ($category as $row) {
                                                    ?>
                                                        <option value="<?= $row['category_id']; ?>"><?= $row['cat_name']; ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-12">
                                                <label class="">Video Link</label>
                                                <input class="form-control" required="" type="text" name="video_link">
                                            </div>


                                            <div class="form-group col-md-12">

                                                <button type="submit" class="btn  btn-light ">Submit</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </section>
    </div>
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