<?php
function tampilHalamann($tabel, $limit)
{
	include ('config/koneksi.php');
	$url=$_GET['page']="tabel-tamu";
	$sql="SELECT COUNT(*) AS total FROM $tabel";
	$aksiQuery = $conn->query($sql);
	$hasil = mysqli_fetch_array($aksiQuery);
	$totalData = $hasil['total'];
	$totalHal = ceil($totalData / $limit);
	$hal = 1;
		while ($hal <= $totalHal) 
		{
			echo '<a class="fancybox-next" href="?page='.$url.'&hal='.$hal.'">'.'|'.$hal.'|'.'</a>';
				if ($hal < $totalhal) 
					echo " | ";
					$hal++;
		
		}
}
function ambilDataa($tabel, $urut, $hal=1, $limit)
{ include ('config/koneksi.php');
  $dataTable=array();
  $startRow=($hal-1) * $limit;
  $sql="SELECT * FROM $tabel ORDER BY $urut DESC limit $startRow, $limit";

  $query=mysqli_query($conn,$sql);

while ($data=mysqli_fetch_array($query)) 
	array_push($dataTable,$data);

return $dataTable;
                                                                                                                                           
} //akhir
?>
<section id="contentSection">
	<div class="row">
		<div class="contact_area">

<table class="table table-hover">
	<tr style="background:#1995ff; color:white; font-family: Comic Sans MS">
		<th width="5">No</th>
		<th width="340">Nama</th>
		<th width="340">Email</th>
		<th width="250">Status</th>
		<th width="20">Aksi</th>
	</tr>

<?php
	    $no=0;
	    $hal=1;
	    $perHalaman=5;
	    if (isset($_GET['hal']) && !empty($_GET['hal']))
	    	$hal = (int)$_GET['hal'];

	    $dataTable = ambilDataa('buku_tamu', 'tgl', $hal, $perHalaman);

	    foreach ($dataTable as $row){
	       $no++;
	?>
	<tr class="info">
		<td><?php echo $no ?></td>
		<td><?php echo $row['nama'] ?></td>
		<td><?php echo $row['email'] ?></td>
		<td><?php echo $row['status'] ?></td>
		<td>
		<a style="width:85px" href="?hapus-tamu=<?php echo $row['id_tamu']?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="btn btn-danger"><i class="glyphicon glyphicon-remove"> Hapus</i></a></td>
	</tr>
<?php } ?>
</table>
	<?php
	
	   echo "<br>";
	   echo tampilHalamann('buku_tamu',$perHalaman);
	   echo "<br><br><table>
	   			<tr>
					<td width='130'>Halaman ke</td>
					<td width='20'> : </td>
					<td>".$hal."</td>
				</tr>";
	   $totalDataa = $conn->query("SELECT COUNT(*) AS total FROM buku_tamu")->fetch_array();
	   echo "	<tr>
	   				<td>Data anda ada</td>
	   				<td> : </td>
	   				<td>".$totalDataa['total']."</td>
	   			</tr>
	   		</table>";
	 ?>


		</div>
	</div>
</section>
