<?php
// GENERATED CODE -- DO NOT EDIT!

namespace User\Advert;

/**
 * 用户点击广告服务类
 */
class UserClickAdvertServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 点击广告
     * @param \User\Advert\UserClickAdvertInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function click(\User\Advert\UserClickAdvertInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/user.advert.UserClickAdvertService/click',
        $argument,
        ['\User\Advert\Result', 'decode'],
        $metadata, $options);
    }

}
