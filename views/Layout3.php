<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Blog Của Tôi</title>
    <link rel="stylesheet" href="./styles/css/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/css/styles.css">
    <script type="text/javascript" src="./styles/js/jquery.js"></script>
    <!-- chèn ckediter vào trong trang web-->
    <script language="javascript" src="../ckeditor/ckeditor.js" type="text/javascript"></script>

    <!-- chèn css cho khung comemnt-->
    <link rel="stylesheet" type="text/css" href="../plugin/styles.css" />
    <!-- chèn css cho bootstap slider-->
    <link rel="stylesheet" type="text/css" href="../styles/css/CSScuahang.css"/>
    <link rel="stylesheet" type="text/css" href="../styles/css/sanpham.css"/>
    <!-- chèn font awesome-->
    <link rel="stylesheet" href="../styles/font-awesome-4.4.0/css/font-awesome.min.css">
    
</head>
<body>
  <div class='container'>
    <div class='navbar navbar-inverse'>
      <div class='navbar-inner nav-collapse' style="height: auto;">
        <ul class="nav">
            <li class=""><a href="index.php?c=homepage&m=home">Trang chủ blog</a></li>
            <li class=""><a href="index.php?c=cuahang&m=home">Cửa hàng</a></li>
             <?php if ($logged = isLogged()): ?>
            <li><a href="#">Xin chào <strong><?php echo $logged['Ten']; ?></strong></a></li>
            <li class=""><a href="index.php?c=admin&m=home">Quản trị sản phẩm</a></li>
            <li><a href="index.php?c=blog&m=list">Quản lý blog của bạn</a></li>
            <li><a href="#" > ()<i class="fa fa-opencart"></i></a></li>
            <li><a href="index.php?c=auth&m=logout">Đăng xuất</a></li>
            <?php else: ?>
            <li><a href="index.php?c=auth&m=login">Đăng nhập</a></li>
            <li><a href="index.php?c=auth&m=register">Đăng ký</a></li>
            <?php endif; ?>
        </ul>
      </div>
    </div>
    <div id='content' class='row-fluid'>
        <div class='span12 main'>
            <?php include ROOT . DS . 'views' . DS . $template_file; ?>
        </div>
        
    </div>
  </div>
</body>
</html>