<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class DescribeDeviceInfoRequest extends Model
{
    /**
     * @example FACE_TEST
     *
     * @var string
     */
    public $bizType;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example wd.6ziUffspAeW5FVYbaqmexR-1qwNjM
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example 20200330
     *
     * @var string
     */
    public $expiredEndDay;

    /**
     * @example 20190401
     *
     * @var string
     */
    public $expiredStartDay;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 3iJ1AY$oHcu7mC69
     *
     * @var string
     */
    public $userDeviceId;
    protected $_name = [
        'bizType'         => 'BizType',
        'currentPage'     => 'CurrentPage',
        'deviceId'        => 'DeviceId',
        'expiredEndDay'   => 'ExpiredEndDay',
        'expiredStartDay' => 'ExpiredStartDay',
        'pageSize'        => 'PageSize',
        'userDeviceId'    => 'UserDeviceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->expiredEndDay) {
            $res['ExpiredEndDay'] = $this->expiredEndDay;
        }
        if (null !== $this->expiredStartDay) {
            $res['ExpiredStartDay'] = $this->expiredStartDay;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->userDeviceId) {
            $res['UserDeviceId'] = $this->userDeviceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDeviceInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['ExpiredEndDay'])) {
            $model->expiredEndDay = $map['ExpiredEndDay'];
        }
        if (isset($map['ExpiredStartDay'])) {
            $model->expiredStartDay = $map['ExpiredStartDay'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['UserDeviceId'])) {
            $model->userDeviceId = $map['UserDeviceId'];
        }

        return $model;
    }
}
