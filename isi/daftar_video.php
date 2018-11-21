      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="latest_post">
          <h2><span>Paling Sering dilihat</span></h2>
          <div class="latest_post_container">
            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
            <ul class="latest_postnav">
        <?php
          $sql=$conn->query("SELECT * FROM tb_film LIMIT 0, 5");
          while ($cov=$sql->fetch_array()) {
        ?>
              <li>
                <div class="media"> <a href="upload/<?php echo $cov['cover']; ?>" class="media-left"> <img alt="" src="upload/<?php echo $cov['cover']; ?>"> </a>
                  <div class="media-body"> <a href="upload/<?php echo $cov['cover']; ?>" class="catg_title"> <?php echo strtoupper($cov['judul']); ?> </a> </div>
                </div>
              </li>
        <?php } ?>
            </ul>
            <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
          </div>
        </div>
      </div>