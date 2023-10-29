<style>
  @import url('https://fonts.googleapis.com/css2?family=Saira:wght@300&display=swap');
</style>

   <?php
        require_once"header.php";
        require_once"sidebar.php";
   ?>



<?php if($_GET['sayfa']=="ekip"){ 
    
    

    $ekipsor=$baglanti->prepare("SELECT * FROM ekip WHERE ekip_id=:ekip_id");
    
    $ekipsor->execute(array(
        'ekip_id'=>$_GET['id']
    ));

    $ekipcek=$ekipsor->fetch(PDO::FETCH_ASSOC);


    ?>


  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row">     
            
        <div class="col-md-12" style="font-family: 'Saira', sans-serif;">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">|Ekip Düzenle</h3>
              </div>
                 
              
              <form action="islem.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                
                 <div class="form-group">
                    <img style="width: 150px;"  src="/admin/resimler/ekip/<?php echo $ekipcek['ekip_resim'] ?>">
                  </div>
        
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ekip Resim</label>
                    <input name ="resim" type="file" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Ekip İsim</label>
                    <input value ="<?php echo $ekipcek['ekip_isim'] ?>" name="isim" type="text" class="form-control" placeholder="Lütfen İsim Girin ! ">
                  </div>
                

                  <div class="form-group">
                    <label for="exampleInputEmail1">Ekip Konum</label>
                    <input value="<?php echo $ekipcek['ekip_konum'] ?>" name="konum" type="text" class="form-control" placeholder="Lütfen Konum Girin ! ">
                  </div>
                

                  <div class="form-group">
                    <label for="exampleInputEmail1">Ekip Sıra</label>
                    <input value ="<?php echo $ekipcek['ekip_sira'] ?>"  name="sira" type="text" class="form-control" placeholder="Lütfen Sıra Girin ! ">
                  </div>




                   <div class="form-group">
                   <label for="exampleInputEmail1"></label>
                   <textarea name="aciklama" id="editor1" class="ckeditor">
                   <?php echo $ekipcek['ekip_aciklama'] ?>
                   </textarea>
                   </div>

                   <div class="form-group">
                    <label for="exampleInputEmail1">Ekip Twitter</label>
                    <input value="<?php echo $ekipcek['ekip_twitter'] ?>" name="twitter" type="text" class="form-control" placeholder="Lütfen Twitter Adresi Girin ! ">
                   </div>

                   <div class="form-group">
                    <label for="exampleInputEmail1">Ekip İnstagram</label>
                    <input value ="<?php echo $ekipcek['ekip_instagram'] ?>" <?php echo $ekipcek['ekip_instagram'] ?> name="instagram" type="text" class="form-control" placeholder="Lütfen İnstagram Adresi Girin ! ">
                   </div>

                   <input type="hidden" name="eskiresim" value="<?php echo $ekipcek['ekip_resim'] ?>">

                   <input type="hidden" name="id" value="<?php echo $ekipcek['ekip_id'] ?>">
                <div class="card-footer">
                  <button name="ekipduzenle" type="submit" class="btn btn-primary">Kaydet</button>
                </div>



                </form>
            </div>
            </div>
        </div>
    </section>
  </div>
<?php } elseif($_GET['sayfa']=="galeri") { 
  

  $galerisor=$baglanti->prepare("SELECT * FROM galeri WHERE galeri_id=:galeri_id");
  
  $galerisor->execute(array(
      'galeri_id'=>$_GET['id']
  ));

  $galericek=$galerisor->fetch(PDO::FETCH_ASSOC);

  
  ?>
  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row">     
            
        <div class="col-md-12" style="font-family: 'Saira', sans-serif;">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">|Galeri Düzenle</h3>
              </div>
                 
              
              <form action="islem.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                
                 <div class="form-group">
                    <img style="width: 150px;"  src="/admin/resimler/galeri/<?php echo $galericek['galeri_resim'] ?>">
                  </div>
        
                  <div class="form-group">
                    <label for="exampleInputEmail1">Galeri Resim</label>
                    <input name ="resim" type="file" class="form-control">
                  </div>
                

                  <div class="form-group">
                    <label for="exampleInputEmail1">Galeri Sıra</label>
                    <input value ="<?php echo $galericek['galeri_sira'] ?>"  name="sira" type="text" class="form-control" placeholder="Lütfen Sıra Girin ! ">
                  </div>


                   <input type="hidden" name="eskiresim" value="<?php echo $galericek['galeri_resim'] ?>">
                   <input type="hidden" name="id" value="<?php echo $galericek['galeri_id'] ?>">

                <div class="card-footer">
                  <button name="galeriduzenle" type="submit" class="btn btn-primary">Kaydet</button>
                </div>



                </form>
            </div>
            </div>
        </div>
    </section>
  </div>



  <?php } elseif ($_GET['sayfa']=="blog") {

$blogsor=$baglanti->prepare("SELECT * FROM blog where blog_id=:blog_id");
$blogsor->execute(array(
'blog_id'=>$_GET['id']
));
$blogcek=$blogsor->fetch(PDO::FETCH_ASSOC);




 ?>
 <div class="content-wrapper">
 
    <section class="content">
      <div class="container-fluid">
     
        <div class="row">
      <div  class="col-md-12">
<div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">Blog düzenle</h3>
              </div>
              
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                   <div class="form-group">
                    <label for="exampleInputEmail1">Blog  Resim</label>
                    <img style="width:150px" src="resimler/blog/<?php echo $blogcek['blog_resim'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Blog  Resim</label>
                    <input name="resim"  type="file" class="form-control"  >
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Blog  Başlık</label>
                    <input value="<?php echo $blogcek['blog_baslik'] ?>" name="baslik"  type="text" class="form-control"  placeholder="Lütfen başlık giriniz.">
                  </div> 
                   <div class="form-group">
                    <label for="exampleInputEmail1">Blog  anahtar kelime</label>
                    <input value="<?php echo $blogcek['blog_anahtarkelime'] ?>" name="anahtarkelime"  type="text" class="form-control"  placeholder="Lütfen anahtar kelime giriniz.">
                  </div> 
                    <div class="form-group">
                    <label for="exampleInputEmail1">Blog  sıra</label>
                    <input value="<?php echo $blogcek['blog_sira'] ?>" name="sira"  type="text" class="form-control"  placeholder="Lütfen sıra giriniz.">
                  </div> 
                     <div class="form-group">
                    <label for="exampleInputEmail1">Ekip Açıklama</label>
                    <textarea name="aciklama" id="editor1" class="ckeditor"><?php echo $blogcek['blog_aciklama'] ?></textarea>
                  </div>
                 
                  
                </div>
    
    <input type="hidden" name="eskiresim" value="<?php echo $blogcek['blog_resim'] ?>">
        <input type="hidden" name="id" value="<?php echo $blogcek['blog_id'] ?>">
                <div class="card-footer">
                  <button name="blogduzenle" style="float:right" type="submit" class="btn btn-primary">Kaydet</button>
                </div>
              </form> 
            </div>
  
 </div>
        </div>
    
      </div>
    </section>
  </div>
  
<?php } elseif ($_GET['sayfa']=="kategori"){?>

  <?php
  $kategorisor=$baglanti->prepare("SELECT * FROM kategori WHERE kategori_id=:kategori_id");
  
  $kategorisor->execute(array(
      'kategori_id'=>$_GET['id']
  ));

  $kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC);
   
  ?>
    
    <div class="content-wrapper">
    <section class="content">
    <div class="container-fluid">
    <div class="row">     
            
        <div class="col-md-12" style="font-family: 'Saira', sans-serif;">
        <div class="card card-primary">
              
        <div class="card-header">
        <h3 class="card-title">| Kategori Düzenle</h3>
        </div>
                 




  <form action="islem.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Kategori Başlık</label>
                    <input value ="<?php echo $kategoricek['kategori_baslik'] ?>"  name="baslik" type="text" class="form-control" placeholder="Lütfen Sıra Girin ! ">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Kategori Sıra</label>
                    <input value ="<?php echo $kategoricek['kategori_sira'] ?>"  name="sira" type="text" class="form-control" placeholder="Lütfen Sıra Girin ! ">
                  </div>

                       
                  <div class="form-group">
                  <label>Kategori Durum</label>
                  <select name="durum" class="form-control select2" style="width: 100%;">
                    <option value="1" <?php if($kategoricek['kategori_durum'] == "1"){

                        echo "selected";

                    } ?>>Aktif</option>
                    <option value="0"  <?php if($kategoricek['kategori_durum'] == "0"){
                    echo "selected";
                      } ?>>Pasif</option>
                  </select>
                </div>
                  


               
                <input type="hidden" name="id" value="<?php echo $kategoricek['kategori_id'] ?>">

                <div class="card-footer">
                  <button name="kategoriduzenle" type="submit" class="btn btn-primary">Kaydet</button>
                </div>


<?php } ?>

 <?php
        require_once"footer.php";
 ?>