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


  <section class="inner_banner faqsbanner">
    <div class="container">
      <h1>FAQ</h1>
      <ul class="breadcrum">
        <li><a href="<?= base_url() ?>">Home</a></li>
        <li>Faq</li>
      </ul>
    </div>
  </section>



  <section class="faq2">



    <?php
    if (!empty($faq_title)) {
      foreach ($faq_title as $row) {
    ?>
        <div class="accordion">


          <h2 class="accordion__heading"><?= $row['title']; ?></h2>

          <?php

                $sub_cat = getRowById('faq_content', 'fcid', $row['fid']);

                if (!empty($sub_cat)) {
                  foreach ($sub_cat as $faqs) {
                ?>
          <div class="accordion__item">
            <button class="accordion__btn">
              <span class="accordion__caption"><i class="far fa-lightbulb"></i><?= $faqs['question']; ?></span>
              <span class="accordion__icon"><i class="fa fa-plus"></i></span>
            </button>

            <div class="accordion__content">
              <p><?= $faqs['answer']; ?></p>
            </div>
          </div>

          <?php
                  }
                }
          ?>

        </div>

    <?php
      }
    }
    ?>

  </section>


  <script>
    // select all accordion items
    const accItems = document.querySelectorAll(".accordion__item");

    // add a click event for all items
    accItems.forEach((acc) => acc.addEventListener("click", toggleAcc));

    function toggleAcc() {
      // remove active class from all items exept the current item (this)
      accItems.forEach((item) => item != this ? item.classList.remove("accordion__item--active") : null);

      // toggle active class on current item
      if (this.classList != "accordion__item--active") {
        this.classList.toggle("accordion__item--active");
      }
    }
  </script>


  <?php include 'include/footer.php' ?>

  <?php include 'include/footerlink.php' ?>




</body>

</html>