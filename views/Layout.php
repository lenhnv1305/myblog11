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

</head>
<body>
  <div class='container'>
    <div class='navbar navbar-inverse'>
      <div class='navbar-inner nav-collapse' style="height: auto;">
        <ul class="nav">
            <li class=""><a href="index.php?c=homepage&m=home">Trang chủ blog</a></li>
            <li class=""><a href="index.php?c=cuahang&m=home">Cửa hàng</a></li>
        </ul>
      </div>
    </div>
    <div id='content' class='row-fluid'>
        <div class='span9 main'>
            <?php include ROOT . DS . 'views' . DS . $template_file; ?>
        </div>
        <div class='span3 sidebar'>
            <?php include ROOT . DS . 'views' . DS . 'blocks' . DS . 'sidebar.php'; ?>
        </div>
        </div>
  </div>
</body>
</html>