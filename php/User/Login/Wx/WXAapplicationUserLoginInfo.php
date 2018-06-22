<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: wx_application_user_login_service.proto.discardfile

namespace User\Login\Wx;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *用户登录信息
 *
 * Generated from protobuf message <code>user.login.wx.WXAapplicationUserLoginInfo</code>
 */
class WXAapplicationUserLoginInfo extends \Google\Protobuf\Internal\Message
{
    /**
     *手机号码-选填
     *
     * Generated from protobuf field <code>string mobile = 1;</code>
     */
    private $mobile = '';
    /**
     *登录时间-必填
     *
     * Generated from protobuf field <code>int64 loginTime = 2;</code>
     */
    private $loginTime = 0;
    /**
     *客户端平台 - ClientPlatform enum name value, 必填
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

    public function __construct() {
        \GPBMetadata\WxApplicationUserLoginServiceProto::initOnce();
        parent::__construct();
    }

    /**
     *手机号码-选填
     *
     * Generated from protobuf field <code>string mobile = 1;</code>
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     *手机号码-选填
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
     *登录时间-必填
     *
     * Generated from protobuf field <code>int64 loginTime = 2;</code>
     * @return int|string
     */
    public function getLoginTime()
    {
        return $this->loginTime;
    }

    /**
     *登录时间-必填
     *
     * Generated from protobuf field <code>int64 loginTime = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLoginTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->loginTime = $var;

        return $this;
    }

    /**
     *客户端平台 - ClientPlatform enum name value, 必填
     *
     * Generated from protobuf field <code>string clientPlatform = 3;</code>
     * @return string
     */
    public function getClientPlatform()
    {
        return $this->clientPlatform;
    }

    /**
     *客户端平台 - ClientPlatform enum name value, 必填
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

}

