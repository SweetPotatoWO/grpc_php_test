<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Device\Outline;

/**
 * 设备下线服务
 */
class DeviceOutlineServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 设备下线
     * @param \Device\Outline\DeviceOutlineInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function outline(\Device\Outline\DeviceOutlineInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/device.outline.DeviceOutlineService/outline',
        $argument,
        ['\Device\Outline\Result', 'decode'],
        $metadata, $options);
    }

}
