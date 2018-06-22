<?php
// GENERATED CODE -- DO NOT EDIT!

namespace User\Wx\App;

/**
 * 微信小程序用户服务类
 */
class WXApplicationUserInfoServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 采集微信小程序用户信息
     * @param \User\Wx\App\WXApplicationUserInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function acquisition(\User\Wx\App\WXApplicationUserInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/user.wx.app.WXApplicationUserInfoService/acquisition',
        $argument,
        ['\User\Wx\App\Result', 'decode'],
        $metadata, $options);
    }

}
