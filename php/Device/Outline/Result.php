<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: device_outline.proto

namespace Device\Outline;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>device.outline.Result</code>
 */
class Result extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ResponseEntity responseEntity = 1;</code>
     */
    private $responseEntity = null;

    public function __construct() {
        \GPBMetadata\DeviceOutline::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.ResponseEntity responseEntity = 1;</code>
     * @return \ResponseEntity
     */
    public function getResponseEntity()
    {
        return $this->responseEntity;
    }

    /**
     * Generated from protobuf field <code>.ResponseEntity responseEntity = 1;</code>
     * @param \ResponseEntity $var
     * @return $this
     */
    public function setResponseEntity($var)
    {
        GPBUtil::checkMessage($var, \ResponseEntity::class);
        $this->responseEntity = $var;

        return $this;
    }

}

