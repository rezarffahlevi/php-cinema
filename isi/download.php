<div id="contentSection">
<h3><center>Donwload covernya aja ya :v</h3>
<br><br><br><center>
	<?php
	$sql=$conn->query("SELECT * FROM tb_film");
	while($row=$sql->fetch_assoc()){
		?>
		<a href="upload/<?php echo $row['cover']; ?>"><img style="height:400;width:300" src="upload/<?php echo $row['cover']; ?>" onclick="return confirm('yakin?')"></a>
		<?php } ?>

		<br><br><br><br>
</div>