

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Film<small>Admin</small></h2>
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

                        <a href="?tambah=film" class="btn btn-primary"><i class="glyphicon glyphicon-facetime-video"></i> Tambah Film</a>
                        <br><br>

                          <table id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th width="8">No</th>
                                <th width="140">Kode Film</th>
                                <th width="200">Judul Film</th>
                                <th width="120">Genre</th>
                                <th width="100">Tahun</th>
                                <th width="135">Negara</th>
                                <th width="145">Tanggal Tayang</th>
                                <th width="120">Harga</th>
                                <th>Detail</th>
                                <th width="25">Aksi</th>
                              </tr>
                            </thead>


                            <tbody>
<?php
      $no=0;
      $hal=1;
      $perHalaman=1111115;
      if (isset($_GET['hal']) && !empty($_GET['hal']))
        $hal = (int)$_GET['hal'];

      $dataTable = ambilData('tb_jadwal', 'tb_film', 'kode', 'tb_tahun', 'id_tahun', 'tb_negara', 'id_negara', 'tb_genre', 'id_genre', 'tb_harga', 'id_harga', 'judul', $hal, $perHalaman);

      foreach ($dataTable as $row){
         $no++;
  ?>

                              <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo strtoupper($row['kode']) ?></td>
                                <td><b><?php echo strtoupper($row['judul']) ?></td>
                                <td><?php echo $row['genre'] ?></td>
                                <td><?php echo $row['tahun'] ?></td>
                                <td><?php echo $row['negara'] ?></td>
                                <td><?php echo $row['tgl_tayang'] ?></td>
                                <td><?php echo "Rp. ".$row['harga'] ?></td>
                                <td><a href="?detail=<?php echo $row['kode']; ?>"><i  class="glyphicon glyphicon-menu-down"></i></a></td>
                                <td><a href="?edit=<?php echo $row['kode']?>"><i class="glyphicon glyphicon-pencil"></i></a> 

                                <a href="?hapus-film=<?php echo $row['kode']?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><i class="glyphicon glyphicon-remove"></i></a></td>
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