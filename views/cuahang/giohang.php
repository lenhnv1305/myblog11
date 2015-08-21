<div style='margin-left: 10px'>
	<h2>Giỏ hàng</h2>
	<a href="index.php?c=cuahang&m=home" class='btn btn-success' style='color: white'>Tiếp tục mua hàng</a>
	<input type='submit' class = 'btn btn-success' value='Thanh toán'></input>
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
			<form id='<?php echo "frmSoLuong".$g->getID_SP();?>' method='post' action='index.php?c=cuahang&m=updateSoLuong'>
			<td>			
				<input id='<?php echo "inputSoLuong".$g->getID_SP();?>' type='text' value='<?php echo $g->getSoLuong();?>' name='<?php echo "SoLuong".$g->getID_SP();?>'></input>
				<input type='hidden' value ='<?php echo $g->getID_SP();?>' name='<?php echo "id_sp".$g->getID_SP();?>'></input>

			</td>
			</form>
			<form method='post' action='index.php?c=cuahang&m=xoasp'>	
			<td>
				<input name='<?php echo "id_sp".$g->getID_SP(); ?>'type='hidden' value='<?php echo $g->getID_SP();?>'></input>
				<input type='submit' value = 'Xóa'></input>
			</td>
			</form>	
			<script>
				$("<?php echo '#inputSoLuong'.$g->getID_SP();?>").blur(function() {
			  		$("<?php echo '#frmSoLuong'.$g->getID_SP();?>").submit();
				});
			</script>	
		</tr>
		<?php endforeach;?>
		
	</table>
	
</div>
