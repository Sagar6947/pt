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


  <section class="inner_banner">
			<div class="container">
				<h1>GALLERY</h1>
				<ul class="breadcrum">
					<li><a href="<?= base_url() ?>">Home</a></li>
					<li>Gallery</li>
				</ul>
			</div>
		</section>


    <section class="" style="margin-top:-35px; padding-bottom: 100px; background-color:#293462;">
        <div class="container">

        <h2 class="global_title" style="line-height: 30px !important; color: #fff; padding-top: 20px;">Gallery</h2>

            <div class="tabs">
                <ul class="tab-links">
                    <li class="active"><a href="#tab1">All</a></li>
                    <li><a href="#tab2">Our School</a></li>
                    <li><a href="#tab3">Activities</a></li>
                    <!-- <li><a href="#tab4">Standard Room</a></li>
                    <li><a href="#tab5">Partial View Room</a></li> -->
                </ul>

                <div class="gallery-tab-content">
                    <div id="tab1" class="tab active">
                        <img src="<?= base_url() ?>assets/img/footer-bg-mobile.jpg" alt="Gallery" />
                        <img src="<?= base_url() ?>assets/img/footer-bg-mobile.jpg" alt="Gallery" />
                        <img src="<?= base_url() ?>assets/img/footer-bg-mobile.jpg" alt="Gallery" />
                        <img src="<?= base_url() ?>assets/img/footer-bg-mobile.jpg" alt="Gallery" />
                        <img src="<?= base_url() ?>assets/img/footer-bg-mobile.jpg" alt="Gallery" />
                    </div>

                    <div id="tab2" class="tab">
                    <img src="<?= base_url() ?>assets/img/footer-bg-mobile.jpg" alt="Gallery" />
                        <img src="<?= base_url() ?>assets/img/footer-bg-mobile.jpg" alt="Gallery" />
                        <img src="<?= base_url() ?>assets/img/footer-bg-mobile.jpg" alt="Gallery" />
                        
                    </div>

                    <div id="tab3" class="tab">
                    <img src="<?= base_url() ?>assets/img/footer-bg-mobile.jpg" alt="Gallery" />
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