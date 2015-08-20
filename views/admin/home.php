<h3>Danh sách các sản phẩm</h3>
<p>
    <a href="index.php?c=admin&m=themsp" class="btn btn-primary">Thêm sản phẩm mới</a>
</p>
<table class="table table-bordered">
    <tr>
        <th>#</th>
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
        foreach ($dienthoai as $b):
        $i++;
        //$total += intval($b['total']);
    ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $b['TenSP']; ?></td>
        <td><img width='200px' src='<?php echo $b['HinhAnh'];?>'/></td>
        <td><?php echo $b['ManHinh']; ?></td>
        <td><?php echo $b['Ram']; ?></td>
        <td><?php echo $b['Pin']; ?></td>
        <td><?php echo $b['BoNhoTrong']; ?></td>
        <td><?php echo $b['Gia']; ?></td>
        <td>
            <form id='frmblog' method='post' action="index.php?c=admin&m=xoasp">
                <input type='hidden' name='id_sp' value="<?php echo $b['id_sp']; ?>"></input>
                <input type='submit' class="btn btn-primary" onClick = "return confirm('Bạn có muốn xóa sản phẩm này?')" value='Xóa SP'></input>
            </form>
        </td>
        <td>
            <form id='frmblog' method='post' action="index.php?c=admin&m=suasp">
                <input type='hidden' name='id_sp' value="<?php echo $b['id_sp'];?>"></input>
                <input type='submit' class="btn btn-primary" value='Sửa SP'></input>
            </form>
        </td>
    </tr>
    <?php        
   
        endforeach;
    ?>

</table>