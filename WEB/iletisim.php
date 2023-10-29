<?php
require_once 'header.php';
?>
<br><br>
  <main id="main">
    </div>
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="row mt-5">
          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Konum</h4>
                <p><?php echo $ayarcek['ayar_adres'];?></p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Elektronik Posta Adresim</h4>
                <p><?php echo $ayarcek['ayar_email'];?></p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Telefon Numaram</h4>
                <p><?php echo $ayarcek['ayar_telefon'];?></p>
              </div>
            </div>
          </div>
          <div class="col-lg-8 mt-5 mt-lg-0">
      </div>
    </section><!-- End Contact Section -->
    <div data-aos="fade-up">
    <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96054.85698908326!2d32.58062219094432!3d41.20620233274038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40835335ca55f4a3%3A0x58c149eab8f0a954!2zS2FyYWLDvGssIEthcmFiw7xrIE1lcmtlei9LYXJhYsO8aw!5e0!3m2!1str!2str!4v1685202610833!5m2!1str!2str" frameborder="0" allowfullscreen></iframe>
      </div>
  </main>
<?php
require_once "footer.php";
?>


