<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Device\Online;

/**
 * 设备上线服务
 */
class DeviceOnlineServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 设备上线
     * @param \Device\Online\DeviceOnlineInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function online(\Device\Online\DeviceOnlineInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/device.online.DeviceOnlineService/online',
        $argument,
        ['\Device\Online\Result', 'decode'],
        $metadata, $options);
    }

}
