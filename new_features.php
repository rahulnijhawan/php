<?php
/**
 * The use operator has been extended to support importing functions and constants in addition to classes. This is achieved via the use function and use const constructs, respectively. 
 */
namespace rahul\misc {
	const age = 20;
	function fun() { echo __FUNCTION__;}
}
namespace {
	use const rahul\misc\age;
	echo age;	


	const ONE = 1;

	class A
	{
		const TWO = 2;
		const THREE = self::TWO + ONE;

		function printNumber()
		{
			printf("number %d %s", self::THREE, PHP_EOL);
		}
	}

	(new A())->printNumber();
	echo A::TWO;

	const ARR = [3,2];

	function variadicFun(...$args)
	{
		echo count($args);

	}

	variadicFun();
	variadicFun(1);

	// ... slap operator
	function slapOperator($a, $b)
	{
		var_dump($a, $b);
	}

	slapOperator(...ARR);


	/**
	 * Right associative ** exponent with **= shorthand assignment operator
	 */
	printf("2 ** 3 ==      %d\n", 2 ** 3);
	printf("2 ** 3 ** 2 == %d\n", 2 ** 3 ** 2);

	$a = 2;
	$a **= 3;
	printf("a ==           %d\n", $a);
}
?>