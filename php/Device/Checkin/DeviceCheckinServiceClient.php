<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Device\Checkin;

/**
 * 设备登记服务
 */
class DeviceCheckinServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 设备登记
     * @param \Device\Checkin\DeviceCheckinInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function checkin(\Device\Checkin\DeviceCheckinInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/device.checkin.DeviceCheckinService/checkin',
        $argument,
        ['\Device\Checkin\Result', 'decode'],
        $metadata, $options);
    }

}
