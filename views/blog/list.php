<h3>Danh sách các blog</h3>
<p>
    <a href="index.php?c=blog&m=them" class="btn btn-primary">Thêm blog</a>
</p>
<table class="table table-bordered">
    <tr>
        <th>#</th>
        <th>Tên tiêu đề</th>
        <th>Tác giả</th>
        <th>Ngày đăng</th>
        <th>Ghi chú</th>
        <th></th>
        <th></th>
    </tr>
    <?php
        $i = 0;
        $total = 0;
        /*var_dump($blogs);die;*/
        foreach ($blogs as $b):
        $i++;
        //$total += intval($b['total']);
    ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $b['TieuDe']; ?></td>
        <td><?php echo $b['TacGia']; ?></td>
        <td><?php echo $b['NgayDang']; ?></td>
        <td><?php echo $b['GhiChu']; ?></td>
        <td>
            <form id='frmblog' method='post' action="index.php?c=blog&m=xoa">
                <input type='hidden' name='formBlogId' value="<?php echo $b['id'];?>"></input>
                <input type='submit' class="btn btn-primary" onClick = "return confirm('Bạn có muốn xóa bài này?')" value='Xóa Blog'></input>
            </form>
        </td>
        <td>
            <form id='frmblog' method='post' action="index.php?c=blog&m=sua">
                <input type='hidden' name='formBlogId' value="<?php echo $b['id'];?>"></input>
                <input type='submit' class="btn btn-primary" value='Sửa blog'></input>
            </form>
        </td>
    </tr>
    <?php        
        endforeach;
    ?>

</table>