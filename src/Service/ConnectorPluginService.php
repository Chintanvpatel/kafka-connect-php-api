<?php

namespace KafkaConnectClient\Service;

class ConnectorPluginService extends AbstractService
{   
    /**
    *  Get all available connector plugins
    */
    public function getConnectorPlugins( $options = array() ) {
        return $this->client->request( 'connector-plugins', 'get', $options );   
    }
    
    /**
    *  Validate kafka plugin config
    */
    public function validateKafkaPluginConfig( $name, $options = array() ) {
        return $this->client->request( 'connector-plugins/'.$name.'/config/validate', 'put', $options );
    }
}