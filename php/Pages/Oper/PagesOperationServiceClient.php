<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Pages\Oper;

/**
 * 页面操作服务类
 */
class PagesOperationServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 页面访问API
     * @param \Pages\Oper\PagesOperationInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function access(\Pages\Oper\PagesOperationInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/pages.oper.PagesOperationService/access',
        $argument,
        ['\Pages\Oper\Result', 'decode'],
        $metadata, $options);
    }

}
