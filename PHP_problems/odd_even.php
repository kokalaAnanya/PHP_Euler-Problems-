<?php
function getNext($n)
{
	if ($n % 2 == 0) {
		return (int)($n / 2);
	} else {
		return ((3 * $n) + 1);
	}
}
?>

