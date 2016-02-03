<?php
require_once '/Users/ktl99548/Documents/php-testing/vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('/Users/ktl99548/Documents/php-testing/twig/');
$twig = new Twig_Environment($loader);

$color_array = array();
for($i = 0; $i < 8; $i++){
	for($j = 0; $j < 8; $j++){
		if($i+$j % 2 != 0){
			$color_array[$i][$j] = 'b';
		}else{
			$color_array[$i][$j] = 'w';
		}
	}
}

$html = $twig->render('board.html', array(
	'color_array' => $color_array
	));
echo $html;
?>
