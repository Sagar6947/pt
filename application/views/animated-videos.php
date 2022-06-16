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


    <section class="inner_banner ani_wave">
        <div class="container">
            <h1>Animated <span>Videos</span></h1>
            <ul class="breadcrum">
                <li><a href="<?= base_url() ?>">Home</a></li>
                <li>Educational Videos</li>
            </ul>
        </div>
    </section>

    <?php
    if ($cate != '') {
        foreach ($cate as $row) {
    ?>

            <section class="team_sec team_sec_4 padding-bottom">
                <div class="container">
                    <div class="vid-heading">
                        <h2 class="global_title left pb"><?= $row['cat_name']; ?></h2>
                        <a href="<?php echo base_url() . 'viewmore/' . $row['cat_name'] . "/" . $row['category_id'] ?>" class="join_btn buy_btn radial-out">View More</a>
                    </div>
                    <div class="inner">
                        <div class="owl-carousel team_slider">
                            <?php

                            $video_link =   getRowById('tbl_videos', 'category_id', $row['category_id']);

                            if ($video_link != '') {
                                foreach ($video_link as $link) {

                            ?>
                                    <div class="item">
                                        <video width="300" height="200" controls>
                                            <source src="<?= str_replace(
                                                                "https://www.dropbox.com/s/",
                                                                "https://dl.dropboxusercontent.com/s/",
                                                                $link['video_link']
                                                            ) ?>" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen allow="autoplay">
                                        </video>

                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </section>

    <?php

        }
    }
    ?>


    <?php include 'include/footer.php' ?>

    <?php include 'include/footerlink.php' ?>
    <script type="text/javascript" src="https://www.dropbox.com/static/api/2/dropins.js" id="dropboxjs" data-app-key="YOUR_APP_KEY"></script>
    <script>
        document.getElementById('video-player').controls = false;
    </script>
</body>

</html>