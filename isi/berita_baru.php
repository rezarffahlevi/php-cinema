    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="latest_newsarea"> <span>Film Terbaru</span>
          <ul id="ticker01" class="news_sticker">
        <?php
          $sql=$conn->query("SELECT * FROM tb_film");
          while ($cov=$sql->fetch_array()) {
        ?>
            <li><a href="upload/<?php echo $cov['cover']; ?>"><img src="upload/<?php echo $cov['cover']; ?>" alt=""> <?php echo strtoupper($cov['judul']); ?> </a></li>
         <?php } ?>
          </ul>
          <div class="social_area">
            <ul class="social_nav">
              <li class="facebook"><a href="#"></a></li>
              <li class="twitter"><a href="#"></a></li>
              <li class="flickr"><a href="#"></a></li>
              <li class="pinterest"><a href="#"></a></li>
              <li class="googleplus"><a href="#"></a></li>
              <li class="vimeo"><a href="#"></a></li>
              <li class="youtube"><a href="#"></a></li>
              <li class="mail"><a href="#"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>