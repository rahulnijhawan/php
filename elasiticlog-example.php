<?php
	ini_set('display_errors',1);
	require './vendor/autoload.php';

	use  Logging\LogRecords\UserAccessLogRecord;



	$hosts = [
				'localhost:9200'
			];

			$elasticSearchClient = Elasticsearch\ClientBuilder::create()->
										setHosts($hosts)->build();
	$params = [
    'index' => 'my_index',
    'type' => 'my_type',
    'id' => 'my_id',
    'body' => ['testField' => 'abc']
];

$userLog = new UserAccessLogRecord();
$userLog->setUser('rahul');
var_dump($userLog->getDocument());
$response = $elasticSearchClient->index($userLog->getDocument());
var_dump($response);
 ?>