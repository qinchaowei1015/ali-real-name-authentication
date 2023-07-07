<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\VerifyMaterialResponseBody;

use AlibabaCloud\SDK\Cloudauth\V20190307\Models\VerifyMaterialResponseBody\material\idCardInfo;
use AlibabaCloud\Tea\Model;

class material extends Model
{
    /**
     * @example http://image-demo.img-cn-hangzhou.aliyuncs.com/face-global-example.jpg
     *
     * @var string
     */
    public $faceGlobalUrl;

    /**
     * @example http://image-demo.img-cn-hangzhou.aliyuncs.com/example.jpg
     *
     * @var string
     */
    public $faceImageUrl;

    /**
     * @example false
     *
     * @var string
     */
    public $faceMask;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $faceQuality;

    /**
     * @var idCardInfo
     */
    public $idCardInfo;

    /**
     * @var string
     */
    public $idCardName;

    /**
     * @example 02343218901123****
     *
     * @var string
     */
    public $idCardNumber;
    protected $_name = [
        'faceGlobalUrl' => 'FaceGlobalUrl',
        'faceImageUrl'  => 'FaceImageUrl',
        'faceMask'      => 'FaceMask',
        'faceQuality'   => 'FaceQuality',
        'idCardInfo'    => 'IdCardInfo',
        'idCardName'    => 'IdCardName',
        'idCardNumber'  => 'IdCardNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceGlobalUrl) {
            $res['FaceGlobalUrl'] = $this->faceGlobalUrl;
        }
        if (null !== $this->faceImageUrl) {
            $res['FaceImageUrl'] = $this->faceImageUrl;
        }
        if (null !== $this->faceMask) {
            $res['FaceMask'] = $this->faceMask;
        }
        if (null !== $this->faceQuality) {
            $res['FaceQuality'] = $this->faceQuality;
        }
        if (null !== $this->idCardInfo) {
            $res['IdCardInfo'] = null !== $this->idCardInfo ? $this->idCardInfo->toMap() : null;
        }
        if (null !== $this->idCardName) {
            $res['IdCardName'] = $this->idCardName;
        }
        if (null !== $this->idCardNumber) {
            $res['IdCardNumber'] = $this->idCardNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return material
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceGlobalUrl'])) {
            $model->faceGlobalUrl = $map['FaceGlobalUrl'];
        }
        if (isset($map['FaceImageUrl'])) {
            $model->faceImageUrl = $map['FaceImageUrl'];
        }
        if (isset($map['FaceMask'])) {
            $model->faceMask = $map['FaceMask'];
        }
        if (isset($map['FaceQuality'])) {
            $model->faceQuality = $map['FaceQuality'];
        }
        if (isset($map['IdCardInfo'])) {
            $model->idCardInfo = idCardInfo::fromMap($map['IdCardInfo']);
        }
        if (isset($map['IdCardName'])) {
            $model->idCardName = $map['IdCardName'];
        }
        if (isset($map['IdCardNumber'])) {
            $model->idCardNumber = $map['IdCardNumber'];
        }

        return $model;
    }
}
