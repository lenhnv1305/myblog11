<?php
function homepage_userblog(){
	$data = array();

	$currentUser = isLogged();

	$data['blogs'] = model('baiviet')->getArticleByUserId($currentUser['id']);
	/*var_dump($data);die;*/
	$data['template_file'] = 'homepage/home.php';
	render('Layout.php', $data);

}

function homepage_home(){
	$data = array();

	$currentUser = isLogged();

	$data['blogs'] = model('baiviet')-> getAllArticle();

	$data['template_file'] = 'homepage/home.php';
	render('Layout.php', $data);

}
?>