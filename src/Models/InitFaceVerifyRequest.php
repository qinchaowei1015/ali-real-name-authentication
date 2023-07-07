<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class InitFaceVerifyRequest extends Model
{
    /**
     * @var string
     */
    public $authId;

    /**
     * @var string
     */
    public $callbackToken;

    /**
     * @var string
     */
    public $callbackUrl;

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
    public $certifyUrlType;

    /**
     * @var string
     */
    public $crop;

    /**
     * @var string
     */
    public $encryptType;

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
     * @example {"zimVer":"3.0.0","appVersion": "1","bioMetaInfo": "4.1.0:11501568,0","appName": "com.aliyun.antcloudauth","deviceType": "ios","osVersion": "iOS 10.3.2","apdidToken": "","deviceModel": "iPhone9,1"}
     *
     * @var string
     */
    public $metaInfo;

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
     * @var string
     */
    public $procedurePriority;

    /**
     * @example ID_PRO
     *
     * @var string
     */
    public $productCode;

    /**
     * @example www.aliyun.com
     *
     * @var string
     */
    public $returnUrl;

    /**
     * @example 1000000006
     *
     * @var int
     */
    public $sceneId;

    /**
     * @var string
     */
    public $suitableType;

    /**
     * @example 123456789
     *
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $voluntaryCustomizedContent;
    protected $_name = [
        'authId'                     => 'AuthId',
        'callbackToken'              => 'CallbackToken',
        'callbackUrl'                => 'CallbackUrl',
        'certName'                   => 'CertName',
        'certNo'                     => 'CertNo',
        'certType'                   => 'CertType',
        'certifyId'                  => 'CertifyId',
        'certifyUrlType'             => 'CertifyUrlType',
        'crop'                       => 'Crop',
        'encryptType'                => 'EncryptType',
        'faceContrastPicture'        => 'FaceContrastPicture',
        'faceContrastPictureUrl'     => 'FaceContrastPictureUrl',
        'ip'                         => 'Ip',
        'metaInfo'                   => 'MetaInfo',
        'mobile'                     => 'Mobile',
        'model'                      => 'Model',
        'ossBucketName'              => 'OssBucketName',
        'ossObjectName'              => 'OssObjectName',
        'outerOrderNo'               => 'OuterOrderNo',
        'procedurePriority'          => 'ProcedurePriority',
        'productCode'                => 'ProductCode',
        'returnUrl'                  => 'ReturnUrl',
        'sceneId'                    => 'SceneId',
        'suitableType'               => 'SuitableType',
        'userId'                     => 'UserId',
        'voluntaryCustomizedContent' => 'VoluntaryCustomizedContent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authId) {
            $res['AuthId'] = $this->authId;
        }
        if (null !== $this->callbackToken) {
            $res['CallbackToken'] = $this->callbackToken;
        }
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }
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
        if (null !== $this->certifyUrlType) {
            $res['CertifyUrlType'] = $this->certifyUrlType;
        }
        if (null !== $this->crop) {
            $res['Crop'] = $this->crop;
        }
        if (null !== $this->encryptType) {
            $res['EncryptType'] = $this->encryptType;
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
        if (null !== $this->metaInfo) {
            $res['MetaInfo'] = $this->metaInfo;
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
        if (null !== $this->procedurePriority) {
            $res['ProcedurePriority'] = $this->procedurePriority;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->returnUrl) {
            $res['ReturnUrl'] = $this->returnUrl;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->suitableType) {
            $res['SuitableType'] = $this->suitableType;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->voluntaryCustomizedContent) {
            $res['VoluntaryCustomizedContent'] = $this->voluntaryCustomizedContent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InitFaceVerifyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthId'])) {
            $model->authId = $map['AuthId'];
        }
        if (isset($map['CallbackToken'])) {
            $model->callbackToken = $map['CallbackToken'];
        }
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }
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
        if (isset($map['CertifyUrlType'])) {
            $model->certifyUrlType = $map['CertifyUrlType'];
        }
        if (isset($map['Crop'])) {
            $model->crop = $map['Crop'];
        }
        if (isset($map['EncryptType'])) {
            $model->encryptType = $map['EncryptType'];
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
        if (isset($map['MetaInfo'])) {
            $model->metaInfo = $map['MetaInfo'];
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
        if (isset($map['ProcedurePriority'])) {
            $model->procedurePriority = $map['ProcedurePriority'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ReturnUrl'])) {
            $model->returnUrl = $map['ReturnUrl'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['SuitableType'])) {
            $model->suitableType = $map['SuitableType'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['VoluntaryCustomizedContent'])) {
            $model->voluntaryCustomizedContent = $map['VoluntaryCustomizedContent'];
        }

        return $model;
    }
}
