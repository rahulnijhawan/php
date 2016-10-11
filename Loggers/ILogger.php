<?php
abstract class ILogger
{
	const CRITICAL = 50;
	const ERROR = 40;
	const WARNING =	30;
	const INFO = 20;
	const DEBUG = 10;
	const NOTSET = 0;

	public function critical();
	public function error();
	public function warning();
	public function info();
	public function debug();

	public function log();
}

?>