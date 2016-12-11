<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$str = "fdfdff";
echo $str[10];

class StringIterate implements Iterator
{

}

foreach($str as $c) {
	echo $c;
}