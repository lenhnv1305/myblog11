<?php 
class HocSinh{
	public $ten;
	public $tuoi ;
}

$mang = array();

$obj1 = new HocSinh();
$obj1->ten="Lenh";
$obj1->tuoi=12;

$obj2 = new HocSinh();
$obj2->ten="Lenh";
$obj2->tuoi=13;

$mang[]=$obj1;
$mang[]=$obj2;

foreach ($mang as $key => $ten){
	if($key ==0)
		var_dump($mang[$key]);
}