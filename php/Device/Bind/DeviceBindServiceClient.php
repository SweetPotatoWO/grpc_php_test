<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Device\Bind;

/**
 * 设备绑定服务
 */
class DeviceBindServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 设备绑定
     * @param \Device\Bind\DeviceBindInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function bind(\Device\Bind\DeviceBindInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/device.bind.DeviceBindService/bind',
        $argument,
        ['\Device\Bind\Result', 'decode'],
        $metadata, $options);
    }

}
