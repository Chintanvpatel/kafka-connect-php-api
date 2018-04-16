<?php 

class KafkaConnctAPITest extends PHPUnit_Framework_TestCase{

    public function testCreateConnector(){
        $client = new KafkaConnectClient\KafkaConnect(
            array(
                'baseUrl'=>'http://127.0.0.1:8083/'
            ));

        $data['name'] =  'jdbc-source';
        $data['config'] = [
            'connector.class' => 'io.confluent.connect.jdbc.JdbcSourceConnector',
            'tasks.max' => '1',
            "topic.prefix"=> "",
            "table.whitelist"=>"system_plugin_history1",
            "connection.url"=>"jdbc:mysql://localhost:3306/winsight?user=root&password=",
            "incrementing.column.name"=>"id",
            "mode"=>"incrementing"
        ];
        
        $this->assertTrue($client->connectors()->create($data));
        
    }
	
    public function testGetAllConnectors(){
        $client = new KafkaConnectClient\KafkaConnect(
                array(
                    'baseUrl'=>'http://127.0.0.1:8083/'
                ));

        $this->assertTrue($client->connectors()->getConnectors());
    }
}