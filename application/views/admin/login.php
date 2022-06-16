<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title ?></title>
    <?php $this->load->view('admin/template/header_link'); ?>
    <!-- <link rel="shortcut icon" href="<?= $favicon ?>" /> -->
</head>

<body style="background-image: url('<?= base_url(); ?>assets/bg.jpg');">
    <div class="container">
        <form class="sign-in-form" method="POST" action="<?php echo base_url() . 'admin/adminlogin'; ?>">
            <div class="card">
                <div class="card-body">
                    <a href="<?= base_url(); ?>" class="brand text-center d-block m-b-20">
                        <img src="<?= base_url(); ?>assets/admin/logo.webp" alt="Purle Turtle Logo" class="lheight" />
                    </a>
                    <h5 class="sign-in-heading text-center m-b-20">Sign in to your account</h5>
                    <?php if ($this->session->userdata('login_error') != '') {
                    ?>
                        <div class="alert alert-danger">
                            <span><?= $this->session->userdata('login_error'); ?></span>
                        </div>
                    <?php

                    }
                    $this->session->unset_userdata('login_error');;
                    ?>
                    <div class="form-group">
                        <label for="inputEmail" class="sr-only">Username</label>
                        <input type="text" class="form-control" name="username" id="" placeholder="Username">
                    </div>

                    <div class="form-group">
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="checkbox m-b-10 m-t-20">


                    </div>
                    <button class="btn btn-primary btn-rounded btn-floating btn-lg btn-block" type="submit">Sign In</button>
                    <p class="text-muted m-t-25 m-b-0 p-0"></p>
                </div>

            </div>
        </form>
    </div>
    <?php $this->load->view('admin/template/footer_link'); ?>
</body>

</html>