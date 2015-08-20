

<div class='noidungphai'>
<?php foreach( $data['dienthoai'] as $d) :?>
	<div class="box1">
		<img src='<?php echo $d['HinhAnh'];?>' class='img-rounded'/>
		<div >
			
			<ul>
				<h5><?php echo $d['TenSP'] ?></h5>
				<li>Màn hình: <?php echo $d['ManHinh'] ?></li>
				<li>Ram:<?php echo $d['Ram'] ?></li>
				<li>Pin: <?php echo $d['Pin'] ?></li>
				<li>Bộ nhớ trong: <?php echo $d['BoNhoTrong'] ?></li>
				<li>Giá: <?php echo $d['Gia'] ?> đ</li>
			</ul>
			
		</div>
		<div style='clear: left; margin-left: 10px;'>
			<form method='post' action='index.php?c=cuahang&m=giohang'>
			<input type='button' class='btn btn-primary' value='Giỏ hàng'></input>
		</form>
		</div>
	</div>
<?php endforeach;?>
</div>