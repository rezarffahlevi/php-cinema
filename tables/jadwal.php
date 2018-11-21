<?php
function tampilHalamann($tabel, $limit)
{
	include ('config/koneksi.php');
	$url=$_GET['page']="jadwal";
	$sql="SELECT COUNT(*) AS total FROM $tabel";
	$aksiQuery = $conn->query($sql);
	$hasil = mysqli_fetch_array($aksiQuery);
	$totalData = $hasil['total'];
	$totalHal = ceil($totalData / $limit);
	$hal = 1;
		while ($hal <= $totalHal) 
		{
			echo '<a class="fancybox-next" href="?page='.$url.'&hal='.$hal.'">'.'|'.$hal.'|'.'</a>';
				if ($hal < $totalHal) 
					echo " | ";
					$hal++;
		
		}
}
function aambilData($tabel, $join, $pk, $lagi, $fk, $joinlagi, $pkjl, $jl, $pl, $jlnih, $plpl, $urut, $hal=1, $limit)
{ include ('config/koneksi.php');
  $dataTable=array();
  $startRow=($hal-1) * $limit;
  $sql="SELECT * FROM $tabel a INNER JOIN $join b ON a.$pk = b.$pk INNER JOIN $lagi c ON b.$fk = c.$fk INNER JOIN $joinlagi d ON b.$pkjl = d.$pkjl INNER JOIN $jl e ON b.$pl = e.$pl INNER JOIN $jlnih f ON b.$plpl = f.$plpl ORDER BY b.$urut LIMIT $startRow, $limit";

  $query=mysqli_query($conn,$sql);

while ($data=mysqli_fetch_array($query))
	array_push($dataTable,$data);

return $dataTable;
                                                                                                                                           
} //akhir
?>
<section id="contentSection">
	<div class="row">

<form method="POST"><center>
	<input type="text" name="cari-judul" style=" width: 210px; height: 35px; border-radius: 5px; border:1px solid #d7d7d7;" placeholder="Cari Judul Film" id="myInput" onkeyup="myFunction()">&nbsp&nbsp
	<button name="cari" class="btn btn-info" style=""><i class="glyphicon glyphicon-search"></i> Cari</button>&nbsp&nbsp
	<button class="btn btn-info" type="back" name="back" title="kembali" onclick="history.go(-1)"><i class="glyphicon glyphicon-search"></i> Kembali</button>
		</center>
</form>
		<br>

<table class="table table-hover" id='myTable'>
	<tr style="background:#1995ff; color:white; font-family: Comic Sans MS">
		<th width="8">No</th>
<!-- 		<th width="140">Kode Film</th> -->
		<th width="200">Judul Film</th>
		<th width="120">Genre</th>
		<th width="100">Tahun</th>
		<th width="135">Negara</th>
		<th width="145">Tanggal Tayang</th>
		<th width="120">Jam</th>
		<th width="120">Harga</th>
		<th>Detail</th>
	</tr>

<?php

	if(isset($_POST['cari'])){
		$no=0;
		$judul=$_POST['cari-judul'];
		$kode=$_POST['cari-judul'];
		$sql=$conn->query("SELECT * FROM tb_jadwal a INNER JOIN tb_film b ON a.kode = b.kode INNER JOIN tb_tahun c ON b.id_tahun = c.id_tahun INNER JOIN tb_negara d ON b.id_negara = d.id_negara INNER JOIN tb_genre e ON b.id_genre = e.id_genre INNER JOIN tb_harga f ON b.id_harga = f.id_harga WHERE b.judul LIKE '%$judul%' OR b.kode LIKE '%$kode%'");
		while($row=$sql->fetch_assoc()){
		$no++; 
?>
	<tr class="info">
		<td><?php echo $no ?></td>
	<!-- 	<td><?php echo $row['kode'] ?></td> -->
		<td><?php echo $row['judul'] ?></td>
		<td><?php echo $row['genre'] ?></td>
		<td><?php echo $row['tahun'] ?></td>
		<td><?php echo $row['negara'] ?></td>
		<td><?php echo $row['tgl_tayang'] ?></td>
		<td><?php echo $row['jam'] ?></td>
		<td><?php echo "Rp. ".$row['harga'] ?></td>
		<td><a href="?detail=<?php echo $row['kode']; ?>"><i class="glyphicon glyphicon-chevron-down"></i></a></td>
	</tr>
<?php } ?>
</table>
<br><br>

<?php
	}
	 else{
	    $no=0;
	    $hal=1;
	    $perHalaman=5;
	    if (isset($_GET['hal']) && !empty($_GET['hal']))
	    	$hal = (int)$_GET['hal'];

	    $dataTable = aambilData('tb_jadwal', 'tb_film', 'kode', 'tb_tahun', 'id_tahun', 'tb_negara', 'id_negara', 'tb_genre', 'id_genre', 'tb_harga', 'id_harga', 'judul', $hal, $perHalaman);

	    foreach ($dataTable as $row){
	       $no++;
	?>
	<tr class="info">
		<td><?php echo $no ?></td>
	<!-- 	<td><?php echo $row['kode'] ?></td> -->
		<td><?php echo $row['judul'] ?></td>
		<td><?php echo $row['genre'] ?></td>
		<td><?php echo $row['tahun'] ?></td>
		<td><?php echo $row['negara'] ?></td>
		<td><?php echo $row['tgl_tayang'] ?></td>
		<td><?php echo $row['jam'] ?></td>
		<td><?php echo "Rp. ".$row['harga'] ?></td>
		<td><a href="?detail=<?php echo $row['kode']; ?>"><i class="glyphicon glyphicon-chevron-down"></i></a></td>
	</tr>
<?php }  echo "</table";?>

	<?php
	   echo "<br>";
	   echo tampilHalamann('tb_film',$perHalaman);
	   echo "<br><br><table>
	   			<tr>
					<td width='130'>Halaman ke</td>
					<td width='20'> : </td>
					<td>".$hal."</td>
				</tr>";
	   $totalData = $conn->query("SELECT COUNT(*) AS total FROM tb_film")->fetch_array();
	   echo "	<tr>
	   				<td>Data anda ada</td>
	   				<td> : </td>
	   				<td>".$totalData['total']."</td>
	   			</tr>
	   		</table>";
	   	}
	 ?>

	 	<br><br>
	</div>
</section>
	
<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {

      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>