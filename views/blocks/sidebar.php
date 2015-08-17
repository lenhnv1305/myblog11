<h3>Menu Chính</h3>
<ul class="nav nav-tabs nav-stacked">
    <?php if ($logged = isLogged()): ?>
    <li><a href="#">Xin chào <strong><?php echo $logged['Ten']; ?></strong></a></li>
    <li><a href="index.php?c=blog&m=list">Quản lý blog của bạn</a></li>
    <li><a href="index.php?c=auth&m=logout">Đăng xuất</a></li>
    <?php else: ?>
    <li><a href="index.php?c=auth&m=login">Đăng nhập</a></li>
    <li><a href="index.php?c=auth&m=register">Đăng ký</a></li>
    <?php endif; ?>
</ul>
