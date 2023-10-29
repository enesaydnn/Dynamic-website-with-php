<style>
  @import url('https://fonts.googleapis.com/css2?family=Saira:wght@300&display=swap');
</style>

   <?php
        require_once"header.php";
        require_once"sidebar.php";
   ?>

    <?php
        $ayarsor=$baglanti->prepare("SELECT * FROM ayarlar WHERE ayar_id=?");
        $ayarsor->execute(array(1));
        $ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
    ?>



    <?php
        if(@$_GET['sayfa']=="ayarlar"){  ?>
            

  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row">     
            
        <div class="col-md-12" style="font-family: 'Saira', sans-serif;">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">| Ayarlar</h3>
              </div>
         
      <?php

        if(@$_GET['durum'] == 'yes'){?>
  <script>alert("İşlem Başarılı");</script>
      <?php }

        else if(@$_GET['durum'] == 'no'){?>
<script>alert("İşlem Başarısız");</script>
        <?php }


      ?>         
              
              <form action="islem.php" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Site Başlığı</label>
                    <input name ="baslik" value="<?php echo $ayarcek['ayar_baslik'] ?>" type="text" class="form-control" placeholder="Lütfen Site Başlığı Girin ! ">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Site Açıklaması</label>
                    <input name="aciklama" value="<?php echo $ayarcek['ayar_aciklama'] ?>" type="text" class="form-control" placeholder="Lütfen Site Açıklaması Girin ! ">
                  </div>
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Anahtar Kelimeler</label>
                    <input name="anahtar" value="<?php echo $ayarcek['ayar_anahtar'] ?>" type="text" class="form-control" placeholder="Lütfen Anahtar Kelime Girin ! ">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Adres</label>
                    <input name="adres" value="<?php echo $ayarcek['ayar_adres'] ?>" type="text" class="form-control" placeholder="Lütfen Adres Bilgilerinizi Girin ! ">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Telefon Numarısı</label>
                    <input name="telefon" value="<?php echo $ayarcek['ayar_telefon'] ?>" type="text" class="form-control" placeholder="Lütfen Telefon Numarınızı Girin ! ">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Elektronik Posta</label>
                    <input name="email" value="<?php echo $ayarcek['ayar_email'] ?>" type="email" class="form-control" placeholder="Lütfen E-Mail'inizi Girin ! ">
                  </div>



                <div class="card-footer">
                  <button name="ayarkaydet" type="submit" class="btn btn-primary">Kaydet</button>
                </div>
              </form>
            </div>
          
</div>

        </div>
    </section>
  </div>

 <?php  } elseif($_GET['sayfa']=="sosyalmedya"){?>


  
  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row">     
            
        <div class="col-md-12" style="font-family: 'Saira', sans-serif;">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">| Sosyal Medya Ayarları </h3>
              </div>
         
      <?php

        if(@$_GET['durum'] == 'yes'){?>
  <script>alert("İşlem Başarılı");</script>
      <?php }

        else if(@$_GET['durum'] == 'no'){?>
<script>alert("İşlem Başarısız");</script>
        <?php }


      ?>         
              
              <form action="islem.php" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Instagram</label>
                    <input name ="instagram" value="<?php echo $ayarcek['ayar_instagram'] ?>" type="text" class="form-control" placeholder="Lütfen Instagram Adresinizi Girin ! ">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Twitter</label>
                    <input name="twitter" value="<?php echo $ayarcek['ayar_twitter'] ?>" type="text" class="form-control" placeholder="Lütfen Twitter Adresinizi Girin ! ">
                  </div>
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">LinkedIn</label>
                    <input name="linkedin" value="<?php echo $ayarcek['ayar_linkedIn'] ?>" type="text" class="form-control" placeholder="Lütfen LinkedIn Adresinizi Girin ! ">
                  </div>

                  

                <div class="card-footer">
                  <button name="sosyalmedyakaydet" type="submit" class="btn btn-primary">Kaydet</button>
                </div>
              </form>
            </div>
          
</div>

        </div>
    </section>
  </div>



 <?php } ?>
 <?php
        require_once"footer.php";
 ?>