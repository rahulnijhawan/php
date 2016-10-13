<?php 
	namespace Logging\LogRecords;

	class UserAccessLogRecord
	{

		const INDEX = 'user-access-log';
		const TYPE = 'user-activity';
		private $data;
		private $httpMethod;
		private $user;
		private $accessTime;
		private $errorMsg;

		public function __construct()
		{
			$dateTimeObj = new \DateTime();
			$this->accesstime = $dateTimeObj->getTimestamp();
		}

		public function setMethod($method)
		{
			$this->method = $method;
			return $this;

		}

		public function setData(array $data)
		{
			$this->data = $data;
			return $this;
		}

		public function setUser($user)
		{
			if (is_string($user)) {
				$this->user = $user;
				return $this;
			}
			
			throw new \UnexpectedValueException(
				sprintf("Expected string, given %s",gettype($user))
			);
			
		}

		public function getDocument()
		{
			return [
			    'index' => self::INDEX,
			    'type' => self::TYPE,
			    'body' => [
			    	'data' => $this->data,
			    	'method' => $this->httpMethod,
			    	'user' => $this->user,
			    	'time' => $this->accesstime,
			    ]
			];
		}

		public function __toString()
		{
			return sprintf("%s", $this->user);
		}

	}

 ?>