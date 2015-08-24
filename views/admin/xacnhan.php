<h2>Form xác nhân đơn hàng</h2>
<table class="table table-bordered">
    <tr>
        <th>#</th>
        <th>ID Của khách hàng</th>
        <th>Tên sản phẩm</th>
        <th>Màn hình</th>
        <th>Ram</th>
        <th>Pin</th>
        <th>Bộ nhớ trong</th>
        <th>Giá</th>
        <th></th>
        <th></th>
    </tr>
    <?php
        $i = 0;
        $total = 0;
        /*var_dump($blogs);die;*/
        foreach ($dienthoai as $key => $b):
        $i++;
        
    ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $b['user_id']?></td>
        <td><?php echo $b['TenSP']; ?></td>
        <td><img width='200px' src='<?php echo $b['HinhAnh'];?>'/></td>
        <td><?php echo $b['ManHinh']; ?></td>
        <td><?php echo $b['Ram']; ?></td>
        <td><?php echo $b['Pin']; ?></td>
        <td><?php echo $b['BoNhoTrong']; ?></td>
        <td><?php echo $b['Gia']; ?></td>
        <td>
            <form id='frmblog' method='post' action="index.php?c=admin&m=xoaSPGioHang">
                <input type='hidden' name='<?php echo "inputXoa".$b['id_giohang'];?>' value="<?php echo $b['id_giohang']; ?>"></input>
                <input type='submit' class="btn btn-primary" onClick = "return confirm('Bạn có muốn xóa sản phẩm này?')" value='Xóa SP'></input>
            </form>
        </td>
        <td>
            <form id='frmblog' method='post' action="index.php?c=admin&m=confirm">
                <input type='hidden' name='<?php echo "inputXacNhan".$b['id_giohang'];?>' value="<?php echo $b['id_giohang'];?>"></input>
                <input type='submit' class="btn btn-primary" onClick = "return confirm('Bạn muốn xác nhận sản phẩm này?')" value='Xác nhận đã thanh toán'></input>
            </form>
        </td>
   
    </tr>
    <?php        
   
        endforeach;
    ?>

</table>