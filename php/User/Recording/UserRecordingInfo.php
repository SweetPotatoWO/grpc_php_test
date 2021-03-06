<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: user_recording_service.proto

namespace User\Recording;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *用户录音信息
 *
 * Generated from protobuf message <code>user.recording.UserRecordingInfo</code>
 */
class UserRecordingInfo extends \Google\Protobuf\Internal\Message
{
    /**
     *手机号码-必填
     *
     * Generated from protobuf field <code>string mobile = 1;</code>
     */
    private $mobile = '';
    /**
     *声音ID - 必填
     *
     * Generated from protobuf field <code>string voiceId = 2;</code>
     */
    private $voiceId = '';
    /**
     *声音链接 - 选填
     *
     * Generated from protobuf field <code>string voiceLink = 4;</code>
     */
    private $voiceLink = '';
    /**
     *昵称-选填
     *
     * Generated from protobuf field <code>string nickName = 5;</code>
     */
    private $nickName = '';
    /**
     *微信ID-选填
     *
     * Generated from protobuf field <code>string wxID = 6;</code>
     */
    private $wxID = '';
    /**
     *安全校验码-必填
     *
     * Generated from protobuf field <code>string token = 7;</code>
     */
    private $token = '';
    /**
     *客户端平台 - ClientPlatform( WKWXAPP 挖矿WX小程序, WKIOS 挖矿APP IOS, WKANDROID 挖矿 APP ANDROID), 必填
     *
     * Generated from protobuf field <code>string clientPlatform = 8;</code>
     */
    private $clientPlatform = '';
    /**
     *录制时间-必填
     *
     * Generated from protobuf field <code>int64 recordingTime = 9;</code>
     */
    private $recordingTime = 0;

    public function __construct() {
        \GPBMetadata\UserRecordingService::initOnce();
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
     *声音ID - 必填
     *
     * Generated from protobuf field <code>string voiceId = 2;</code>
     * @return string
     */
    public function getVoiceId()
    {
        return $this->voiceId;
    }

    /**
     *声音ID - 必填
     *
     * Generated from protobuf field <code>string voiceId = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setVoiceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->voiceId = $var;

        return $this;
    }

    /**
     *声音链接 - 选填
     *
     * Generated from protobuf field <code>string voiceLink = 4;</code>
     * @return string
     */
    public function getVoiceLink()
    {
        return $this->voiceLink;
    }

    /**
     *声音链接 - 选填
     *
     * Generated from protobuf field <code>string voiceLink = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setVoiceLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->voiceLink = $var;

        return $this;
    }

    /**
     *昵称-选填
     *
     * Generated from protobuf field <code>string nickName = 5;</code>
     * @return string
     */
    public function getNickName()
    {
        return $this->nickName;
    }

    /**
     *昵称-选填
     *
     * Generated from protobuf field <code>string nickName = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setNickName($var)
    {
        GPBUtil::checkString($var, True);
        $this->nickName = $var;

        return $this;
    }

    /**
     *微信ID-选填
     *
     * Generated from protobuf field <code>string wxID = 6;</code>
     * @return string
     */
    public function getWxID()
    {
        return $this->wxID;
    }

    /**
     *微信ID-选填
     *
     * Generated from protobuf field <code>string wxID = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setWxID($var)
    {
        GPBUtil::checkString($var, True);
        $this->wxID = $var;

        return $this;
    }

    /**
     *安全校验码-必填
     *
     * Generated from protobuf field <code>string token = 7;</code>
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     *安全校验码-必填
     *
     * Generated from protobuf field <code>string token = 7;</code>
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
     * Generated from protobuf field <code>string clientPlatform = 8;</code>
     * @return string
     */
    public function getClientPlatform()
    {
        return $this->clientPlatform;
    }

    /**
     *客户端平台 - ClientPlatform( WKWXAPP 挖矿WX小程序, WKIOS 挖矿APP IOS, WKANDROID 挖矿 APP ANDROID), 必填
     *
     * Generated from protobuf field <code>string clientPlatform = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setClientPlatform($var)
    {
        GPBUtil::checkString($var, True);
        $this->clientPlatform = $var;

        return $this;
    }

    /**
     *录制时间-必填
     *
     * Generated from protobuf field <code>int64 recordingTime = 9;</code>
     * @return int|string
     */
    public function getRecordingTime()
    {
        return $this->recordingTime;
    }

    /**
     *录制时间-必填
     *
     * Generated from protobuf field <code>int64 recordingTime = 9;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRecordingTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->recordingTime = $var;

        return $this;
    }

}

