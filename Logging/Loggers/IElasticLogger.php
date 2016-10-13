<?php 

	namespace Logging\Loggers;

	use Logging\LogRecords\UserAccessLogRecord;

	abstract 
	class IElasticLogger 
	{
		protected $elasticSearchClient;
		
		public function createElasticClient()
		{
			$hosts = [
				'localhost:9200'
			];

			$this->elasticSearchClient = Elasticsearch\ClientBuilder::create()->
										setHosts($hosts)->build();
		}

		public function save(UserAccessLogRecord $logRecord)
		{
			
		}


	}
 ?>