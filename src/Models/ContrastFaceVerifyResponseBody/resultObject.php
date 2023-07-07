<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\ContrastFaceVerifyResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $certifyId;

    /**
     * @example null
     *
     * @var string
     */
    public $identityInfo;

    /**
     * @example {"faceAttack": "F","facialPictureFront": {"qualityScore": 88.3615493774414,"verifyScore": 50.28594166529785}}
     *
     * @var string
     */
    public $materialInfo;

    /**
     * @example T
     *
     * @var string
     */
    public $passed;

    /**
     * @example 200
     *
     * @var string
     */
    public $subCode;
    protected $_name = [
        'certifyId'    => 'CertifyId',
        'identityInfo' => 'IdentityInfo',
        'materialInfo' => 'MaterialInfo',
        'passed'       => 'Passed',
        'subCode'      => 'SubCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certifyId) {
            $res['CertifyId'] = $this->certifyId;
        }
        if (null !== $this->identityInfo) {
            $res['IdentityInfo'] = $this->identityInfo;
        }
        if (null !== $this->materialInfo) {
            $res['MaterialInfo'] = $this->materialInfo;
        }
        if (null !== $this->passed) {
            $res['Passed'] = $this->passed;
        }
        if (null !== $this->subCode) {
            $res['SubCode'] = $this->subCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertifyId'])) {
            $model->certifyId = $map['CertifyId'];
        }
        if (isset($map['IdentityInfo'])) {
            $model->identityInfo = $map['IdentityInfo'];
        }
        if (isset($map['MaterialInfo'])) {
            $model->materialInfo = $map['MaterialInfo'];
        }
        if (isset($map['Passed'])) {
            $model->passed = $map['Passed'];
        }
        if (isset($map['SubCode'])) {
            $model->subCode = $map['SubCode'];
        }

        return $model;
    }
}
