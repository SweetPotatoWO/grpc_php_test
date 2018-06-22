<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Start\Point\Consume;

/**
 * 用户星点消费服务类
 */
class UserStarPointConsumeServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 消费
     * @param \Start\Point\Consume\UserStarPointConsumeInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function consume(\Start\Point\Consume\UserStarPointConsumeInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/start.point.consume.UserStarPointConsumeService/consume',
        $argument,
        ['\Start\Point\Consume\Result', 'decode'],
        $metadata, $options);
    }

}
