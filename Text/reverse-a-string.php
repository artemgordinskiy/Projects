<?php

if (isset($_GET['str'])) {
	echo reverseString($_GET['str']);
}

function reverseString($string) {
	$stringLength = strlen($string);
	$reversedString = '';

	for ($i = $stringLength; $i > 0; $i--) {
		$reversedString .= $string[$i-1];
	}

	return $reversedString;
}