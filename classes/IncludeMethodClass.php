<?php

class IncludeMehodClass{
/**
 * Hex values converting to rgba
 *
 * @param string $color
 * @param float $alpha
 * @return string
 */
public function convertHexToRgba( string $color, float $alpha ):string {
	if(empty($color) || empty($alpha))
	throw new Exception('Please enter a color and alpha vlaue');

	if ($color[0] == '#' ) {
		$color = substr( $color, 1 );
	}

	if (strlen($color) == 6) {
		$hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
	} elseif ( strlen( $color ) == 3 ) {
		$hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
	} else {
		throw new Exception('value is not valid');
	}

	$rgb =  array_map('hexdec', $hex);

	if($alpha >= 1){
		$alpha = 1.0;
	} else {
		$alpha = substr( $alpha, 1 );
	}

	$rgba = 'rgba('.implode(",",$rgb).','.$alpha.')';

	return $rgba;
	}
}
$class = new IncludeMehodClass();
echo $class->convertHexToRgba('FFFFFF', 1 );