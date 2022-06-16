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
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">

                            <form action="<?php echo base_url() . 'admin_Dashboard/addvideos' ?>" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="">Title</label>
                                        <input class="form-control" type="text" name="title" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="">Category</label>
                                        <select class="form-control" name="category">

                                            <option value="">Select Category</option>



                                            <?php

                                            if ($video != '') {
                                                foreach ($video as $row) {
                                            ?>

                                                    <option value="<?= $row['video_id']  ?>"><?= $row['cat_name']  ?></option>

                                            <?php

                                                }
                                            }
                                            ?>

                                        </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="">Video Link</label>
                                        <input class="form-control" required="" type="text" name="video_link">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <button type="submit" class="btn  btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <?php $this->load->view('admin/template/footer_link'); ?>
</body>

</html>