<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <?php include 'include/headerlink.php' ?>
</head>

<body>

    <?php include 'include/header.php' ?>



    <section class="blog_detail" id="overlay-2">
        <div class="container">
            <div class="row margint">
                <div class="col-lg-8 col-md-12">
                    <div class="blog-area">
                        <h6><?= $details[0]['name'] ?> </h6>
                        <div class="content text-center">
                        <img src="<?= base_url(); ?>uploads/blogs/<?= $details[0]['image']; ?>" alt="" class="blog-img">
                            <p class="desc">
                            <?= $details[0]['intro'] ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="blog-list">
                        <h5>All Blogs</h5>

                        <?php
                                        $i = 0;
                                        if (!empty($bloglist)) {
                                        foreach ($bloglist as $row) {
                                            $i = $i + 1;
                                        ?>
                        <div class="list-box">
                        <img src="<?= base_url(); ?>uploads/blogs/<?= $row['image']; ?>" alt="<?= $row['name']; ?>">
                            <a href="<?php echo base_url() . 'blogdetails/' . $row['id'] . "/" . url_title($row['name']); ?>""><h6><?= $row['name']; ?></h6></a>
                        </div>
                        <?php

                    }
                                    }
                                        ?>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include 'include/footer.php' ?>

    <?php include 'include/footerlink.php' ?>
    <script>
        document.getElementById('video-player').controls = false
    </script>
</body>

</html>