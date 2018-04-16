# kafka-connect-php-api
This is a PHP Client to consume Kafka Connect Rest API. Please check this document of Rest API for all the details, https://docs.confluent.io/current/connect/restapi.html

## Installation
1. Add respository in composer.json
```sh
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/Chintanvpatel/kafka-connect-php-api"
    }
]
```

2. Add as dependency in require block
```sh
"require": {
    "Chintanvpatel/kafka-connect-php-api": "dev-master"
}
```

## How to Use?
```sh
(Base URL of your Kafka Connect Rest Endpoint)
$baseUrl = 'https://www.exampleurl.com:8083';
```
// Example of List of the connectors
```sh
$client = new KafkaConnectClient\KafkaConnect(['baseUrl' => $baseUrl]);
$client->connectors()->getConnectors();
```
// Example of List of the connector plugins
```sh
$client = new KafkaConnectClient\KafkaConnect(['baseUrl' => $baseUrl]);
$client->connectors_plugins()->getConnectorPlugins();
```
## Important

 - We supports connectors and connector-plugins endpoints of kafka connect