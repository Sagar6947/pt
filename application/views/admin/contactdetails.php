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
                    <h1><?= $title ?> </h1>
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
                <div class="col-md-12   mb-3 ">
                    <?php if ($msg = $this->session->flashdata('msg')) :
                        $msg_class = $this->session->flashdata('msg_class') ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="alert  <?= $msg_class; ?>"><?= $msg; ?></div>
                            </div>
                        </div>
                    <?php
                        $this->session->unset_userdata('msg');
                    endif; ?>
                    <div class="card">
                        <div class="card-body">
                            <?php foreach ($contactdetails as $row) {
                            ?>

                                <form action="<?php echo base_url() . 'admin_Dashboard/editcontactdetils' ?>" method="post" enctype="multipart/form-data">
                                    <div class="row">

                                        <div class="col-md-12 col-lg-12 col-xl-12">
                                           <div class="form-group">
                                                    <label class="">First Contact</label>
                                                    <input class="form-control" type="text" name="f_contact" value="<?= $row['f_contact'] ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label class="">Second Contact</label>
                                                    <input class="form-control" type="text" name="s_contact" value="<?= $row['s_contact'] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label class="">First Email</label>
                                                    <input class="form-control" type="text" name="f_email" value="<?= $row['f_email'] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label class="">Second Email</label>
                                                    <input class="form-control" type="text" name="s_email" value="<?= $row['s_email'] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label class="">Address</label>
                                                    <input class="form-control" type="text" name="address" value="<?= $row['address'] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label class="">Facebook link</label>
                                                    <input class="form-control" type="text" name="facebook" value="<?= $row['facebook'] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label class="">Instagram link</label>
                                                    <input class="form-control" type="text" name="instagram" value="<?= $row['instagram'] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label class="">Youtube link</label>
                                                    <input class="form-control" type="text" name="youtube" value="<?= $row['youtube'] ?>">
                                                </div>
                                                <button type="submit" class="btn btn-primary">Update</button>
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
        </section>
        <?php $this->load->view('admin/template/footer_link'); ?>
</body>

</html>