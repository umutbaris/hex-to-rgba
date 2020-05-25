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

		$hex = $this->determineHex($color);
		$rgb =  array_map('hexdec', $hex);
		
		$newAlpha = $this->determineAlpha($alpha);
		$rgba = 'rgba('.implode(",",$rgb).','.$newAlpha.')';

		return $rgba;
	}

	/**
	 * Determine hex value from color code
	 *
	 * @param string $color
	 * @return array
	 */
	public function determineHex($color):array{
		$color = $this->checkSquare($color);

		if (strlen($color) == 6) {
			$hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
		} elseif ( strlen( $color ) == 3 ) {
			$hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
		} else {
			throw new Exception('value is not valid');
		}

		return $hex;
	}

	/**
	 * Caclulate new alpha
	 *
	 * @param float $alpha
	 * @return string
	 */
	public function determineAlpha($alpha):string{
		$newAlpha = 1.0;
		if($alpha < 1)
			$newAlpha = substr( $alpha, 1 );

		return $newAlpha;
	}

	/**
	 * Check color value to exist square value
	 *
	 * @param array $color
	 * @return string
	 */
	public function checkSquare($color):string{

		if ($color[0] == '#' ) 
			$color = substr( $color, 1 );

		return $color;
	}
}

	$class = new IncludeMehodClass();
	echo $class->convertHexToRgba($argv[1], $argv[2]) . "\n";
	// echo $class->convertHexToRgba('#FFFFFF', 1 ). "\n";
	// echo $class->convertHexToRgba('FFF', .5 ). "\n";
	// echo $class->convertHexToRgba('FFFFFF', 1 ). "\n";