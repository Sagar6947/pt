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

  <section class="banner" style="background-image:url(assets/img/plain-board.jpg)">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="head text-center text-white" data-aos="slide-down" data-aos-duration="1000">OWN A PURPLE TURTLE FRANCHISE</h1>

        </div>
        <div class="col-sm-6">
          <!--<img src="<?= base_url() ?>assets/img/franchise-girl.webp" alt="Girl" class="boy-img">-->
        </div>
        <div class="col-sm-6">
          <div class="form-con">
            <div class="form-box" data-aos="slide-left" data-aos-duration="1300">
              <form action="" method="POST">

                <h2 class="text-center">Enquire Now</h2>

                <input type="text" name="name" placeholder="Full Name*">
                <input type="text" name="email" placeholder="Email Id*">
                <input type="text" class="inout-mobile" name="number" placeholder="Mobile*">
                <select name="state" id="state">
                  <option value="">Select state </option>
                  <?php
                  if ($state_list) {
                    foreach ($state_list as $state) {
                  ?>
                      <option value="<?= $state['state_id'] ?>"><?= $state['state_name']; ?></option>
                  <?php
                    }
                  }
                  ?>
                </select>


                <select name="city" class="form-control" id="city">
                  <option value="">Select city</option>

                </select>

                <div class="checkbox" align="justify">
                  <input type="checkbox" name="" id="">
                  <p>By ticking on the box, I acknowledge that I am ready with a min investment of
                    10 lakhs and can arrange for a 2000 sqft property for the preschool franchise.</p>
                </div>

                <div class="submit-btn text-center">
                  <input type="submit" value="submit">
                </div>
              </form>
              <div class="form-bg"><img src="<?= base_url() ?>assets/img/Rectangle.webp" class="form-bg-img" alt=""></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="fr_about_sec" style="background: #ffffff;">
    <div class="container">
      <div class="row fr_about-con">
        <div class="col-lg-6 col-md-12">
          <div class="fr_about-img" data-aos="slide-right">
            <div data-aos="flip-right" data-aos-duration="1300">
            </div>
            <!-- <div class="back-img"></div> -->
            <div class="book"></div>
            <div class="heart"></div>
            <div class="star"></div>
            <div class="cloud"></div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12   text-center" align="justify">
          <div class="detail  about-detail text-left ">
            <div data-aos="slide-up" data-aos-duration="1200">
              <h2 class="global_title left"> Preschool Franchise</h2>
              <p class="fr_para">Purple Turtle offers preschool franchise opportunities for teachers
                and entrepreneurs who wish to make a mark in the education sector by
                starting and sustaining a high-growth preschool business while
                sharing the success and reputation of an international brand.</p>
              <p class="fr_para">Starting a preschool franchise business is a low-risk investment with
                high potential for stable, long-term returns. The education sector is
                recession-proof and is a lucrative business option. The number of
                families, where both parents work, continues to rise resulting in a high
                demand for preschools. The right time to invest in the preschool
                business is now. All you need is to join hands with a partner who has
                been trusted across the globe in shaping the future of children with
                high quality early education.</b></p>
            </div>
            <!-- <a href="JavaScript:Void(0);" class="join_btn buy_btn radial-out">Join us now</a>	 -->
          </div>
        
        </div>
      </div>
    </div>
  </section>


  <section class="fr_support_sec">
    <div class="container">
      <div class="heading text-center">
        <h1 style="margin-bottom:10px;">World-Class Franchise Support Program</h1>
        <p>We provide you with all support and training you need to get started with your own Purple Turtle Pre-School</p>
      </div>
      <div class="grid-container">
        <div class="grid-box text-center" data-aos="zoom-in" data-aos-duration="1300">
          <div class="img">
            <img src="<?= base_url() ?>assets/img/marketing-support.webp" alt="">
          </div>
          <h1 class="orange">Marketing Support</h1>
          <p class="text-justify">We help create and roll out marketing plans for each school to increase students' admissions. From professionally designed pamphlets, brochures, promotional display hoardings, flex banners to bespoke digital marketing campaigns, we provide you with personalized design and marketing support to grow your school quickly and profitably.</p>
        </div>
        <div class="grid-box text-center" data-aos="zoom-in" data-aos-duration="1300">
          <div class="img">
            <img src="<?= base_url() ?>assets/img/operational-support.webp" alt="">
          </div>
          <h1 class="blue">Operational Support</h1>
          <p class="text-justify">Even if you are new to preschool education business, you can easily run a Purple Turtle Pre-school franchise with our easy-to-understand Franchise Manual and a supportive training system based on years of business experience in the education sector. With our ongoing operational support you can easily run and manage your school.</p>
        </div>
        <div class="grid-box text-center" data-aos="zoom-in" data-aos-duration="1300">
          <div class="img">
            <img src="<?= base_url() ?>assets/img/international.webp" alt="">
          </div>
          <h1 class="sky-blue">Purple Turtle </br>International Curriculum</h1>
          <p class="text-justify">Our books and other learning resources have been created, reviewed and updated by a team of world-renowned experts including Emmy-Award winning writers, ATOS, Lexile reading measures-experts from the USA, Indian children’s authors among others. Our quality content and pedagogy will help you provide the highest international standards in education.</p>
        </div>
        <div class="grid-box text-center" data-aos="zoom-in" data-aos-duration="1300">
          <div class="img">
            <img src="<?= base_url() ?>assets/img/course.webp" alt="">
          </div>
          <h1 class="purple">Comprehensive </br>Course Materials</h1>
          <p class="text-justify">When you own a Purple Turtle franchise, you get a full library of children's books including Course Books and Workbooks for every child with a structured yearly curriculum, 1000s of worksheets age-wise divided, learning videos, animated educational series, talking pen, day-to-day teaching planners, term-wise assessment guide to make teachers' work easy, effective and fun.</p>
        </div>
        <div class="grid-box text-center" data-aos="zoom-in" data-aos-duration="1300">
          <div class="img">
            <img src="<?= base_url() ?>assets/img/training.webp" alt="">
          </div>
          <h1 class="red">Teacher's </br> Training</h1>
          <p class="text-justify">Starting from assistance in screening interviews while recruiting the best talents for your school, we help train your teachers on many important aspects, for example, how to use our curriculum, and how to communicate with parents effectively. Besides our comprehensive Teachers’ Manual, and 40 weeks of daily lesson plans for teachers, we will also provide ongoing online training for your teachers to upskill and upgrade themselves.</p>
        </div>
        <div class="grid-box text-center" data-aos="zoom-in" data-aos-duration="1300">
          <div class="img">
            <img src="<?= base_url() ?>assets/img/layout.webp" alt="">
          </div>
          <h1 class="green">Site Recommendation </br>& Layout Design</h1>
          <p class="text-justify">We help you shortlist/select your locations, provide guidance on interior/exterior design, and assist you in creating a strong, memorable visual identity for your school using our logos and other brand assets. We will also assist you in procuring furniture and play equipment i.e., toys, flashcards, wall charts, blocks, setting up the library corner, music, play areas, sandpits to help establish a safe, nurturing, age-appropriate learning environment.</p>
        </div>
      </div>
    </div>
  </section>


  <section id="team">
    <div class="container my-3 py-5 text-center">
      <div class="row mb-5">
        <div class="col">
          <h1>Our Team</h1>
          <p class="my-3">
            This team page has a quirky, vibrant energy that immediately catches your attention – a good
            sign for a design company.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="owl-carousel testimonial_slider">

          <div class="card h-100">
            <div class="card-body">
              <img class=" mb-3" src="<?= base_url() ?>assets/img/KarlGeurs.png" alt="">
              <h3>Karl Geurs</h3>

              <div class="more">Karl Geurs is a two-time Emmy winning writer, story editor, producer and director. His preschool animation writing credits include Disney's Winnie the Pooh, American Greetings' Strawberry Shortcake, Mattel's Little People and Hasbro's My Little Pony.</div>

            </div>
          </div>

          <div class="card h-100">
            <div class="card-body">
              <img class=" mb-3" src="<?= base_url() ?>assets/img/CarterCrocker.png" alt="">
              <h3>Carter Crocker</h3>

              <div class="more">Carter Crocker has written and story edited for several animation studios including Disney and Warner Brothers, and has won two Emmys for his work. He has written two Young Adult novels for Penguin-Putnam, and is currently working on a YA historical novel.</div>

            </div>
          </div>

          <div class="card h-100">
            <div class="card-body">
              <img class=" mb-3" src="<?= base_url() ?>assets/img/DevRoss.png" alt="">
              <h3>Dev Ross</h3>

              <div class="more">Dev Ross is an Emmy and Humanities winner. Her preschool writing credits include Winnie the Pooh, Rainbow Ruby, Little People, Jakers!, Chloe's Closet, Clifford the Big Red Dog, and Clifford's Puppy Days. Dev has also written numerous books for the award winning "We Both Read" children's' book series.</div>

            </div>
          </div>

          <div class="card h-100">
            <div class="card-body">
              <img class=" mb-3" src="<?= base_url() ?>assets/img/lucasremmerswaal.png" alt="">
              <h3>Lucas
                Remmerswaal</h3>

              <div class="more">New Zealand based author and father of six children, Lucas Remmerswaal is on a mission to empower 100 Million kids with the habits that lead to financial literacy. The 13 Habits that made Billions series of books are inspired by Billionaire Warren Buffett. </div>

            </div>
          </div>

          <div class="card h-100">
            <div class="card-body">
              <img class=" mb-3" src="<?= base_url() ?>assets/img/GailEllenSkrobackHennessey.png" alt="">
              <h3>Gail Ellen Skroback
                Hennessey </h3>

              <div class="more">Gail Hennessey taught social studies at Harpursville Central School in New York State for 33 years. She writes often for children’s publications and is the author of six books for teachers and students. In 1988, she was named Outstanding Elementary Social Studies Classroom Teacher of the Year from the New York State Council for the Social Studies. </div>


            </div>
          </div>





          <div class="card h-100">
            <div class="card-body">
              <img class=" mb-3" src="<?= base_url() ?>assets/img/PamelaHickey&DennysMcCOY.png" alt="">
              <h3>Pamela Hickey and
                Dennys McCOY</h3>

              <div class="more">Pamela Hickey & Dennys McCoy have been an international writing team for over 20 years. Their work in television and film have earned them 5 Emmy nominations (one win), 4 BAFTA nominations (3 wins), and 2 PULCINELLA AWARDS (the European Emmy) including one for Best Series (COSMIC QUANTUM RAY). They have worked in live-action prime-time television (ROBOCOP), animated features (BAYALA).They currently have two pre-school series, MIGHTY LITTLE BHEEM and TREEHOUSE TALES, streaming on Netflix and THE INSECTIBLES (6-11) streaming on Amazon.</div>
            </div>
          </div>









        </div>
      </div>
    </div>
  </section>


  <section class="form_info">
    <div class="container">
      <div class="row">

        <div class="col-md-6 col-sm-12">
          <h5 class="color_white form_head">Grievance Redressal</h5>
          <div class="content_box">

            <p class="color_white">Aadarsh Technosoft Pvt Ltd is a founding member of the IEC, which is a self-regulatory body.
              </p>
              <p  class="color_white">As a member of IEC, Aadarsh Technosoft Pvt Ltd is committed to resolving grievances within 30 days.</p>
              <p  class="color_white">As a member of IEC, Aadarsh Technosoft Pvt Ltd is committed to resolving grievances within 30 days.</p>
              <p  class="color_white">This is the official page and you can share your queries, feedback, or any concerns you may have about Aadarsh Technosoft Pvt Ltd or our programs.</p>
              
              <p class="color_white">Our dedicated team will respond to you within 2 business days.</p>
            </div>
            </div>
            
            <div class="col-md-6 col-sm-12">
              <h5 class="color_white form_head">Fill the form</h5>
              <form action="">
            <input type="text" class="form-control" placeholder="Learner Name">
            <input type="text" class="form-control" placeholder="Parent Name">
            <input type="tel" class="form-control" placeholder="Register Mobile Number">
            <input type="tel" class="form-control" placeholder="Alternate Mobile Number">
            <select name="concern" id="" class="form-control">
              <option value="" selected>Select Concern Type</option>
              <option value="Refund Related">Refund Related</option>
              <option value="Deferred Related">Deferred Related</option>
              <option value="Acadimic Doubts">Acadimic Doubts</option>
              <option value="Extension Related">Extension Related</option>
              <option value="Grading Related">Grading Related</option>
              <option value="Certification Related">Certification Related</option>
              <option value="Academic Counsellor">Academic Counsellor</option>
              <option value="Student Mentor">Student Mentor</option>
              <option value="Technical Issue">Technical Issue</option>
              <option value="Other">Other</option>
            </select>
            <textarea name="message" id="" cols="10" class="form-control textarea" placeholder="Your Message"></textarea>
            <div class="btn-block text-center sub_btn">
              <button class="buy_btn radial-out">Submit Now</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>







  <?php include 'include/footer.php' ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <?php include 'include/footerlink.php' ?>
  <script>
    $(document).on('change', '#state', function() {

      var state = $(this).val();

      $.ajax({
        method: "POST",
        url: "<?= base_url('home/getcity') ?>",
        data: {
          state: state
        },
        success: function(response) {
          // console.log(response);
          $('#city').html(response);
        }
      });
    });
    document.getElementById('video-player').controls = false;
  </script>

  <script>
    $(document).ready(function() {
      // Configure/customize these variables.
      var showChar = 200; // How many characters are shown by default
      var ellipsestext = "...";
      var moretext = "Show more >";
      var lesstext = "Show less";


      $('.more').each(function() {
        var content = $(this).html();

        if (content.length > showChar) {

          var c = content.substr(0, showChar);
          var h = content.substr(showChar, content.length - showChar);

          var html = c + '<span class="moreellipses">' + ellipsestext + '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

          $(this).html(html);
        }

      });

      $(".morelink").click(function() {
        if ($(this).hasClass("less")) {
          $(this).removeClass("less");
          $(this).html(moretext);
        } else {
          $(this).addClass("less");
          $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
      });
    });
  </script>
</body>

</html>