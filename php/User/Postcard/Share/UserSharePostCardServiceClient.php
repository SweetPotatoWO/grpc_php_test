<?php
// GENERATED CODE -- DO NOT EDIT!

namespace User\Postcard\Share;

/**
 * 用户分享明信片服务类
 */
class UserSharePostCardServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 分享明信片
     * @param \User\Postcard\Share\UserSharePostCardInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function share(\User\Postcard\Share\UserSharePostCardInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/user.postcard.share.UserSharePostCardService/share',
        $argument,
        ['\User\Postcard\Share\Result', 'decode'],
        $metadata, $options);
    }

}
