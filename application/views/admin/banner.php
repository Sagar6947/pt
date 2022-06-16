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
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="">Banner Image</label>
                                        <input class="form-control" required="" type="file" name="b_img" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="">Banner Title</label>
                                        <input class="form-control" required="" type="text" name="b_title" />
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="">Banner Particulars</label>
                                        <input class="form-control" required="" type="text" name="b_description" />
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

            <div class="card">
                <div class="card-header">

                    <ul class="actions top-right">
                        <li>
                            <a href="javascript:void(0)" data-q-action="card-expand"><i class="icon dripicons-expand-2"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="bs4-table" class="table table-striped table-bordered" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>S No</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Particulars</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <?php
                            $i = 1;
                            if (!empty($banner)) {
                                foreach ($banner as $row) {
                            ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td>
                                                <img src="<?php echo base_url() . 'uploads/banner/' . $row['b_img']; ?>" style="height: 200px;" />
                                            </td>

                                            <td>
                                                <?php echo wordwrap($row['b_title'], 120, '<br>'); ?><br>
                                            </td>

                                            <td>
                                                <?php echo wordwrap($row['b_description'], 120, '<br>'); ?>
                                            </td>

                                            <td>
                                                <a href="<?php echo base_url() . 'admin_Dashboard/deletebanner/' . $row['bid']; ?>" class="btn btn-danger delete"><i class="fas fa-trash-alt"></i></a>
                                            </td>

                                        </tr>
                                    </tbody>
                            <?php
                                    $i++;
                                }
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
    </div>
    </section>


    <!-- container-scroller -->
    <?php $this->load->view('admin/template/footer_link'); ?>
</body>

</html>