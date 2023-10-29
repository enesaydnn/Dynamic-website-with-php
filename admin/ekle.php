<style>
  @import url('https://fonts.googleapis.com/css2?family=Saira:wght@300&display=swap');
</style>

   <?php
        require_once"header.php";
        require_once"sidebar.php";
   ?>



<?php if($_GET['sayfa']=="ekip"){ ?>
  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row">     
            
        <div class="col-md-12" style="font-family: 'Saira', sans-serif;">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">|Ekip </h3>
              </div>
                 
              
              <form action="islem.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">


        
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ekip Resim</label>
                    <input name ="resim" type="file" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Ekip İsim</label>
                    <input name="isim" type="text" class="form-control" placeholder="Lütfen İsim Girin ! ">
                  </div>
                

                  <div class="form-group">
                    <label for="exampleInputEmail1">Ekip Konum</label>
                    <input name="konum" type="text" class="form-control" placeholder="Lütfen Konum Girin ! ">
                  </div>
                

                  <div class="form-group">
                    <label for="exampleInputEmail1">Ekip Sıra</label>
                    <input name="sira" type="text" class="form-control" placeholder="Lütfen Sıra Girin ! ">
                  </div>




                   <div class="form-group">
                   <label for="exampleInputEmail1"></label>
                   <textarea  name="aciklama" id="editor1" class="ckeditor">
                   </textarea>
                   </div>

                   <div class="form-group">
                    <label for="exampleInputEmail1">Ekip Twitter</label>
                    <input name="twitter" type="text" class="form-control" placeholder="Lütfen Twitter Adresi Girin ! ">
                   </div>

                   <div class="form-group">
                    <label for="exampleInputEmail1">Ekip İnstagram</label>
                    <input name="instagram" type="text" class="form-control" placeholder="Lütfen İnstagram Adresi Girin ! ">
                   </div>



                <div class="card-footer">
                  <button name="ekipkaydet" type="submit" class="btn btn-primary">Kaydet</button>
                </div>



                </form>
            </div>
            </div>
        </div>
    </section>
  </div>
  
<?php } elseif($_GET['sayfa']=="galeri") { ?>


  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row">     
            
        <div class="col-md-12" style="font-family: 'Saira', sans-serif;">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">|Galeri </h3>
              </div>
                 
              
              <form action="islem.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">


        
                  <div class="form-group">
                    <label for="exampleInputEmail1">Galeri Resim</label>
                    <input name ="resim" type="file" class="form-control">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Galeri Sıra</label>
                    <input name="sira" type="text" class="form-control" placeholder="Lütfen Sıra Girin ! ">
                  </div>

                <div class="card-footer">
                  <button name="galerikaydet" type="submit" class="btn btn-primary">Kaydet</button>
                </div>

                </form>
            </div>
            </div>
        </div>
    </section>
  </div>



<?php } elseif ($_GET['sayfa']=="blog") { ?>
  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
      <div  class="col-md-12">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Blog</h3>
              </div>
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Blog Resim</label>
                    <input name="resim"  type="file" class="form-control">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Blog Başlık</label>
                    <input name="baslik"  type="text" class="form-control"  placeholder="Lütfen blog başlığı giriniz.">
                  </div> 
                   <div class="form-group">
                    <label for="exampleInputEmail1">Blog Sıra</label>
                    <input name="sira"  type="text" class="form-control"  placeholder="Lütfen blog sıra giriniz.">
                  </div> 
                    <div class="form-group">
                    <label for="exampleInputEmail1">Blog Anahtar Kelime</label>
                    <input name="anahtarkelime"  type="text" class="form-control"  placeholder="Lütfen Blog Anahtar Kelime  Giriniz.">
                  </div> 
                     <div class="form-group">
                    <label for="exampleInputEmail1">Blog Açıklama</label>
                    <textarea name="aciklama" id="editor1" class="ckeditor"></textarea>
                  </div>
                </div>
                <div class="card-footer">
                  <button name="blogkaydet" style="float:right" type="submit" class="btn btn-primary">Kaydet</button>
                </div>
              </form> 
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>


<?php } elseif($_GET['sayfa']=="kategori") { ?>


  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row">     
            
        <div class="col-md-12" style="font-family: 'Saira', sans-serif;">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"> | Kategori </h3>
              </div>
                 
              
              <form action="islem.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">

                <div class="form-group">
                    <label for="exampleInputEmail1">Kategori Başlık</label>
                    <input name="baslik" type="text" class="form-control" placeholder="Lütfen Başlık Girin ! ">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Kategori Sıra</label>
                    <input name="sira" type="text" class="form-control" placeholder="Lütfen Sıra Girin ! ">
                  </div>

                  
                  <div class="form-group">
                  <label>Kategori Durum</label>
                  <select name="durum" class="form-control select2" style="width: 100%;">
                    <option value="1" selected="selected">Aktif</option>
                    <option value="0">Pasif</option>
                  </select>
                </div>
                  

                <div class="card-footer">
                  <button name="kategorikaydet" type="submit" class="btn btn-primary">Kaydet</button>
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