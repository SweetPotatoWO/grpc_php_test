<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: wx_application_user_login_service.proto.discardfile

namespace User\Login\Wx;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>user.login.wx.Result</code>
 */
class Result extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ResponseEntity responseEntity = 1;</code>
     */
    private $responseEntity = null;

    public function __construct() {
        \GPBMetadata\WxApplicationUserLoginServiceProto::initOnce();
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

