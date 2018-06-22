<?php
// GENERATED CODE -- DO NOT EDIT!

namespace User\Greeter\Create;

/**
 * 用户贺卡创建服务类
 */
class UserCreateGreeterCardServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 用户贺卡创建
     * @param \User\Greeter\Create\UserCreateGreeterCardInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function create(\User\Greeter\Create\UserCreateGreeterCardInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/user.greeter.create.UserCreateGreeterCardService/create',
        $argument,
        ['\User\Greeter\Create\Result', 'decode'],
        $metadata, $options);
    }

}
