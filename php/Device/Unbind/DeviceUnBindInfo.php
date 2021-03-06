<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: device_unbind.proto

namespace Device\Unbind;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *设备解除绑定信息
 *
 * Generated from protobuf message <code>device.unbind.DeviceUnBindInfo</code>
 */
class DeviceUnBindInfo extends \Google\Protobuf\Internal\Message
{
    /**
     *手机号码-必填
     *
     * Generated from protobuf field <code>string mobile = 1;</code>
     */
    private $mobile = '';
    /**
     *设备ID-必填
     *
     * Generated from protobuf field <code>string deviceId = 2;</code>
     */
    private $deviceId = '';
    /**
     *设备类型 - 必填
     *
     * Generated from protobuf field <code>string deviceType = 3;</code>
     */
    private $deviceType = '';
    /**
     *设备MAC地址 - 必填
     *
     * Generated from protobuf field <code>string deviceMAC = 4;</code>
     */
    private $deviceMAC = '';
    /**
     *设备IP - 选填
     *
     * Generated from protobuf field <code>string deviceIP = 5;</code>
     */
    private $deviceIP = '';
    /**
     *设备型号 - 必填
     *
     * Generated from protobuf field <code>string deviceModel = 6;</code>
     */
    private $deviceModel = '';
    /**
     *设备操作方式 - 必填
     *
     * Generated from protobuf field <code>string deviceOperType = 7;</code>
     */
    private $deviceOperType = '';
    /**
     *解绑时间 - 必填
     *
     * Generated from protobuf field <code>int64 unBindTime = 8;</code>
     */
    private $unBindTime = 0;
    /**
     *安全校验码 - 必填
     *
     * Generated from protobuf field <code>string token = 9;</code>
     */
    private $token = '';
    /**
     *客户端平台 - ClientPlatform( WKWXAPP 挖矿WX小程序, WKIOS 挖矿APP IOS, WKANDROID 挖矿 APP ANDROID), 必填
     *
     * Generated from protobuf field <code>string clientPlatform = 10;</code>
     */
    private $clientPlatform = '';

    public function __construct() {
        \GPBMetadata\DeviceUnbind::initOnce();
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
     *设备ID-必填
     *
     * Generated from protobuf field <code>string deviceId = 2;</code>
     * @return string
     */
    public function getDeviceId()
    {
        return $this->deviceId;
    }

    /**
     *设备ID-必填
     *
     * Generated from protobuf field <code>string deviceId = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDeviceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->deviceId = $var;

        return $this;
    }

    /**
     *设备类型 - 必填
     *
     * Generated from protobuf field <code>string deviceType = 3;</code>
     * @return string
     */
    public function getDeviceType()
    {
        return $this->deviceType;
    }

    /**
     *设备类型 - 必填
     *
     * Generated from protobuf field <code>string deviceType = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDeviceType($var)
    {
        GPBUtil::checkString($var, True);
        $this->deviceType = $var;

        return $this;
    }

    /**
     *设备MAC地址 - 必填
     *
     * Generated from protobuf field <code>string deviceMAC = 4;</code>
     * @return string
     */
    public function getDeviceMAC()
    {
        return $this->deviceMAC;
    }

    /**
     *设备MAC地址 - 必填
     *
     * Generated from protobuf field <code>string deviceMAC = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setDeviceMAC($var)
    {
        GPBUtil::checkString($var, True);
        $this->deviceMAC = $var;

        return $this;
    }

    /**
     *设备IP - 选填
     *
     * Generated from protobuf field <code>string deviceIP = 5;</code>
     * @return string
     */
    public function getDeviceIP()
    {
        return $this->deviceIP;
    }

    /**
     *设备IP - 选填
     *
     * Generated from protobuf field <code>string deviceIP = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setDeviceIP($var)
    {
        GPBUtil::checkString($var, True);
        $this->deviceIP = $var;

        return $this;
    }

    /**
     *设备型号 - 必填
     *
     * Generated from protobuf field <code>string deviceModel = 6;</code>
     * @return string
     */
    public function getDeviceModel()
    {
        return $this->deviceModel;
    }

    /**
     *设备型号 - 必填
     *
     * Generated from protobuf field <code>string deviceModel = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setDeviceModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->deviceModel = $var;

        return $this;
    }

    /**
     *设备操作方式 - 必填
     *
     * Generated from protobuf field <code>string deviceOperType = 7;</code>
     * @return string
     */
    public function getDeviceOperType()
    {
        return $this->deviceOperType;
    }

    /**
     *设备操作方式 - 必填
     *
     * Generated from protobuf field <code>string deviceOperType = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setDeviceOperType($var)
    {
        GPBUtil::checkString($var, True);
        $this->deviceOperType = $var;

        return $this;
    }

    /**
     *解绑时间 - 必填
     *
     * Generated from protobuf field <code>int64 unBindTime = 8;</code>
     * @return int|string
     */
    public function getUnBindTime()
    {
        return $this->unBindTime;
    }

    /**
     *解绑时间 - 必填
     *
     * Generated from protobuf field <code>int64 unBindTime = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUnBindTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->unBindTime = $var;

        return $this;
    }

    /**
     *安全校验码 - 必填
     *
     * Generated from protobuf field <code>string token = 9;</code>
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     *安全校验码 - 必填
     *
     * Generated from protobuf field <code>string token = 9;</code>
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
     * Generated from protobuf field <code>string clientPlatform = 10;</code>
     * @return string
     */
    public function getClientPlatform()
    {
        return $this->clientPlatform;
    }

    /**
     *客户端平台 - ClientPlatform( WKWXAPP 挖矿WX小程序, WKIOS 挖矿APP IOS, WKANDROID 挖矿 APP ANDROID), 必填
     *
     * Generated from protobuf field <code>string clientPlatform = 10;</code>
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

