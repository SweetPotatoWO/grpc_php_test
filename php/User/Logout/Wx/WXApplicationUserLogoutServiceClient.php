<?php
// GENERATED CODE -- DO NOT EDIT!

namespace User\Logout\Wx;

/**
 * 用户登出服务
 */
class WXApplicationUserLogoutServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 用户登出
     * @param \User\Logout\Wx\WXApplicationUserLogoutInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function logout(\User\Logout\Wx\WXApplicationUserLogoutInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/user.logout.wx.WXApplicationUserLogoutService/logout',
        $argument,
        ['\User\Logout\Wx\Result', 'decode'],
        $metadata, $options);
    }

}
