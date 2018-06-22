<?php
// GENERATED CODE -- DO NOT EDIT!

namespace User\Task\Finished;

/**
 * 用户任务完成服务类
 */
class UserTaskFinishedServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 任务完成
     * @param \User\Task\Finished\UserTaskFinishedInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function finished(\User\Task\Finished\UserTaskFinishedInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/user.task.finished.UserTaskFinishedService/finished',
        $argument,
        ['\User\Task\Finished\Result', 'decode'],
        $metadata, $options);
    }

}
