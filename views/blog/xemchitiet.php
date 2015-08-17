<style>
	#borderblogs{
		border-top: solid blue 1px
	}
	#borderButtom{
		margin-bottom: 2px;
	}
	#btnSubmit{
		margin-top: 10px;

	}
	#divComment{
		margin-left: 75px;
	}

</style>

<?php foreach ($blogs as $d): ?>
	<p id='borderblogs'></p>
<p>
	<?php 
	echo "Ngày đăng: "; echo $d['NgayDang'];
	echo "<br />";
	?>
</p>
<h2><?php echo $d['TieuDe'];?></h2><br />
<p><?php echo $d['NoiDung']; ?><br /></p>
<p><?php echo $d['TacGia']; echo '<br />'; echo $d['GhiChu'];?></p>

<form id='formComment' method='post' action='index.php?c=blog&m=binhluan'>
	<input name='BlogId' type='hidden' value='<?php echo $d['id'];?>'></input>
	<input name='Ten' type='text' placeholder='Nhập tên...'></input>
	<input name='Email' type='email' required placeholder='Nhập tên địa chỉ email'></input>
	<textarea id='inputComments' name='Comment'></textarea>
	<script type="text/javascript">CKEDITOR.replace('inputComments'); </script>
	<input id='btnSubmit' type='submit' value='Bình luận'></input>
</form>

<div id='divComment'>
	<?php
	// Error reporting:
	error_reporting(E_ALL^E_NOTICE);

	include ROOT. DS . "plugin". DS. "connect.php";
	include ROOT. DS . "plugin". DS. "comment.class.php";
	/*
	/	Select all the comments and populate the $comments array with objects
	*/

	$comments = array();
	$result = mysql_query("SELECT * FROM binhluan ORDER BY Ngay desc");

	while($row = mysql_fetch_assoc($result))
	{

		$comments[] = new Comment($row);
	}
	?>


	<?php

	/*
	/	Output the comments one by one:
	*/

	foreach($comments as $c){
		echo $c->markup();
	}

	?>

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript" src="../../plugin/script.js"></script>

</div>


<p></p>
<p id=borderButtom></p>
<?php endforeach;?>