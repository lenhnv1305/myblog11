<style>
	#borderblogs{
		border-top: solid blue 1px
	}
	
</style>

<?php foreach ($blogs as $d): ?>
	<p id='borderblogs'></p>
<p class="label label-info">
	<?php 
	echo "Ngày đăng: "; echo $d['NgayDang'];
	
	?>
</p>
<h2> <?php echo $d['TieuDe'];?></h2>
<?php echo substr($d['NoiDung'], 0, 150); ?>
<form method='post' action='index.php?c=blog&m=xemchitiet'>
	<input type='hidden' name='IdBaiViet' value = "<?php echo $d['id']?>" ></input>
	<input  class = "btn btn-link" type='submit' value='Xem chi tiết'></input>
</form>
<p></p>
<p></p>
<?php endforeach;?>