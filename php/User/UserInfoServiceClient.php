<?php
// GENERATED CODE -- DO NOT EDIT!

namespace User;

/**
 * 用户信息服务类
 */
class UserInfoServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 采集用户信息
     * @param \User\UserInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function acquisition(\User\UserInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/user.UserInfoService/acquisition',
        $argument,
        ['\User\Result', 'decode'],
        $metadata, $options);
    }

}
