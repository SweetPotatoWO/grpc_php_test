<?php
// GENERATED CODE -- DO NOT EDIT!

namespace User\Postcard\Create;

/**
 * 用户明信片创建服务类
 */
class UserCreatePostCardServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 用户明信片创建
     * @param \User\Postcard\Create\UserCreatePostCardInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function create(\User\Postcard\Create\UserCreatePostCardInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/user.postcard.create.UserCreatePostCardService/create',
        $argument,
        ['\User\Postcard\Create\Result', 'decode'],
        $metadata, $options);
    }

}
