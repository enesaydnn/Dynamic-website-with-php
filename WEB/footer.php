<style>
  @import url('https://fonts.googleapis.com/css2?family=Saira:wght@300&display=swap');
</style>

<footer id="footer" style="font-family: 'Saira', sans-serif;">

<div class="footer-top" >
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact" style="font-family: 'Saira', sans-serif;">
        <h3>EA BLOG</h3>
       <p style="font-family: 'Saira', sans-serif;"><strong>Adres:&nbsp;</strong>
         <?php  
            echo $ayarcek['ayar_adres'];
         ?>
         <br>
<strong>Telefon:&nbsp;</strong><?php echo $ayarcek['ayar_telefon'];?><br>

          <strong>Email:&nbsp;</strong><?php echo $ayarcek['ayar_email'];?><br>
        </p>
      </div>

      <div class="col-lg-2 col-md-6 footer-links" style="font-family: 'Saira', sans-serif;">
        <h4>Sayfalar</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Anasayfa</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Hakkımda</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Ekibim</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Galeri</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Blog</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Kategori</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">İletişim</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links" style="font-family: 'Saira', sans-serif;">
        <h4>Hizmetlerimiz</h4>
         <ul>
                      <?php 

$kategorisor=$baglanti->prepare("SELECT * FROM kategori order by kategori_sira ASC");
$kategorisor->execute(array());
while ($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC)) {
                 ?>
              <li><a href="kategori-detay-<?=seo($kategoricek['kategori_baslik']).'-'.$kategoricek['kategori_id'] ?>"><?php echo $kategoricek['kategori_baslik'] ?></a></li> 
           <?php } ?>

         </ul>
      </div>

      <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Size Ulaşalım</h4>
             <p>Bir Mail İle Dünyaları Aşabiliriz.</p>
            <form action="/admin/islem.php/" method="post">
              <input placeholder="Lütfen email giriniz." type="email" name="email">
              <input name="abone" type="submit" value="Postala">
            </form>
          </div>

        </div>
      </div>
    </div>









<div class="container d-md-flex py-4">

  <div class="mr-md-auto text-center text-md-left">
    <div class="copyright">
      &copy; Tüm Hakları Saklıdır. <strong><span>EA BLOG</span></strong>&nbsp;&nbsp;<?php echo date("Y") ?>
    </div>



    <div class="credits">
      Tasarlayan <a href="https://www.enesaydn.com/">enesaydn.com</a>
    </div>
  </div>
  <div class="social-links text-center text-md-right pt-3 pt-md-0">
    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
  </div>
</div>
</footer>

















<a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
<div id="preloader"></div>


<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counterup/counterup.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>


<script src="assets/js/main.js"></script>
</body>
</html>