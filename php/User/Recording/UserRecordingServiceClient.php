<?php
// GENERATED CODE -- DO NOT EDIT!

namespace User\Recording;

/**
 * 用户录音服务类
 */
class UserRecordingServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 录音
     * @param \User\Recording\UserRecordingInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function recording(\User\Recording\UserRecordingInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/user.recording.UserRecordingService/recording',
        $argument,
        ['\User\Recording\Result', 'decode'],
        $metadata, $options);
    }

}
