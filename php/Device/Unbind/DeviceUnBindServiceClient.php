<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Device\Unbind;

/**
 * 设备解除绑定服务
 */
class DeviceUnBindServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 设备解除绑定
     * @param \Device\Unbind\DeviceUnBindInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function unBind(\Device\Unbind\DeviceUnBindInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/device.unbind.DeviceUnBindService/unBind',
        $argument,
        ['\Device\Unbind\Result', 'decode'],
        $metadata, $options);
    }

}
