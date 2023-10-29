<?php require_once 'header.php'; 

$blogsor=$baglanti->prepare("SELECT * FROM blog order by blog_sira ASC ");
$blogsor->execute(array());
?>

<br><br>
  <main id="main" data-aos="fade-in">




    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

        <?php while ($blogcek=$blogsor->fetch(PDO::FETCH_ASSOC)) { 
        $blog_id = $blogcek['blog_id']
        
          
        ?>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="/admin/resimler/blog/<?php echo $blogcek['blog_resim'] ?>" class="img-fluid" alt="...">
              <div class="course-content">
                

                <h3><?php echo "<a href='blog-detay.php?blog_id=$blog_id' > " ?><?php echo $blogcek['blog_baslik'] ?></a></h3>
                <p><?php

                   $aciklama = $blogcek['blog_aciklama'];
                   $bolaciklama = substr($aciklama,0,184);

                  echo $bolaciklama;

                ?>
                </p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="/admin/resimler/hakkimizda/<?php ?>" class="img-fluid" alt="">
                    <span>EA BLOG</span>
                  </div>
                 
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

         <?php } ?>

          

        </div>

      </div>
    </section><!-- End Courses Section -->

  </main><!-- End #main -->
<?php require_once 'footer.php'; ?>