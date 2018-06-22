<?php
// GENERATED CODE -- DO NOT EDIT!

namespace App\Operation;

/**
 * app 操作服务类
 */
class ApplicationOperationServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * app 启动API
     * @param \App\Operation\ApplicationStartInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function appStart(\App\Operation\ApplicationStartInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/app.operation.ApplicationOperationService/appStart',
        $argument,
        ['\App\Operation\Result', 'decode'],
        $metadata, $options);
    }

    /**
     * app shutdown API
     * @param \App\Operation\ApplicationShutdownInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function appShutdown(\App\Operation\ApplicationShutdownInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/app.operation.ApplicationOperationService/appShutdown',
        $argument,
        ['\App\Operation\Result', 'decode'],
        $metadata, $options);
    }

}
