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

                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="row">

                                    <div class="col-md-12 col-lg-12 col-xl-12">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label class="">Name</label>
                                                <input class="form-control" type="text" name="name" value="<?= $blog[0]['name']  ?>">
                                            </div>

                                            <div class="col-sm-6">
                                                <label class="">Select New Image</label>
                                                <div class="pos-relative">
                                                    <input class="form-control pd-r-80" type="file" name="img">
                                                    <input class="form-control pd-r-80" type="hidden" name="image" value="<?= $blog[0]['image'] ?>">
                                                    <img src="<?= base_url() ?>uploads/blogs/<?= $blog[0]['image'] ?>" width="100px" />
                                                </div>
                                            </div>
                                           
                                            <div class="col-sm-12">
                                                <label class="">Introduction</label>
                                                <div class="pos-relative">
                                                    <textarea class="form-control" name="intro" value=""><?= $blog[0]['intro']  ?></textarea>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <br>
                                        <button class="btn btn-primary">Submit</button>
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