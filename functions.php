<?php
$file = fopen('./main.php', 'r');
echo $file;
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
// if($support){
//     $img = getElementsByTagName();
// 	echo $img;
// }
// $url = '';

// $dom = new DOMDocument();
// $dom -> loadHTML(file_get_contents($url, "r"));
// $tags = $dom -> getElementsByTagName('img');
// foreach($tags as $tag){
//     $dir = './assets/images/';
//     $imgSrc = $tag ->getAttribute('src');
//     $exif = exif_read_data($imgSrc);
//     foreach($exif as $key => $section){
//         foreach($section as $name =>$val){
//             echo $val;

//         }
//     }
//     $ext = '/\bjpg$/gi';
//     $img = imagecreatefromjpeg($dir . $imgSrc);
   
// }
?>