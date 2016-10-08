<?php 
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	
	interface iMethods
	{
		function method1();
	}

	abstract class AbstractClass implements iMethods
	{

	} 

/*	class child extends AbstractClass
	{}
*/	echo ucfirst(strtolower('DELI'));
 ?>