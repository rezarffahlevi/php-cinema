<?php
function tampilHalaman($tabel, $limit)
{
	include ('../config/koneksi.php');
	$url=$_GET['page']="tabel-film";
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
function ambilData($tabel, $join, $pk, $lagi, $fk, $joinlagi, $pkjl, $jl, $pl, $jlnih, $plpl, $urut, $hal=1, $limit)
{ include ('../config/koneksi.php');
  $dataTable=array();
  $startRow=($hal-1) * $limit;
  $sql="SELECT * FROM $tabel a INNER JOIN $join b ON a.$pk = b.$pk INNER JOIN $lagi c ON b.$fk = c.$fk INNER JOIN $joinlagi d ON b.$pkjl = d.$pkjl INNER JOIN $jl e ON b.$pl = e.$pl INNER JOIN $jlnih f ON b.$plpl = f.$plpl ORDER BY b.$urut LIMIT $startRow, $limit";

  $query=mysqli_query($conn,$sql);

while ($data=mysqli_fetch_array($query))
	array_push($dataTable,$data);

return $dataTable;
                                                                                                                                           
} //akhir