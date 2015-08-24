
<div style='margin-left: 10px'>
	<h2>Thanh toán giỏ hàng</h2>
	<a href="index.php?c=cuahang&m=home" class='btn btn-success' style='color: white'>Tiếp tục mua hàng</a>
	<form id="frmSoLuong" method='post' action='index.php?c=cuahang&m=thanhtoan'>
	<input type='submit' class = 'btn btn-success' value='Xác nhận mua hàng'></input>
	<table class = 'table table-bordered' style='margin-top: 10px;'>
		<tr>
			<th>Tên điện thoại</th>
			<th>Hình ảnh</th>
			<th>Giá</th>
			<th>Thành tiền</th>
			<th>Số lượng</th>
		</tr>
		
		<?php foreach ($_SESSION['GioHang'] as $g) :?>
		<tr>
			<td><?php echo $g->getTenSP();?></td>
			<td><img src='<?php echo $g->getHinhAnh();?>' width='120px'/></td>
			<td><?php echo $g->getGia();?></td>
			<td><?php echo $g->getThanhTien();?></td>			
			
			<td>			
				<?php echo $g->getSoLuong();?>
				<input type='hidden' value ='<?php echo $g->getID_SP();?>' name='<?php echo "id_sp".$g->getID_SP();?>'></input>

			</td>
		
		</tr>
		<?php endforeach;?>
		
	</table>
	</form>
	
</div>
