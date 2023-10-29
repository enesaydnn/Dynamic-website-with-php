<style>
  @import url('https://fonts.googleapis.com/css2?family=Saira:wght@300&display=swap');
</style>

   <?php
        require_once"header.php";
        require_once"sidebar.php";
   ?>

   <?php
        $slidersor=$baglanti->prepare("SELECT * FROM slider1 WHERE slider_id=?");
        $slidersor->execute(array(1));
        $slidercek=$slidersor->fetch(PDO::FETCH_ASSOC);
    ?>


 
            

  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row">     
            
        <div class="col-md-12" style="font-family: 'Saira', sans-serif;">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">| Slider </h3>
              </div>
         
      <?php

        if(@$_GET['durum'] == 'yes'){?>
  <script>alert("İşlem Başarılı");</script>
      <?php }

        else if(@$_GET['durum'] == 'no'){?>
<script>alert("İşlem Başarısız");</script>
        <?php }


      ?>         
              
              <form action="islem.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">


                <div class="form-group">
                    <img style="width: 200px;" src="resimler/slider/<?php echo $slidercek['slider_resim']  ?>">
                  </div>

                <input type="hidden" name="eskiresim" value="<?php echo $slidercek['slider_resim'] ?>">


                  <div class="form-group">
                    <label for="exampleInputEmail1">Slider Resim</label>
                    <input name ="resim" value="<?php echo $slidercek['slider_resim'] ?>" type="file" class="form-control">
                  </div>



                  <div class="form-group">
                    <label for="exampleInputEmail1">Slider Başlık</label>
                    <input name="baslik" value="<?php echo $slidercek['slider_baslik'] ?>" type="text" class="form-control" placeholder="Lütfen Başlık Girin ! ">
                  </div>
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Slider Buton İsmi</label>
                    <input name="buton" value="<?php echo $slidercek['slider_buton'] ?>" type="text" class="form-control" placeholder="Lütfen Buton İsmi Girin ! ">
                  </div>
                

                  <div class="form-group">
                    <label for="exampleInputEmail1">Slider Link</label>
                    <input name="link" value="<?php echo $slidercek['slider_link'] ?>" type="text" class="form-control" placeholder="Lütfen Link Girin ! ">
                  </div>
                

                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Slider Açıklama</label>
                   <textarea  name="aciklama" id="editor1" class="ckeditor">
                   <?php echo $slidercek['slider_aciklama'] ?>
                   </textarea>

                  </div>








                <div class="card-footer">
                  <button name="sliderkaydet" type="submit" class="btn btn-primary">Kaydet</button>
                </div>
              </form>
            </div>
          
</div>

        </div>
    </section>
  </div>

 <?php
        require_once"footer.php";
 ?>