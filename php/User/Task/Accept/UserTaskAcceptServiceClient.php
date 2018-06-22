<?php
// GENERATED CODE -- DO NOT EDIT!

namespace User\Task\Accept;

/**
 * 用户接受任务服务类
 */
class UserTaskAcceptServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 接受任务
     * @param \User\Task\Accept\UserTaskAcceptInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function accept(\User\Task\Accept\UserTaskAcceptInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/user.task.accept.UserTaskAcceptService/accept',
        $argument,
        ['\User\Task\Accept\Result', 'decode'],
        $metadata, $options);
    }

}
