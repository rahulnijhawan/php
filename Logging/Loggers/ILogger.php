<?php
abstract class ILogger
{
	const CRITICAL = 50;
	const ERROR = 40;
	const WARNING =	30;
	const INFO = 20;
	const DEBUG = 10;
	const NOTSET = 0;

	protected $levelName = [
		self::CRITICAL => 'Critical',
		self::ERROR => 'Error',
		self::WARNING => 'Warning',
		self::INFO => 'Info',
		
	];

	public function critical($msg);
	public function error();
	public function warning();
	public function info();
	public function debug();
	protected function log($msg)
	public function log();
}

?>