

<div class='noidungphai'>
<?php foreach( $data['dienthoai'] as $d) :?>
	<div class="box1">
		
		<img src='<?php echo $d['HinhAnh'];?>' class='img-rounded'/>
		
		<section>
			
			<ul>
				<h5><?php echo $d['TenSP'] ?></h5>
				<li>Màn hình: <?php echo $d['ManHinh'] ?></li>
				<li>Ram: <?php echo $d['Ram'] ?></li>
				<li>Pin: <?php echo $d['Pin'] ?></li>
				<li>Rom: <?php echo $d['BoNhoTrong'] ?></li>
				<li>Giá: <?php echo $d['Gia'] ?> đ</li>
			</ul>
			
		</section>
		<div style='clear: left; margin-left: 10px;'>
			<form method='post' action='index.php?c=cuahang&m=chovaogio'>
				<input type='submit' class="btn primary" value='Giỏ hàng'></input>
				<input type='hidden'  value='<?php echo $d['id_sp'];?>' name='id_sp'></input>
				<input type='hidden'  value='<?php echo $d['Gia'];?>' name='Gia'></input>
				<input type='hidden'  value='<?php echo $d['TenSP'];?>' name='TenSP'></input>
				<input type='hidden'  value='<?php echo $d['HinhAnh'];?>' name='HinhAnh'></input>
			</form>
		</div>
		
</div>

<?php endforeach;?>