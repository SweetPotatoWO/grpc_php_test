<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: wx_application_user_service.proto.discardfile

namespace User\Wx\App;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *微信小程序用户信息
 *
 * Generated from protobuf message <code>user.wx.app.WXApplicationUserInfo</code>
 */
class WXApplicationUserInfo extends \Google\Protobuf\Internal\Message
{
    /**
     *手机号码-选填
     *
     * Generated from protobuf field <code>string mobile = 1;</code>
     */
    private $mobile = '';
    /**
     *邮箱-选填
     *
     * Generated from protobuf field <code>string email = 2;</code>
     */
    private $email = '';
    /**
     *昵称-选填
     *
     * Generated from protobuf field <code>string nickName = 3;</code>
     */
    private $nickName = '';
    /**
     *用户渠道-必填
     *
     * Generated from protobuf field <code>string userFromType = 4;</code>
     */
    private $userFromType = '';
    /**
     *头像-选填
     *
     * Generated from protobuf field <code>string avatar = 5;</code>
     */
    private $avatar = '';
    /**
     *用户操作类型-必填
     *
     * Generated from protobuf field <code>string userOperType = 6;</code>
     */
    private $userOperType = '';
    /**
     *微信ID-必填
     *
     * Generated from protobuf field <code>string wxID = 7;</code>
     */
    private $wxID = '';
    /**
     *安全校验码-必填
     *
     * Generated from protobuf field <code>string token = 8;</code>
     */
    private $token = '';
    /**
     *客户端平台 - ClientPlatform enum name value, 必填
     *
     * Generated from protobuf field <code>string clientPlatform = 9;</code>
     */
    private $clientPlatform = '';
    /**
     *注册时间
     *
     * Generated from protobuf field <code>int64 regTime = 10;</code>
     */
    private $regTime = 0;

    public function __construct() {
        \GPBMetadata\WxApplicationUserServiceProto::initOnce();
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
     *邮箱-选填
     *
     * Generated from protobuf field <code>string email = 2;</code>
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     *邮箱-选填
     *
     * Generated from protobuf field <code>string email = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->email = $var;

        return $this;
    }

    /**
     *昵称-选填
     *
     * Generated from protobuf field <code>string nickName = 3;</code>
     * @return string
     */
    public function getNickName()
    {
        return $this->nickName;
    }

    /**
     *昵称-选填
     *
     * Generated from protobuf field <code>string nickName = 3;</code>
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
     *用户渠道-必填
     *
     * Generated from protobuf field <code>string userFromType = 4;</code>
     * @return string
     */
    public function getUserFromType()
    {
        return $this->userFromType;
    }

    /**
     *用户渠道-必填
     *
     * Generated from protobuf field <code>string userFromType = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setUserFromType($var)
    {
        GPBUtil::checkString($var, True);
        $this->userFromType = $var;

        return $this;
    }

    /**
     *头像-选填
     *
     * Generated from protobuf field <code>string avatar = 5;</code>
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     *头像-选填
     *
     * Generated from protobuf field <code>string avatar = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setAvatar($var)
    {
        GPBUtil::checkString($var, True);
        $this->avatar = $var;

        return $this;
    }

    /**
     *用户操作类型-必填
     *
     * Generated from protobuf field <code>string userOperType = 6;</code>
     * @return string
     */
    public function getUserOperType()
    {
        return $this->userOperType;
    }

    /**
     *用户操作类型-必填
     *
     * Generated from protobuf field <code>string userOperType = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setUserOperType($var)
    {
        GPBUtil::checkString($var, True);
        $this->userOperType = $var;

        return $this;
    }

    /**
     *微信ID-必填
     *
     * Generated from protobuf field <code>string wxID = 7;</code>
     * @return string
     */
    public function getWxID()
    {
        return $this->wxID;
    }

    /**
     *微信ID-必填
     *
     * Generated from protobuf field <code>string wxID = 7;</code>
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
     * Generated from protobuf field <code>string token = 8;</code>
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     *安全校验码-必填
     *
     * Generated from protobuf field <code>string token = 8;</code>
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
     *客户端平台 - ClientPlatform enum name value, 必填
     *
     * Generated from protobuf field <code>string clientPlatform = 9;</code>
     * @return string
     */
    public function getClientPlatform()
    {
        return $this->clientPlatform;
    }

    /**
     *客户端平台 - ClientPlatform enum name value, 必填
     *
     * Generated from protobuf field <code>string clientPlatform = 9;</code>
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
     *注册时间
     *
     * Generated from protobuf field <code>int64 regTime = 10;</code>
     * @return int|string
     */
    public function getRegTime()
    {
        return $this->regTime;
    }

    /**
     *注册时间
     *
     * Generated from protobuf field <code>int64 regTime = 10;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRegTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->regTime = $var;

        return $this;
    }

}
