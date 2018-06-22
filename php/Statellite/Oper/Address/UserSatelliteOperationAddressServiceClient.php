<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Statellite\Oper\Address;

/**
 * 用户微信操控地址服务类
 */
class UserSatelliteOperationAddressServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 操控地址接口
     * @param \Statellite\Oper\Address\UserSatelliteOperationAddressInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function operAddr(\Statellite\Oper\Address\UserSatelliteOperationAddressInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/statellite.oper.address.UserSatelliteOperationAddressService/operAddr',
        $argument,
        ['\Statellite\Oper\Address\Result', 'decode'],
        $metadata, $options);
    }

}
