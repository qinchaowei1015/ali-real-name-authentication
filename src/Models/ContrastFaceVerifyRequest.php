<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class ContrastFaceVerifyRequest extends Model
{
    /**
     * @var string
     */
    public $certName;

    /**
     * @example 330103xxxxxxxxxxxx
     *
     * @var string
     */
    public $certNo;

    /**
     * @example IDENTITY_CARD
     *
     * @var string
     */
    public $certType;

    /**
     * @example 0bfa7c493f850e5178b9f8613634c9xx
     *
     * @var string
     */
    public $certifyId;

    /**
     * @var string
     */
    public $crop;

    /**
     * @example McozS1ZWRcRZStlERcZZo_QOytx5jcgZoZJEoRLOxxxxxxx
     *
     * @var string
     */
    public $deviceToken;

    /**
     * @var string
     */
    public $encryptType;

    /**
     * @var string
     */
    public $faceContrastFile;

    /**
     * @example /9j/4AAQSkZJRgABAQAASxxxxxxx
     *
     * @var string
     */
    public $faceContrastPicture;

    /**
     * @example https://cn-shanghai-aliyun-cloudauth-xxxxxx.oss-cn-shanghai.aliyuncs.com/verify/xxxxx/xxxxx.jpeg
     *
     * @var string
     */
    public $faceContrastPictureUrl;

    /**
     * @example 114.xxx.xxx.xxx
     *
     * @var string
     */
    public $ip;

    /**
     * @example 130xxxxxxxx
     *
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $model;

    /**
     * @example cn-shanghai-aliyun-cloudauth-xxxxx
     *
     * @var string
     */
    public $ossBucketName;

    /**
     * @example verify/xxxxx/xxxxxx.jpeg
     *
     * @var string
     */
    public $ossObjectName;

    /**
     * @example e0c34a77f5ac40a5aa5e6ed20c353888
     *
     * @var string
     */
    public $outerOrderNo;

    /**
     * @example ID_MIN
     *
     * @var string
     */
    public $productCode;

    /**
     * @example 1000000006
     *
     * @var int
     */
    public $sceneId;

    /**
     * @example 123456789
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'certName'               => 'CertName',
        'certNo'                 => 'CertNo',
        'certType'               => 'CertType',
        'certifyId'              => 'CertifyId',
        'crop'                   => 'Crop',
        'deviceToken'            => 'DeviceToken',
        'encryptType'            => 'EncryptType',
        'faceContrastFile'       => 'FaceContrastFile',
        'faceContrastPicture'    => 'FaceContrastPicture',
        'faceContrastPictureUrl' => 'FaceContrastPictureUrl',
        'ip'                     => 'Ip',
        'mobile'                 => 'Mobile',
        'model'                  => 'Model',
        'ossBucketName'          => 'OssBucketName',
        'ossObjectName'          => 'OssObjectName',
        'outerOrderNo'           => 'OuterOrderNo',
        'productCode'            => 'ProductCode',
        'sceneId'                => 'SceneId',
        'userId'                 => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }
        if (null !== $this->certNo) {
            $res['CertNo'] = $this->certNo;
        }
        if (null !== $this->certType) {
            $res['CertType'] = $this->certType;
        }
        if (null !== $this->certifyId) {
            $res['CertifyId'] = $this->certifyId;
        }
        if (null !== $this->crop) {
            $res['Crop'] = $this->crop;
        }
        if (null !== $this->deviceToken) {
            $res['DeviceToken'] = $this->deviceToken;
        }
        if (null !== $this->encryptType) {
            $res['EncryptType'] = $this->encryptType;
        }
        if (null !== $this->faceContrastFile) {
            $res['FaceContrastFile'] = $this->faceContrastFile;
        }
        if (null !== $this->faceContrastPicture) {
            $res['FaceContrastPicture'] = $this->faceContrastPicture;
        }
        if (null !== $this->faceContrastPictureUrl) {
            $res['FaceContrastPictureUrl'] = $this->faceContrastPictureUrl;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->ossBucketName) {
            $res['OssBucketName'] = $this->ossBucketName;
        }
        if (null !== $this->ossObjectName) {
            $res['OssObjectName'] = $this->ossObjectName;
        }
        if (null !== $this->outerOrderNo) {
            $res['OuterOrderNo'] = $this->outerOrderNo;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ContrastFaceVerifyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }
        if (isset($map['CertNo'])) {
            $model->certNo = $map['CertNo'];
        }
        if (isset($map['CertType'])) {
            $model->certType = $map['CertType'];
        }
        if (isset($map['CertifyId'])) {
            $model->certifyId = $map['CertifyId'];
        }
        if (isset($map['Crop'])) {
            $model->crop = $map['Crop'];
        }
        if (isset($map['DeviceToken'])) {
            $model->deviceToken = $map['DeviceToken'];
        }
        if (isset($map['EncryptType'])) {
            $model->encryptType = $map['EncryptType'];
        }
        if (isset($map['FaceContrastFile'])) {
            $model->faceContrastFile = $map['FaceContrastFile'];
        }
        if (isset($map['FaceContrastPicture'])) {
            $model->faceContrastPicture = $map['FaceContrastPicture'];
        }
        if (isset($map['FaceContrastPictureUrl'])) {
            $model->faceContrastPictureUrl = $map['FaceContrastPictureUrl'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['OssBucketName'])) {
            $model->ossBucketName = $map['OssBucketName'];
        }
        if (isset($map['OssObjectName'])) {
            $model->ossObjectName = $map['OssObjectName'];
        }
        if (isset($map['OuterOrderNo'])) {
            $model->outerOrderNo = $map['OuterOrderNo'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
