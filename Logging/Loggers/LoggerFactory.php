<?php
	namespace Loggers;

	class LoggerFactory
	{
		public function getLogger($loggerName)
		{
			switch ($loggerName) {
				case 'ELASTIC':
					
					break;
				
				default:

					throw new UnexpectedValueException("Error Processing Request");					
					break;
			}
		}
	}

?>