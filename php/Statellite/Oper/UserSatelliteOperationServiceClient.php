<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Statellite\Oper;

/**
 * 用户卫星操控服务类
 */
class UserSatelliteOperationServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 操控
     * @param \Statellite\Oper\UserSatelliteOperationInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function operation(\Statellite\Oper\UserSatelliteOperationInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/statellite.oper.UserSatelliteOperationService/operation',
        $argument,
        ['\Statellite\Oper\Result', 'decode'],
        $metadata, $options);
    }

}
