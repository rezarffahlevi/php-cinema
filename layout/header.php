<?php
  if($_SESSION['level']=='user')
  {
    ?>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_top">
          <div class="header_top_left">
            <ul class="top_nav">
              <li><a href="?home">Beranda</a></li>
              <li><a href="?page=artikel">Tentang</a></li>
              <li><a href="?page=kontak-kami">Kontak</a></li>
            </ul>
          </div>
          <div class="header_top_right">
            <p><?php echo "Selamat Datang <b><i>".$_SESSION['nama'].".</i></b>" ?></p>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_bottom">
          <div class="logo_area"><a href="#" class="logo"><img src="images/logo.jpg" alt=""></a></div>
          <div class="add_banner"><a href="#"><img src="images/addbanner_728x90_V1.jpg" alt=""></a></div>
        </div>
      </div>
    </div>
<?php }

  else{

?>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_top">
          <div class="header_top_left">
            <ul class="top_nav">
              <li><a href="index.php">Beranda</a></li>
              <li><a href="?else">Tentang</a></li>
              <li><a href="?page=kontak-kami">Kontak</a></li>
            </ul>
          </div>
          <div class="header_top_right">
            <p>Jangan tanyakan dia tanya siapa temannya :v</p>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_bottom">
          <div class="logo_area"><a href="#" class="logo"><img src="images/logo.jpg" alt=""></a></div>
          <div class="add_banner"><a href="#"><img src="images/addbanner_728x90_V1.jpg" alt=""></a></div>
        </div>
      </div>
    </div>
    <?php } ?>