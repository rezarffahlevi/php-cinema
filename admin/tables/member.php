

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Daftar Akun<small>Xyz</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="card-box table-responsive">

                        <!-- USER -->
                          <label>Member</label>
                          <table id="datatable-keytable" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th width="5">No</th>
                                <th width="120">Nama</th>
                                <th width="120">Username</th>
                                <th width="120">Email</th>
                                <th width="120">Tanggal Lahir</th>
                                <th width="120">No Telepon</th>
                                <th width="300">Alamat</th>
                                <th width="25">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
<?php
      $no=0;
      
      $sql=$conn->query("SELECT * FROM tb_login WHERE level='user' ORDER BY nama ASC");
      while($row=$sql->fetch_array()){
         $no++;
  ?>

                              <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $row['nama'] ?></td>
                                <td><?php echo $row['username'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['lahir'] ?></td>
                                <td><?php echo $row['notelp'] ?></td>
                                <td><?php echo $row['alamat'] ?></td>
                                <td><a href="?hapus-akun=<?php echo $row['username']?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                  <i class="glyphicon glyphicon-remove"></i></a></td>
                              </tr>
                            <?php } ?>

                            </tbody>
                          </table>
                          <br><br><br>

                         <!--  ADMIN -->
                         <label>Admin</label>
                           <table id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th width="5">No</th>
                                <th width="120">Nama</th>
                                <th width="120">Username</th>
                                <th width="120">Email</th>
                                <th width="120">Tanggal Lahir</th>
                                <th width="120">No Telepon</th>
                                <th width="300">Alamat</th>
                            
                              </tr>
                            </thead>

                            <tbody>
<?php
      $no=0;
      
      $sql=$conn->query("SELECT * FROM tb_login WHERE level='admin' ORDER BY nama ASC");
      while($row=$sql->fetch_array()){
         $no++;
  ?>

                              <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $row['nama'] ?></td>
                                <td><?php echo $row['username'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['lahir'] ?></td>
                                <td><?php echo $row['notelp'] ?></td>
                                <td><?php echo $row['alamat'] ?></td>
                              </tr>
                            <?php } ?>

                            </tbody>
                          </table>


                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>