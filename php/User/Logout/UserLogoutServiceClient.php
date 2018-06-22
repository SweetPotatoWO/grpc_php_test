<?php
// GENERATED CODE -- DO NOT EDIT!

namespace User\Logout;

/**
 * 用户登出服务
 */
class UserLogoutServiceClient extends \Grpc\BaseStub {

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
     * @param \User\Logout\UserLogoutInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function logout(\User\Logout\UserLogoutInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/user.logout.UserLogoutService/logout',
        $argument,
        ['\User\Logout\Result', 'decode'],
        $metadata, $options);
    }

}
