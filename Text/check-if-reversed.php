<?php

function checkIfReversed($firstString, $secondString) {
	$firstStringLength = strlen($firstString);
	$secondStringLength = strlen($secondString);

	if ($firstStringLength !== $secondStringLength) {
		return false;
	}

	for ($i = $firstStringLength; $i > 0; $i--) {
		$indexInOpposedString = ($firstStringLength - $i);

		if ($firstString[$i-1] !== $secondString[$indexInOpposedString]) {
			return false;
		}
	}

	return true;
}