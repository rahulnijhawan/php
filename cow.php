<?php
// copy on write(cow)

// copy on write.
$a = "ra";

$b = $a;

echo $b.' '.$a."\n";
debug_zval_dump($b);

$b .= ' rahul';
debug_zval_dump($b);
echo $b.' '.$a."\n";

function refArray(&$arr)
{
	$arr[0] = 12;
	debug_zval_dump($arr);
}

$a = [1,2,3];

refArray($a);
debug_zval_dump($a);
var_dump($a);