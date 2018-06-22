<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: user_logout_service.proto

namespace User\Logout;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *用户登出信息
 *
 * Generated from protobuf message <code>user.logout.UserLogoutInfo</code>
 */
class UserLogoutInfo extends \Google\Protobuf\Internal\Message
{
    /**
     *手机号码-必填
     *
     * Generated from protobuf field <code>string mobile = 1;</code>
     */
    private $mobile = '';
    /**
     *登出时间-必填
     *
     * Generated from protobuf field <code>int64 logoutTime = 2;</code>
     */
    private $logoutTime = 0;
    /**
     *客户端平台 - ClientPlatform( WKWXAPP 挖矿WX小程序, WKIOS 挖矿APP IOS, WKANDROID 挖矿 APP ANDROID), 必填
     *
     * Generated from protobuf field <code>string clientPlatform = 3;</code>
     */
    private $clientPlatform = '';
    /**
     *安全校验码-必填
     *
     * Generated from protobuf field <code>string token = 4;</code>
     */
    private $token = '';
    /**
     *微信ID-选填
     *
     * Generated from protobuf field <code>string wxID = 5;</code>
     */
    private $wxID = '';
    /**
     *QQtID-选填
     *
     * Generated from protobuf field <code>string qqID = 6;</code>
     */
    private $qqID = '';
    /**
     *新浪微博ID-选填
     *
     * Generated from protobuf field <code>string sinaWeiBoID = 7;</code>
     */
    private $sinaWeiBoID = '';
    /**
     *IP - 必填
     *
     * Generated from protobuf field <code>string ip = 8;</code>
     */
    private $ip = '';

    public function __construct() {
        \GPBMetadata\UserLogoutService::initOnce();
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
     *登出时间-必填
     *
     * Generated from protobuf field <code>int64 logoutTime = 2;</code>
     * @return int|string
     */
    public function getLogoutTime()
    {
        return $this->logoutTime;
    }

    /**
     *登出时间-必填
     *
     * Generated from protobuf field <code>int64 logoutTime = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLogoutTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->logoutTime = $var;

        return $this;
    }

    /**
     *客户端平台 - ClientPlatform( WKWXAPP 挖矿WX小程序, WKIOS 挖矿APP IOS, WKANDROID 挖矿 APP ANDROID), 必填
     *
     * Generated from protobuf field <code>string clientPlatform = 3;</code>
     * @return string
     */
    public function getClientPlatform()
    {
        return $this->clientPlatform;
    }

    /**
     *客户端平台 - ClientPlatform( WKWXAPP 挖矿WX小程序, WKIOS 挖矿APP IOS, WKANDROID 挖矿 APP ANDROID), 必填
     *
     * Generated from protobuf field <code>string clientPlatform = 3;</code>
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
     *安全校验码-必填
     *
     * Generated from protobuf field <code>string token = 4;</code>
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     *安全校验码-必填
     *
     * Generated from protobuf field <code>string token = 4;</code>
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
     *微信ID-选填
     *
     * Generated from protobuf field <code>string wxID = 5;</code>
     * @return string
     */
    public function getWxID()
    {
        return $this->wxID;
    }

    /**
     *微信ID-选填
     *
     * Generated from protobuf field <code>string wxID = 5;</code>
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
     *QQtID-选填
     *
     * Generated from protobuf field <code>string qqID = 6;</code>
     * @return string
     */
    public function getQqID()
    {
        return $this->qqID;
    }

    /**
     *QQtID-选填
     *
     * Generated from protobuf field <code>string qqID = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setQqID($var)
    {
        GPBUtil::checkString($var, True);
        $this->qqID = $var;

        return $this;
    }

    /**
     *新浪微博ID-选填
     *
     * Generated from protobuf field <code>string sinaWeiBoID = 7;</code>
     * @return string
     */
    public function getSinaWeiBoID()
    {
        return $this->sinaWeiBoID;
    }

    /**
     *新浪微博ID-选填
     *
     * Generated from protobuf field <code>string sinaWeiBoID = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setSinaWeiBoID($var)
    {
        GPBUtil::checkString($var, True);
        $this->sinaWeiBoID = $var;

        return $this;
    }

    /**
     *IP - 必填
     *
     * Generated from protobuf field <code>string ip = 8;</code>
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     *IP - 必填
     *
     * Generated from protobuf field <code>string ip = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setIp($var)
    {
        GPBUtil::checkString($var, True);
        $this->ip = $var;

        return $this;
    }

}

