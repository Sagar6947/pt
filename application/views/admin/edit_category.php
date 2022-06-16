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
                            <?php foreach ($categoryInfo as $row) {
                            ?>

                                <form action="<?php echo base_url() . 'admin_Dashboard/editcategory' ?>" method="post" enctype="multipart/form-data">
                                    <div class="row">

                                        <div class="col-md-12 col-lg-12 col-xl-12">
                                            <div class="">
                                                <input class="form-control" type="hidden" name="id" value="<?= $row->category_id; ?>">


                                                <div class="form-group">
                                                    <label class="">Category Name</label>
                                                    <input class="form-control" type="text" name="cat_name" value="<?= $row->cat_name; ?>">
                                                </div>
                                               


                                                <button name="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <?php $this->load->view('admin/template/footer'); ?>
                <!-- partial -->
            </div>
    </div>
    </div>

    <!-- page-body-wrapper ends -->
    </div>

    </div>
    </div>
    <?php $this->load->view('admin/template/footer_link'); ?>
</body>

</html>