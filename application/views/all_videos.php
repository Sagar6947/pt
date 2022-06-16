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
            <h1>all <span>Videos</span></h1>
            <ul class="breadcrum">
                <li><a href="<?= base_url() ?>">Home</a></li>
                <li>Animated Videos</li>
            </ul>
        </div>
    </section>

    <section class="team_sec team_sec_4 padding-bottom">
        <div class="container">
            <div class="inner vid-grid">

                <?php
                if (!empty($all_vid)) {
                    foreach ($all_vid as $row) {
                ?>
                        <div class="item">
                            <figure>
                                <iframe width="300" height="200" src="<?= str_replace(
                                                                            "https://www.youtube.com/watch?v=",
                                                                            "https://www.youtube.com/embed/",
                                                                            $row[0]['video_link']
                                                                        ) ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </figure>
                        </div>
                <?php
                    }
                }
                ?>
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