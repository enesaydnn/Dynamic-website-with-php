<style>
  @import url('https://fonts.googleapis.com/css2?family=Saira:wght@300&display=swap');
</style>

   <?php
        require_once"header.php";
        require_once"sidebar.php";
   ?>

    <?php
        $hakkimizdasor=$baglanti->prepare("SELECT * FROM hakkimizda WHERE hakkimizda_id=?");
        $hakkimizdasor->execute(array(1));
        $hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);
    ?>



 
            

  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row">     
            
        <div class="col-md-12" style="font-family: 'Saira', sans-serif;">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">| Hakkımızda</h3>
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
                    <img style="width: 200px;" src="resimler/hakkimizda/<?php echo $hakkimizdacek['hakkimizda_resim']  ?>">
                  </div>

                <input type="hidden" name="eskiresim" value="<?php echo $hakkimizdacek['hakkimizda_resim'] ?>">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Hakkımızda Resim</label>
                    <input name ="resim" value="<?php echo $hakkimizdacek['hakkimizda_resim'] ?>" type="file" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Hakkımızda Başlık</label>
                    <input name="baslik" value="<?php echo $hakkimizdacek['hakkimizda_baslik'] ?>" type="text" class="form-control" placeholder="Lütfen Başlık Girin ! ">
                  </div>
                
                 
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Hakkımızda Açıklama</label>
                   <textarea  name="aciklama" id="editor1" class="ckeditor">
                   <?php echo $hakkimizdacek['hakkimizda_aciklama'] ?>
                   </textarea>

                  </div>








                <div class="card-footer">
                  <button name="hakkimizdakaydet" type="submit" class="btn btn-primary">Kaydet</button>
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