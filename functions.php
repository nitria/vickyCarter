<?php
$dom = new DOMDocument();

$dom->loadHTMLFile('main.php');
$img = $dom->getElementsByTagName('img');
foreach($img as $item){
    $item->getAttribute('src');
}

$support = false;
if(isset($_SERVER['HTTP_ACCEPT'])){
	$accept = $_SERVER['HTTP_ACCEPT'];
	$pos = stripos($accept, 'image/webp');
	if($pos === false){
		$support = false;
	}else{
		$support = true;
	}
}
if($support){
    $img = getElementsByTagName();
	echo $img;
}
?>