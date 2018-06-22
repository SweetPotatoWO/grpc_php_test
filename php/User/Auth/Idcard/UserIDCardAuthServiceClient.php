<?php
// GENERATED CODE -- DO NOT EDIT!

namespace User\Auth\Idcard;

/**
 * 用户身份证验证服务类
 */
class UserIDCardAuthServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 验证
     * @param \User\Auth\Idcard\UserIDCardAuthInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function auth(\User\Auth\Idcard\UserIDCardAuthInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/user.auth.idcard.UserIDCardAuthService/auth',
        $argument,
        ['\User\Auth\Idcard\Result', 'decode'],
        $metadata, $options);
    }

}
