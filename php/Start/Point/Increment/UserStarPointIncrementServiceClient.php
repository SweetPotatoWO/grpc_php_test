<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Start\Point\Increment;

/**
 * 用户星点增长服务类
 */
class UserStarPointIncrementServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 增长星点
     * @param \Start\Point\Increment\UserStarPointIncrementInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function increment(\Start\Point\Increment\UserStarPointIncrementInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/start.point.increment.UserStarPointIncrementService/increment',
        $argument,
        ['\Start\Point\Increment\Result', 'decode'],
        $metadata, $options);
    }

}
