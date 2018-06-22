<?php
// GENERATED CODE -- DO NOT EDIT!

namespace User\Greeter\Share;

/**
 * 用户分享贺卡服务类
 */
class UserShareGreeterCardServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 分享贺卡
     * @param \User\Greeter\Share\UserShareGreeterCardInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function share(\User\Greeter\Share\UserShareGreeterCardInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/user.greeter.share.UserShareGreeterCardService/share',
        $argument,
        ['\User\Greeter\Share\Result', 'decode'],
        $metadata, $options);
    }

}
