<?php
if($_SESSION['level']=='user'){

  ?>
<nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav main_nav">
          <li class="active"><a href="?home"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
          <li><a href="?page=jadwal">Jadwal Film</a></li>
          <!-- <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Jadwal Film</a>
          <!--   <ul class="dropdown-menu" role="menu">
              <li><a href="#">Sinetron Indonesia</a></li>
            </ul> --> -->
          </li>
          <li><a href="?galeri">Galeri</a></li>
          <li><a href="?page=kontak-kami">Kontak Kami</a></li>
          <li><a href="core/logout.php" onclick="return confirm('Yakin ente mau gabut?')">Logout</a></li>
         
      </div>
    </nav>

<?php }
else{

?>

<nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav main_nav">
          <li class="active"><a href="?home"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
          </li>
          <li><a href="?galeri">Galeri</a></li>
          <li><a href="?page=kontak-kami">Kontak Kami</a></li>
          <li><a href="?page=login">Login</a></li>
         
      </div>
    </nav>
  <?php } ?>