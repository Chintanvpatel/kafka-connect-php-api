<?php

namespace KafkaConnectClient\Service;

use KafkaConnectClient\KafkaConnect;

abstract class AbstractService {
    
    /**
     * @var GetKafkaConnectClient
     */
    protected $client;
    
    public function __construct( KafkaConnect $client ) {
            $this->client = $client;
    }
}