<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: user_task_accept.proto

namespace User\Task\Accept;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *用户任务接受信息
 *
 * Generated from protobuf message <code>user.task.accept.UserTaskAcceptInfo</code>
 */
class UserTaskAcceptInfo extends \Google\Protobuf\Internal\Message
{
    /**
     *手机号码-必填
     *
     * Generated from protobuf field <code>string mobile = 1;</code>
     */
    private $mobile = '';
    /**
     *任务ID-必填
     *
     * Generated from protobuf field <code>string taskId = 2;</code>
     */
    private $taskId = '';
    /**
     *任务名称-必填
     *
     * Generated from protobuf field <code>string taskName = 3;</code>
     */
    private $taskName = '';
    /**
     *任务信息-选填
     *
     * Generated from protobuf field <code>string taskInfo = 4;</code>
     */
    private $taskInfo = '';
    /**
     *接受时间-必填
     *
     * Generated from protobuf field <code>int64 acceptTime = 5;</code>
     */
    private $acceptTime = 0;
    /**
     *安全校验码-必填
     *
     * Generated from protobuf field <code>string token = 6;</code>
     */
    private $token = '';
    /**
     *客户端平台 - ClientPlatform( WKWXAPP 挖矿WX小程序, WKIOS 挖矿APP IOS, WKANDROID 挖矿 APP ANDROID), 必填
     *
     * Generated from protobuf field <code>string clientPlatform = 7;</code>
     */
    private $clientPlatform = '';

    public function __construct() {
        \GPBMetadata\UserTaskAccept::initOnce();
        parent::__construct();
    }

    /**
     *手机号码-必填
     *
     * Generated from protobuf field <code>string mobile = 1;</code>
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     *手机号码-必填
     *
     * Generated from protobuf field <code>string mobile = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMobile($var)
    {
        GPBUtil::checkString($var, True);
        $this->mobile = $var;

        return $this;
    }

    /**
     *任务ID-必填
     *
     * Generated from protobuf field <code>string taskId = 2;</code>
     * @return string
     */
    public function getTaskId()
    {
        return $this->taskId;
    }

    /**
     *任务ID-必填
     *
     * Generated from protobuf field <code>string taskId = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTaskId($var)
    {
        GPBUtil::checkString($var, True);
        $this->taskId = $var;

        return $this;
    }

    /**
     *任务名称-必填
     *
     * Generated from protobuf field <code>string taskName = 3;</code>
     * @return string
     */
    public function getTaskName()
    {
        return $this->taskName;
    }

    /**
     *任务名称-必填
     *
     * Generated from protobuf field <code>string taskName = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTaskName($var)
    {
        GPBUtil::checkString($var, True);
        $this->taskName = $var;

        return $this;
    }

    /**
     *任务信息-选填
     *
     * Generated from protobuf field <code>string taskInfo = 4;</code>
     * @return string
     */
    public function getTaskInfo()
    {
        return $this->taskInfo;
    }

    /**
     *任务信息-选填
     *
     * Generated from protobuf field <code>string taskInfo = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setTaskInfo($var)
    {
        GPBUtil::checkString($var, True);
        $this->taskInfo = $var;

        return $this;
    }

    /**
     *接受时间-必填
     *
     * Generated from protobuf field <code>int64 acceptTime = 5;</code>
     * @return int|string
     */
    public function getAcceptTime()
    {
        return $this->acceptTime;
    }

    /**
     *接受时间-必填
     *
     * Generated from protobuf field <code>int64 acceptTime = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAcceptTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->acceptTime = $var;

        return $this;
    }

    /**
     *安全校验码-必填
     *
     * Generated from protobuf field <code>string token = 6;</code>
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     *安全校验码-必填
     *
     * Generated from protobuf field <code>string token = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->token = $var;

        return $this;
    }

    /**
     *客户端平台 - ClientPlatform( WKWXAPP 挖矿WX小程序, WKIOS 挖矿APP IOS, WKANDROID 挖矿 APP ANDROID), 必填
     *
     * Generated from protobuf field <code>string clientPlatform = 7;</code>
     * @return string
     */
    public function getClientPlatform()
    {
        return $this->clientPlatform;
    }

    /**
     *客户端平台 - ClientPlatform( WKWXAPP 挖矿WX小程序, WKIOS 挖矿APP IOS, WKANDROID 挖矿 APP ANDROID), 必填
     *
     * Generated from protobuf field <code>string clientPlatform = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setClientPlatform($var)
    {
        GPBUtil::checkString($var, True);
        $this->clientPlatform = $var;

        return $this;
    }

}

