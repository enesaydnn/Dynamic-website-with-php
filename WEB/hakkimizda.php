<?php require_once 'header.php' ?>

  <main id="main">
    <br><br><br>
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
          <img style="width: 400px; border-radius: 80px;" src="/admin/resimler/hakkimizda/<?php echo $hakkimizdacek['hakkimizda_resim'] ?>" class="img-fluid" alt="">
          </div>
 
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3><?php echo $hakkimizdacek['hakkimizda_baslik'];?></h3>

            <p class="font-italic">
            <?php echo $hakkimizdacek['hakkimizda_aciklama'] ?>
            </p>

          </div>
        </div>
      </div>
    </section>
  </main>

  <?php require_once 'footer.php'?>