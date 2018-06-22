<?php
// GENERATED CODE -- DO NOT EDIT!

namespace User\Appointment;

/**
 * 用户预约服务类
 */
class UserAppointmentServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 预约
     * @param \User\Appointment\UserAppointmentInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function appointment(\User\Appointment\UserAppointmentInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/user.appointment.UserAppointmentService/appointment',
        $argument,
        ['\User\Appointment\Result', 'decode'],
        $metadata, $options);
    }

}
