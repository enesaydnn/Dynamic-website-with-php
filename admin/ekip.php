   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   <?php
        require_once"header.php";
        require_once"sidebar.php";
        
        $ekipsor=$baglanti->prepare("SELECT * FROM ekip");
        $ekipsor->execute(array());
   ?>

  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row">  
                
      <?php

if(@$_GET['durum'] == 'yes'){?>
<script>alert("İşlem Başarılı");</script>
<?php }

else if(@$_GET['durum'] == 'no'){?>
<script>alert("İşlem Başarısız");</script>
<?php }


?>   
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Ekip Üyeleri</h3>

                <a href="ekle.php?sayfa=ekip">
<button type="submit" style="float:right;" class="btn btn-info">Yeni Ekip Ekle</button>
                </a>
                <!--Arama Kutusu Kodları-->
                 <!-- <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div> -->

              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
              <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
             
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Ekip Resim</th>
                      <th>Ekip Sıra</th>
                      <th>Ekip İsim</th>
                      <th>Ekip Konum</th>       
                      <th>Düzenle</th>
                      <th>Sil</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php 
                    while($ekipcek=$ekipsor->fetch(PDO::FETCH_ASSOC)) {?>
                    <tr>
                      <td><img style="width: 100px;"src="/admin/resimler/ekip/<?php echo $ekipcek['ekip_resim'] ?>"></td>
                      <td><?php echo $ekipcek['ekip_sira'] ?></td>
                      <td><?php echo $ekipcek['ekip_isim'] ?></td>
                      <td><span class="tag tag-success"><?php echo $ekipcek['ekip_konum'] ?></span></td>
                      <td><a href="duzenle.php?sayfa=ekip&id=<?php echo $ekipcek['ekip_id'] ?>"><button type="submit" class="btn btn-success">Düzenle</button></a></td>
                      <td>

                        <form action="islem.php" method="post">
          <button name="ekipsil" type="submit" class="btn btn-danger">Sil</button>
          <input name="id" value="<?php echo $ekipcek['ekip_id'] ?>" type="hidden">
          <input name="eskiresim" value="<?php echo $ekipcek['ekip_resim'] ?>" type="hidden">             
        
        </form>

                      </td>
                      </tr>
                      <?php } ?>


                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    </section>
  </div>


 <?php
        require_once"footer.php";
 ?>