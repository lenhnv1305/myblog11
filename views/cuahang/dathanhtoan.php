<h2>Sản phầm đã mua</h2>
<table class="table table-bordered">
    <tr>
        <th>#</th>
        <th>ID của khách hàng</th>
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
        <td style='color: blue'>Chúng tôi sẽ giao hàng trong thời gian sớm nhất</td>
    </tr>
    <?php        
   
        endforeach;
    ?>

</table>