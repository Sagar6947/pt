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

                            <form action="<?php echo base_url('admin_Dashboard/blogsadd') ?>" method="post" enctype="multipart/form-data">
                                <div class="row">

                                    <div class="col-md-12 col-lg-12 col-xl-12">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label class="">Title</label>
                                                <input class="form-control" required="" type="text" name="name" required>
                                            </div>

                                            <div class="col-sm-6">
                                                <label class="">Image</label>
                                                <div class="pos-relative">
                                                    <input class="form-control pd-r-80" required="" type="file" name="image">
                                                </div>
                                            </div>
                                            

                                           
                                            <div class="col-sm-12">
                                                <label class="">Description</label>
                                                <div class="pos-relative">
                                                <textarea class="form-control" name="intro" ></textarea>
                                                </div>
                                            </div>

                                          
                                        </div>
                                        <br>
                                        <button  class="btn btn-primary">Submit</button>
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