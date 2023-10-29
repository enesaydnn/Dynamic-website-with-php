  <?php
        require_once 'C:\xampp\htdocs\admin\baglanti.php';
        require_once 'C:\xampp\htdocs\WEB\function.php';
        $ayarsor=$baglanti->prepare("SELECT * FROM ayarlar WHERE ayar_id=?");
        $ayarsor->execute(array(1));
        $ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
    ?>

    <?php
        $hakkimizdasor=$baglanti->prepare("SELECT * FROM hakkimizda WHERE hakkimizda_id=?");
        $hakkimizdasor->execute(array(1));
        $hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);
    ?>

   <?php
        $slidersor=$baglanti->prepare("SELECT * FROM slider1 WHERE slider_id=?");
        $slidersor->execute(array(1));
        $slidercek=$slidersor->fetch(PDO::FETCH_ASSOC);
    ?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php  echo $ayarcek['ayar_baslik'];?></title>

  <meta content="<?php echo $ayarcek['ayar_aciklama']; ?>" name="descriptison">
  <meta content="<?php echo $ayarcek['ayar_anahtar'];?>" name="keywords">

  
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

 
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

 
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
  @import url('https://fonts.googleapis.com/css2?family=Saira:wght@300&display=swap');
  </style>


</head>



<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 class="logo mr-auto"><a href="index.php" style="font-family: 'Saira', sans-serif;">EA BLOG</a></h1>
      <nav class="nav-menu d-none d-lg-block">

        <ul>
          <li class="active"><a href="index.php">Anasayfa</a></li>
          <li><a href="hakkimizda.php">Hakkımda</a></li>
          <li><a href="ekip.php">Ekibim</a></li>
          <li><a href="galeri.php">Galeri</a></li>
          <li><a href="blog.php">Blog</a></li>

          <li class="drop-down"><a href="">Kategoriler</a>
            <ul>
                      <?php 

$kategorisor=$baglanti->prepare("SELECT * FROM kategori order by kategori_sira ASC");
$kategorisor->execute(array());
while ($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC)) {
                 ?>
              <li><a href="kategori-detay-<?=seo($kategoricek['kategori_baslik']).'-'.$kategoricek['kategori_id'] ?>"><?php echo $kategoricek['kategori_baslik'] ?></a></li> 
           <?php } ?>

         </ul>
   <li><a href="iletisim.php">İletişim</a></li>
      </nav>
    </div>
  </header>