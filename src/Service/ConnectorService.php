<?php

namespace KafkaConnectClient\Service;

class ConnectorService extends AbstractService
{   
    /**
    *  Get all connectors
    */
    public function getConnectors( $options = array() ) {
        return $this->client->request( 'connectors', 'get', $options );   
    }
    
    /**
    *  Create new connector
    */
    public function create( $options = array() ) {
        return $this->client->request( 'connectors', 'post', $options );
    }
    
    /**
    *  Get Connector details
    */
    public function getConnector( $name ) {
        return $this->client->request( 'connectors/'.$name, 'get' );   
    }

    /**
    *  Get Connector config
    */
    public function getConnectorConfig( $name ) {
        return $this->client->request( 'connectors/'.$name. '/config', 'get' );   
    }
    
    /**
    *  Update connector config
    */
    public function update( $name, $options = array() ) {
        return $this->client->request( 'connectors/'.$name. '/config', 'put', $options );   
    }
    
    /**
    *  Delete a connector  
    */
    public function delete( $name ) {
        return $this->client->request( 'connectors/'.$name, 'delete' );   
    }

    /**
    *  Get Connector Status
    */
    public function getConnectorStatus( $name ) {
        return $this->client->request( 'connectors/'.$name. '/status', 'get' );   
    }
    
    /**
    *  Restart Connector
    */
    public function restartConnetor( $name, $options = array() ) {
        return $this->client->request( 'connectors/'.$name. '/restart', 'post' );   
    }

    /**
    *  Pause Connector
    */
    public function pauseConnetor( $name, $options = array() ) {
        return $this->client->request( 'connectors/'.$name. '/pause', 'put' );   
    }

    /**
    *  Resume Connector
    */
    public function resumeConnetor( $name, $options = array() ) {
        return $this->client->request( 'connectors/'.$name. '/resume', 'put' );   
    }

    /**
    *  Get all connector tasks
    */
    public function getConnectorTasks( $name, $options = array() ) {
        return $this->client->request( 'connectors/'.$name. '/tasks', 'get', $options );   
    }

    /**
    *  Get connector task status
    */
    public function getConnectorTaskStatus( $name, $taskId, $options = array() ) {
        return $this->client->request( 'connectors/'.$name. '/tasks/'.$taskId. '/status', 'get', $options );   
    }

    /**
    * Restart connector task
    */
    public function restartConnectorTask( $name, $taskId, $options = array() ) {
        return $this->client->request( 'connectors/'.$name. '/tasks/'.$taskId. '/restart', 'get', $options );   
    }

}