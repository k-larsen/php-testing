<?php
require_once '/Users/ktl99548/Documents/php-testing/vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('/Users/ktl99548/Documents/php-testing/');
$twig = new Twig_Environment($loader);

$color_array = array();
for($i = 0; $i < 8; $i++){
	for($j = 0; $j < 8; $j++){
		if(($i+$j) % 2 != 0){ // number is odd
			$color_array[$i][$j] = 'b';
		}else{ // number is even
			$color_array[$i][$j] = 'w';
		}
	}
}

$html = $twig->render('board.html', array(
	'color_array' => $color_array
	));
echo $html;
?>
