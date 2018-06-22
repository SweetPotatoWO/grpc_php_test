<?php
// GENERATED CODE -- DO NOT EDIT!

namespace User\Login;

/**
 * 用户登录服务类
 */
class UserLoginServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 登录信息
     * @param \User\Login\UserLoginInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function login(\User\Login\UserLoginInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/user.login.UserLoginService/login',
        $argument,
        ['\User\Login\Result', 'decode'],
        $metadata, $options);
    }

}
